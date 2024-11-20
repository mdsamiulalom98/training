<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whychoose;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Str;
class WhychooseController extends Controller
{
     function __construct()
    {
         // $this->middleware('permission:whychoose-list|whychoose-create|whychoose-edit|whychoose-delete', ['only' => ['index','store']]);
         // $this->middleware('permission:whychoose-create', ['only' => ['create','store']]);
         // $this->middleware('permission:whychoose-edit', ['only' => ['edit','update']]);
         // $this->middleware('permission:whychoose-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Whychoose::orderBy('id','DESC')->get();
        return view('backEnd.whychoose.index',compact('data'));
    }
    public function create(){
        return view('backEnd.whychoose.create');
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
        $uploadpath = 'public/uploads/whychoose/';
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
        Whychoose::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('whychoose.index');
    }

    public function edit($id)
    {
        $edit_data = Whychoose::find($id);
        return view('backEnd.whychoose.edit',compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $update_data = Whychoose::find($request->id);
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
        return redirect()->route('whychoose.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Whychoose::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Whychoose::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Whychoose::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
