@extends('frontEnd.layouts.master') 
@section('title', $generalsetting->meta_title) 
@push('seo')
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="{{$generalsetting->meta_description}}" />
<meta name="keywords" content="{{$generalsetting->meta_keyword}}" />
<!-- Open Graph data -->
<meta property="og:title" content="{{$generalsetting->meta_title}}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="{{ asset($generalsetting->white_logo) }}" />
<meta property="og:description" content="{{$generalsetting->meta_description}}" />
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('public/frontEnd/css/grt-youtube-popup.css')}}">
@endpush
@section('content')
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="custom-breadcrumb">
                    <h2 class="text-effect">আমাদের সম্পর্কে</h2>
                    <h5>ওয়েবসলিউশন আইটি ট্রেইনিং ওয়েবসলিউশন আইটি -এর একটি শাখা</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mission-section section-padding">
    <div class="container">
        @foreach($aboutus as $key=>$value)
        <div class="row">
            <div class="col-sm-6">
                <div class="mission-video">
                    <div class="video-inner" >
                        <a youtubeid="{{$value->video}}" class="youtube-link">
                            <img src="{{asset($value->image)}}" alt=""> 
                            <span class="play_btn"><i class="fa fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mission-content">
                    <h3 class="mission-title text-effect">{{$value->title}}</h3>
                    <div>{!! $value->description !!}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- mission section end -->
<section class="why-choose-us section-padding">
    <div class="container">
        @foreach($mission as $key=>$value)
        <div class="row">
            <div class="col-sm-6">
                 <div class="mission-content">
                     <h3 class="mission-title text-effect">{{$value->title}}</h3>
                    <div>{!! $value->description !!}</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="why-choose-video">
                    <div class="video-inner" >
                        <a youtubeid="{{$value->video}}" class="youtube-link">
                            <img src="{{asset($value->image)}}" alt=""> 
                            <span class="play_btn"><i class="fa fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- why choose end -->
@endsection
@push('script')
<script src="{{asset('public/frontEnd/js/grt-youtube-popup.js')}}"></script>
<script>
    $(".youtube-link").grtyoutube({
        autoPlay: true,
        theme: "light",
    });
</script>
@endpush
