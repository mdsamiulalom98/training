<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Str;
class ServiceController extends Controller
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
        $data = Service::orderBy('id','DESC')->get();
        return view('backEnd.service.index',compact('data'));
    }
    public function create(){
        return view('backEnd.service.create');
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
        $uploadpath = 'public/uploads/service/';
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
        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->slug));
        $input['image'] = $imageUrl;
        Service::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('services.index');
    }

    public function edit($id)
    {
        $edit_data = Service::find($id);
        return view('backEnd.service.edit',compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        $update_data = Service::find($request->id);
        $input = $request->except('files');
        $image = $request->file('image');
        if($image){
            // image with intervention
            $name =  time().'-'.$image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp',$name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));
            $uploadpath = 'public/uploads/service/';
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
        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->slug));
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('services.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Service::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Service::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Service::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
