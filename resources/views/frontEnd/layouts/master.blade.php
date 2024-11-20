<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') - {{ $generalsetting->name }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset($generalsetting->favicon) }}" alt="Websolution IT" />
    <meta name="author" content="Websolution IT" />
    <link rel="canonical" href="" />
    @stack('seo')
    @stack('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/backEnd/') }}/assets/css/toastr.min.css" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/responsive.css') }}" />
    <script src="{{ asset('public/frontEnd/js/jquery-3.7.1.min.js') }}"></script>

</head>

<body class="gotop">
    <header>


        <div class="mobile-menu">
            <div class="mobile-menu-logo">
                <div class="logo-image">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($generalsetting->white_logo) }}" alt="" />
                    </a>
                </div>
                <div class="mobile-menu-close">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <ul class="first-nav">
                <li>
                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="project_menus">
                    <a class="{{ Request::is('about-us') ? 'active' : '' }} ">About Us<i
                            class="fa-solid fa-chevron-down"></i></a>
                    <ul class="subcat_pros">
                        <li><a class="{{ Request::is('about-us') ? 'active' : '' }}"
                                href="{{ route('about') }}">About</a></li>

                        <li><a class="" href="{{ route('home') }}">Message From CEO</a></li>

                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('service') ? 'active' : '' }}" href="{{ route('home') }}">Services</a>
                </li>
                <li>
                    <a class="{{ Request::is('why-us') ? 'active' : '' }}" href="{{ route('home') }}">Why Choose
                        Us</a>
                </li>
                <li class="project_menu">
                    <a class="{{ Request::is('blog') ? 'active' : '' }} ">Projects<i
                            class="fa-solid fa-chevron-down"></i></a>
                    <ul class="subcat_pro">
                        <li>
                            <a href="{{ route('home') }}">Upcoming</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Ongoing</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Completed</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('contact-us') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-header">
                            <div class="main-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset($generalsetting->white_logo) }}" alt="websolution-it">
                                </a>
                            </div>
                            <div class="main-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}"
                                            class="{{ Request::is('/') ? 'active' : '' }}">হোম</a>
                                    </li>
                                    <li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
                                    <li><a href="{{ route('home') }}">কোর্সসমূহ <i
                                                class="fa-solid fa-caret-down"></i></a>
                                        <div class="sub-menu">
                                            <ul>
                                                <li><a href="{{ route('course.details', 'demo') }}">ওয়েব ডিজাইন</a></li>
                                                <li><a href="{{ route('course.details', 'demo') }}">ওয়েব ডেভেলপমেন্ট</a></li>
                                                <li><a href="{{ route('course.details', 'demo') }}">গ্রাফিক্স ডিজাইন</a></li>
                                                <li><a href="{{ route('course.details', 'demo') }}">কম্পিউটার অ্যাপ্লিকেশন</a>
                                                </li>
                                                <li><a href="{{ route('course.details', 'demo') }}">ডিজিটাল মার্কেটিং</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('home') }}">সার্ভিসসমূহ <i
                                                class="fa-solid fa-caret-down"></i></a>
                                        <div class="sub-menu">
                                            <ul>
                                                @foreach ($services as $key => $value)
                                                    <li><a
                                                            href="{{ route('service.details', $value->slug) }}">{{ $value->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
                                    <li class="join_us"><a href="{{ route('home') }}">জয়েন করুন</a></li>
                                </ul>
                            </div>

                            <div class="mb__top_bar"><i class="fa-solid fa-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-about">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset($generalsetting->white_logo) }}" alt="websolution-it">
                        </a>
                        <p>{{ $generalsetting->footer_details }}</p>
                        <ul class="social-media">
                            @foreach ($socialicons as $key => $value)
                                <li><a href="{{ $value->link }}" class="facebook-bg"><i
                                            class="{{ $value->icon }}"></i></a></li>
                            @endforeach
                            <li><a href="mailto:{{ $contact->email }}" class="gmail-bg"><i
                                        class="fa-solid fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-menu">
                        <h4 class="footer-title text-effect">প্রয়োজনীয় লিঙ্ক</h4>
                        <ul>
                            @foreach ($pages as $key => $value)
                            <li><a href="{{ route('page', $value->slug) }}">{{ $value->title }}</a></li>
                            @endforeach

                            <li><a href="{{ route('about')  }}">আমাদের সম্পর্কে</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-contact">
                        <h4 class="footer-title text-effect">প্রয়োজনীয় লিঙ্ক</h4>
                        <ul>
                            <li><i class="fa-solid fa-phone"></i>
                                <p>০১৭৬৬৯৫০৯৮৬,০১৭৪২৮৯২৭২৫</p>
                            </li>
                            <li><i class="fa-solid fa-map"></i>
                                <p>দিনাজপুর সিটি কলেজ, নিমনগর বালুবাড়ি, দিনাজপুর</p>
                            </li>
                            <li><i class="fa-solid fa-envelope"></i>
                                <p>training@websolutionit.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="page-overlay"></div>
    <script src="{{ asset('public/frontEnd/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontEnd/js/script.js') }}"></script>
    @stack('script')
    <script>
        $(".mb__top_bar").on("click", function() {
            $("#page-overlay").show();
            $(".mobile-menu").addClass("active");
        });

        $(".mobile-menu-close").on("click", function() {
            $("#page-overlay").hide();
            $(".mobile-menu").removeClass("active");
        });

        $("#page-overlay").on("click", function() {
            $("#page-overlay").hide();
            $(".mobile-menu").removeClass("active");
        });

        $(".project_menu").on("click", function() {
            $(".subcat_pro").toggleClass("actives");
        });


        $(".project_menus").on("click", function() {
            $(".subcat_pros").toggleClass("actives");
        });

    </script>
</body>

</html>
