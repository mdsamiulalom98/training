@extends('frontEnd.layouts.master') 
@section('title', $details->title) 
@push('seo')
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="{{$details->meta_description}}" />
<meta name="keywords" content="{{$details->meta_keyword}}" />
<!-- Open Graph data -->
<meta property="og:title" content="{{$details->meta_title}}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="{{ asset($details->image) }}" />
<meta property="og:description" content="{{$details->meta_description}}" />
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
                    <h2 class="text-effect">{{$details->title}}</h2>
                    <h5>{{$details->subtitle}}</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-details-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="service-details">
                    <div class="service-img">
                        <img src="{{asset($details->image)}}" alt="">
                    </div>
                    <div class="service-content">
                       {!!$details->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontEnd.layouts.partials.clients')
@endsection
