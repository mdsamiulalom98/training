<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Str;
class AboutController extends Controller
{
    function __construct()
    {
         // $this->middleware('permission:about-list|about-create|about-edit|about-delete', ['only' => ['index','store']]);
         // $this->middleware('permission:about-create', ['only' => ['create','store']]);
         // $this->middleware('permission:about-edit', ['only' => ['edit','update']]);
         // $this->middleware('permission:about-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = About::orderBy('id','DESC')->get();
        return view('backEnd.about.index',compact('data'));
    }
    public function create(){
        return view('backEnd.about.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'status' => 'required',
        ]);
        // image with intervention
        $image = $request->file('image');
        $name =  time().'-'.$image->getClientOriginalName();
        $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp',$name);
        $name = strtolower(preg_replace('/\s+/', '-', $name));
        $uploadpath = 'public/uploads/about/';
        $imageUrl = $uploadpath.$name;
        $img=Image::make($image->getRealPath());
        $img->encode('webp', 90);
        $width = '';
        $height = '';
        $img->height() > $img->width() ? $width=null : $height=null;
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($imageUrl);

        $input = $request->except('files');
        $input['status'] = $request->status?1:0;
        $input['image'] = $imageUrl;
        About::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('abouts.index');
    }

    public function edit($id)
    {
        $edit_data = About::find($id);
        return view('backEnd.about.edit',compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $update_data = About::find($request->id);
        $input = $request->except('files');
        $image = $request->file('image');
        if($image){
            // image with intervention
            $name =  time().'-'.$image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp',$name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));
            $uploadpath = 'public/uploads/blog/';
            $imageUrl = $uploadpath.$name;
            $img=Image::make($image->getRealPath());
            $img->encode('webp', 90);
            $width = '';
            $height = '';
            $img->height() > $img->width() ? $width=null : $height=null;
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($imageUrl);
            $input['image'] = $imageUrl;
            File::delete($update_data->image);
        }else{
            $input['image'] = $update_data->image;
        }

        $input['status'] = $request->status?1:0;
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('abouts.index');
    }

    public function inactive(Request $request)
    {
        $inactive = About::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = About::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = About::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
