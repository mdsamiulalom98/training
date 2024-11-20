<?php

namespace App\Http\Controllers\Frontend;

use shurjopayv2\ShurjopayLaravelPackage8\Http\Controllers\ShurjopayController;
use App\Http\Controllers\Controller;

use App\Models\Banner;
use App\Models\About;
use App\Models\Whychoose;
use App\Models\Service;
use App\Models\CreatePage;
use App\Models\Course;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Banner::where(['category_id'=>1,'status'=>1])->get();
        $mission = About::where(['section_id'=>2,'status'=>1])->limit(1)->get();
        $whychoose = Whychoose::where(['status'=>1])->get();
        $courses = Course::select('id', 'title', 'slug', 'image', 'course_fee', 'status')->where('status', 1)->get();
        return view('frontEnd.layouts.pages.index',compact('sliders','mission','whychoose', 'courses'));
    }
    public function course_details($slug){
        $details = Course::where('slug', $slug)->with('features:id,course_id,name,image')->first();
        return view('frontEnd.layouts.pages.course_details', compact('details'));
    }
    public function service_details($slug){
        $details = Service::where('slug',$slug)->firstOrfail();
        return view('frontEnd.layouts.pages.service_details',compact('details'));
    }
    public function about(){
        $aboutus = About::where(['section_id'=>1,'status'=>1])->limit(1)->get();
        $mission = About::where(['section_id'=>2,'status'=>1])->limit(1)->get();
        return view('frontEnd.layouts.pages.about',compact('aboutus','mission'));
    }
    public function contact(){
        return view('frontEnd.layouts.pages.contact');
    }
    public function pages($slug){
        $pageinfo = CreatePage::where('slug', $slug)->first();
        return view('frontEnd.layouts.pages.morepages', compact('pageinfo'));
    }

}
