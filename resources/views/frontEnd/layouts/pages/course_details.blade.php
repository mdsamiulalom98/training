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
                        <h2 class="text-effect">Full Stack Web Development</h2>
                        <h5>Full Stack Web Development By Laravel Framework ( Online )</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-details-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="course-details-img">
                        <div class="video-inner">
                            <a youtubeid="C_OGuO-0uaA" class="youtube-link">
                                <img src="{{ asset('public/frontEnd/images/mission.jpeg') }}" alt="">
                                <span class="play_btn"><i class="fa fa-play"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="course-details">
                        <ul class="course-duration">
                            <li>
                                <p class="duration">সময়কাল</p>
                                <p>৩.৫ মাসের কোর্স</p>
                            </li>
                            <li>
                                <p class="duration">ক্লাস সংখ্যা</p>
                                <p>৩২টি ক্লাস</p>
                            </li>
                            <li>
                                <p class="duration">সপ্তাহে</p>
                                <p>২টি করে ক্লাস</p>
                            </li>
                        </ul>
                        <div class="course-overview">
                            <p>MERN Stack is a combination of four different technologies that is used to develop a website
                                in an efficient manner. In this course, you can gain your expertise in three areas- Web
                                Development, Web Design and App Development. Most of the companies nowadays are using the
                                MERN Stack Programme for its easily customizable, cost-effective features. Enroll in this
                                course to develop your skills in this field.</p>
                        </div>
                        <div class="course-price">
                            <h5>অফলাইন কোর্স ফি</h5>
                            <h2>৮০০০ টাকা</h2>
                        </div>
                        <div class="call-or-message">
                            @php
                                $numToBangla = new \Rakibhstu\Banglanumber\NumberToBangla();
                                $phoneNumber = $numToBangla->bnNum($contact->hotline);
                            @endphp
                            <a href="" class="details-call"><i class="fa-solid fa-phone"></i> কল করুন : <span
                                    class="tiro-font">{{ $phoneNumber }}</span></a>
                            <a href=""><i class="fa-solid fa-messanger"></i> মেসেজ দিন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-element">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-title">
                        <h2 class="text-effect mb-4 text-center">এই কোর্সে যা যা পাচ্ছেন</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($details->features as $feature)
                    <div class="col-sm-4 col-6 col-md-3 mb-4">
                        <div class="element-content">
                            <img src="{{ asset($feature->image) }}" alt="">
                            <p>{{ $feature->name }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>৩২+ ক্লাশ</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>আপডেটেড সিলেবাস</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>৩২+ ক্লাশ</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>আপডেটেড সিলেবাস</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>৩২+ ক্লাশ</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>আপডেটেড সিলেবাস</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>৩২+ ক্লাশ</p>
                    </div>
                </div>
                <div class="col-sm-4 col-6 col-md-3 mb-4">
                    <div class="element-content">
                        <img src="{{ asset('public/frontEnd/images/syllabus.png') }}" alt="">
                        <p>৩২+ ক্লাশ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="curriculam-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3 class="text-effect mb-4">কোর্স কারিকুলাম</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="curriculam-content">
                    <ul>
                        <li><i class="fa-solid fa-check-square"></i> HTML5</li>
                        <li><i class="fa-solid fa-check-square"></i> CSS3</li>
                        <li><i class="fa-solid fa-check-square"></i> Bootstrap</li>
                        <li><i class="fa-solid fa-check-square"></i> javaScript</li>
                        <li><i class="fa-solid fa-check-square"></i> jQuery</li>
                        <li><i class="fa-solid fa-check-square"></i> Sublime Text</li>
                        <li><i class="fa-solid fa-check-square"></i> VS Code</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('frontEnd.layouts.partials.clients')
@endsection
