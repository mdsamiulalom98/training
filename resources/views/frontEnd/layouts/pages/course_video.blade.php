@extends('frontEnd.layouts.master')
@section('title', $generalsetting->meta_title)
@push('seo')
    <meta name="app-url" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="{{ $generalsetting->meta_description }}" />
    <meta name="keywords" content="{{ $generalsetting->meta_keyword }}" />
    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $generalsetting->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{ asset($generalsetting->white_logo) }}" />
    <meta property="og:description" content="{{ $generalsetting->meta_description }}" />
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/grt-youtube-popup.css') }}">
@endpush
@section('content')
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom-breadcrumb">
                        <h2 class="text-effect">{{ $details->title }}</h2>
                        <h5>আমাদের ফ্রী কোর্সের ভিডিও সমূহ </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-details-section section-padding">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-5">
                    <div class="course-video-details">
                        <div class="course-video-title">
                            <h4>{{ $details->title }}</h4>
                        </div>
                        <ul class="course-lessons">
                            @foreach($videos as $key => $value)
                            <li class="{{ $value->id == $video->id ? 'active' : '' }}">
                                <a href="{{ route('course.video', ['slug' => $details->slug, 'id' => $value->id]) }}">{{ $value->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-7">
                    <div class="course-details-img">
                        <div class="video-inner">
                            <iframe  src="https://www.youtube.com/embed/{{ $video->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection
