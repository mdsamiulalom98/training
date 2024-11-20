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
    <section class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slider-inner">
                        <div class="slider-content">
                            <h1 class="text-effect">{{ $generalsetting->slider_title }}</h1>
                            <p>{{ $generalsetting->slider_details }}</p>
                            <a href="" class="slider_btn">যোগাযোগ করুন</a>
                        </div>
                        <div class="main-slider owl-carousel">
                            @foreach ($sliders as $key => $value)
                                <div class="slider-item">
                                    <a href="{{ $value->link }}">
                                        <img src="{{ asset($value->image) }}" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider section end -->
    <section class="mission-section section-padding">
        <div class="container">
            @foreach ($mission as $key => $value)
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mission-video">
                            <div class="video-inner">
                                <a youtubeid="{{ $value->video }}" class="youtube-link">
                                    <img src="{{ asset($value->image) }}" alt="">
                                    <span class="play_btn"><i class="fa fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mission-content">
                            <h3 class="mission-title text-effect">{{ $value->title }}</h3>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="why-choose-content">
                        <h3 class="choose-title text-effect">কেনো আমাদের কোর্স করবেন?</h3>
                        <ul>
                            @foreach ($whychoose as $key => $value)
                                <li>
                                    <img src="{{ asset($value->image) }}" alt="">
                                    <p>{{ $value->title }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="why-choose-video">
                        <div class="video-inner">
                            <a youtubeid="C_OGuO-0uaA" class="youtube-link">
                                <img src="{{ asset('public/frontEnd/images/why-choose.jpg') }}" alt="">
                                <span class="play_btn"><i class="fa fa-play"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose end -->
    <section class="course-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title mb-4">
                        <h2 class="text-effect">আমাদের কোর্সসমূহ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $key => $value)
                    <div class="col-sm-4">
                        <div class="course-item">
                            <div class="course-img">
                                <a href="{{ route('course.details', $value->slug) }}">
                                    <img src="{{ asset($value->image) }}" alt="">
                                </a>
                            </div>
                            <div class="course-content">
                                <a href="{{ route('course.details', $value->slug) }}" class="course-title">
                                    {{ $value->title }}
                                </a>
                                <ul>
                                    <li>কোর্স ফি</li>
                                    <li class="course-fee">
                                        @php
                                            $numToBangla = new \Rakibhstu\Banglanumber\NumberToBangla();
                                            $banglaNumber = $numToBangla->bnNum($value->course_fee);
                                        @endphp
                                        {{ $banglaNumber }}
                                        টাকা</li>
                                </ul>
                                <a href="{{ route('course.details', $value->slug) }}" class="course-btn">বিস্তারিত দেখুন</a>
                            </div>
                        </div>
                    </div>
                    <!-- col-4 end -->
                @endforeach
                <div class="col-sm-4">
                    <div class="course-item">
                        <div class="course-img">
                            <a href="">
                                <img src="{{ asset('public/frontEnd/images/course-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="course-content">
                            <a href="" class="course-title">
                                ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট
                            </a>
                            <ul>
                                <li>কোর্স ফি</li>
                                <li class="course-fee">৮০০০ টাকা</li>
                            </ul>
                            <a href="" class="course-btn">বিস্তারিত দেখুন</a>
                        </div>
                    </div>
                </div>
                <!-- col-4 end -->
                <div class="col-sm-4">
                    <div class="course-item">
                        <div class="course-img">
                            <a href="">
                                <img src="{{ asset('public/frontEnd/images/course-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="course-content">
                            <a href="" class="course-title">
                                ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট
                            </a>
                            <ul>
                                <li>কোর্স ফি</li>
                                <li class="course-fee">৮০০০ টাকা</li>
                            </ul>
                            <a href="" class="course-btn">বিস্তারিত দেখুন</a>
                        </div>
                    </div>
                </div>
                <!-- col-4 end -->
                <div class="col-sm-4">
                    <div class="course-item">
                        <div class="course-img">
                            <a href="">
                                <img src="{{ asset('public/frontEnd/images/course-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="course-content">
                            <a href="" class="course-title">
                                ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট
                            </a>
                            <ul>
                                <li>কোর্স ফি</li>
                                <li class="course-fee">৮০০০ টাকা</li>
                            </ul>
                            <a href="" class="course-btn">বিস্তারিত দেখুন</a>
                        </div>
                    </div>
                </div>
                <!-- col-4 end -->
                <div class="col-sm-4">
                    <div class="course-item">
                        <div class="course-img">
                            <a href="">
                                <img src="{{ asset('public/frontEnd/images/course-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="course-content">
                            <a href="" class="course-title">
                                ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট
                            </a>
                            <ul>
                                <li>কোর্স ফি</li>
                                <li class="course-fee">৮০০০ টাকা</li>
                            </ul>
                            <a href="" class="course-btn">বিস্তারিত দেখুন</a>
                        </div>
                    </div>
                </div>
                <!-- col-4 end -->
                <div class="col-sm-4">
                    <div class="course-item">
                        <div class="course-img">
                            <a href="">
                                <img src="{{ asset('public/frontEnd/images/course-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="course-content">
                            <a href="" class="course-title">
                                ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট
                            </a>
                            <ul>
                                <li>কোর্স ফি</li>
                                <li class="course-fee">৮০০০ টাকা</li>
                            </ul>
                            <a href="" class="course-btn">বিস্তারিত দেখুন</a>
                        </div>
                    </div>
                </div>
                <!-- col-4 end -->
            </div>
        </div>
    </section>
    <!-- course section end -->
    @include('frontEnd.layouts.partials.clients')
@endsection
@push('script')
    <script src="{{ asset('public/frontEnd/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/grt-youtube-popup.js') }}"></script>
    <script>
        $(".youtube-link").grtyoutube({
            autoPlay: true,
            theme: "light",
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".main-slider").owlCarousel({
                items: 1,
                loop: true,
                dots: false,
                autoplay: true,
                nav: true,
                autoplayHoverPause: false,
                margin: 0,
                mouseDrag: true,
                smartSpeed: 1000,
                autoplayTimeout: 3000,
                navText: ["<i class='fa-solid fa-angle-left'></i>",
                    "<i class='fa-solid fa-angle-right'></i>"
                ]
            });
        });
    </script>
@endpush
