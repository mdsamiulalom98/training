<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseFeature;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index','store']]);
        // $this->middleware('permission:service-create', ['only' => ['create','store']]);
        // $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Course::orderBy('id', 'DESC')->get();
        return view('backEnd.course.index', compact('data'));
    }
    public function create()
    {
        return view('backEnd.course.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'subtitle' => 'required',
            'duration' => 'required',
            'lecture' => 'required',
            'schedule' => 'required',
            'course_fee' => 'required',
            'description' => 'required',
            'module' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'status' => 'required',
        ]);
        // image with intervention
        $image = $request->file('image');
        $name =  time() . '-' . $image->getClientOriginalName();
        $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
        $name = strtolower(preg_replace('/\s+/', '-', $name));
        $uploadpath = 'public/uploads/course/';
        $imageUrl = $uploadpath . $name;
        $img = Image::make($image->getRealPath());
        $img->encode('webp', 90);
        $width = '';
        $height = '';
        $img->height() > $img->width() ? $width = null : $height = null;
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($imageUrl);

        $input = $request->except('files', 'feature_name', 'feature');
        $input['status'] = $request->status ? 1 : 0;
        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->slug));
        $input['image'] = $imageUrl;
        $course = Course::create($input);

        $features = $request->feature_name;
        $images = $request->file('feature');
        if ($images) {
            foreach ($images as $key => $fimage) {
                $fname =  time() . '-' . $fimage->getClientOriginalName();
                $fname = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $fname);
                $fname = strtolower(Str::slug($fname));
                $fuploadpath = 'public/uploads/coursefeatures/';
                $featureimageUrl = $fuploadpath . $fname;
                $fimg = Image::make($fimage->getRealPath());
                $fimg->encode('webp', 90);
                $fwidth = 200;
                $fheight = 200;
                $fimg->resize($fwidth, $fheight);
                $fimg->save($featureimageUrl);

                $coursefeature = new CourseFeature();
                $coursefeature->course_id = $course->id;
                $coursefeature->name = $features[$key];
                $coursefeature->image = $featureimageUrl;
                $coursefeature->save();
            }
        }

        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $edit_data = Course::find($id);
        $course_features = CourseFeature::where('course_id', $edit_data->id)->get();
        return view('backEnd.course.edit', compact('edit_data', 'course_features'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'subtitle' => 'required',
            'duration' => 'required',
            'lecture' => 'required',
            'schedule' => 'required',
            'course_fee' => 'required',
            'description' => 'required',
            'module' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'status' => 'required',
        ]);
        $update_data = Course::find($request->id);
        $input = $request->except('files', 'up_id', 'up_feature_name', 'up_feature', 'feature_name', 'feature', 'image');
        $image = $request->file('image');
        if ($image) {
            // image with intervention
            $name =  time() . '-' . $image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));
            $uploadpath = 'public/uploads/course/';
            $imageUrl = $uploadpath . $name;
            $img = Image::make($image->getRealPath());
            $img->encode('webp', 90);
            $width = '';
            $height = '';
            $img->height() > $img->width() ? $width = null : $height = null;
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($imageUrl);
            $input['image'] = $imageUrl;
            File::delete($update_data->image);
        } else {
            $input['image'] = $update_data->image;
        }

        $input['status'] = $request->status ? 1 : 0;
        $update_data->update($input);

        if ($request->up_id) {
            $update_ids = array_filter($request->up_id);
            $up_feature_name = $request->up_feature_name; // Assuming feature names are in $request->up_feature_name
            $updatefimages = $request->file('up_feature'); // Assuming images are in a file input named 'updatefimages'


            if ($update_ids) {
                foreach ($update_ids as $key => $update_id) {
                    // Check if feature name is provided
                    if (!isset($up_feature_name[$key])) {
                        continue; // Skip if the feature name is missing
                    }

                    // Retrieve the existing record from the database
                    $updatefeature = CourseFeature::find($update_id);
                    if (!$updatefeature) {
                        continue; // Skip if the record is not found
                    }

                    // Update the feature name
                    $updatefeature->name = $up_feature_name[$key];

                    // Check if a new image is provided in the request
                    if (isset($updatefimages[$key])) {
                        $fimage = $updatefimages[$key];

                        // Process the new image
                        $fname = time() . '-' . $fimage->getClientOriginalName();
                        $fname = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $fname);
                        $fname = strtolower(Str::slug($fname));
                        $fuploadpath = 'public/uploads/coursefeatures/';
                        $featureimageUrl = $fuploadpath . $fname;

                        // Save the new image
                        $fimg = Image::make($fimage->getRealPath());
                        $fimg->encode('webp', 90);
                        $fimg->resize(200, 200);
                        $fimg->save($featureimageUrl);

                        // Update the image field
                        $updatefeature->image = $featureimageUrl;
                    }

                    // Save the updated record
                    $updatefeature->save();
                }

            }
        }

        $features = $request->feature_name;
        $images = $request->file('feature');
        if ($images) {
            foreach ($images as $key => $fimage) {
                $fname =  time() . '-' . $fimage->getClientOriginalName();
                $fname = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $fname);
                $fname = strtolower(Str::slug($fname));
                $fuploadpath = 'public/uploads/coursefeatures/';
                $featureimageUrl = $fuploadpath . $fname;
                $fimg = Image::make($fimage->getRealPath());
                $fimg->encode('webp', 90);
                $fwidth = 200;
                $fheight = 200;
                $fimg->resize($fwidth, $fheight);
                $fimg->save($featureimageUrl);

                $coursefeature = new CourseFeature();
                $coursefeature->course_id = $update_data->id;
                $coursefeature->name = $features[$key];
                $coursefeature->image = $featureimageUrl;
                $coursefeature->save();
            }
        }

        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('courses.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Course::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Course::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Course::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }
    public function feature_destroy(Request $request)
    {
        $delete_data = CourseFeature::find($request->id);
        $delete_data->delete();
        Toastr::success('Success','Product price delete successfully');
        return redirect()->back();
    }

    public function slug_generate(Request $request) {
        $slug = strtolower(Str::slug($request->title));
        return response()->json(compact('slug'));
    }
}
