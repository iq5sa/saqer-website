<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{__('app.app_name')}} - {{__('app.official_website')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Saqer Al Shaheen"/>
    <meta name="author" content="Saqer Al Shaheen">
    <meta name="keywords" content="Saqer Al Shaheen, website"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">


    <link rel="icon" href="{{asset('images/favicon/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("images/favicon/site.webmanifest")}}">


    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/css/bootstrap-rtl.min.css"
          integrity="sha512-WxHTBJz83yMvF4RaULb859Uc22mU124Dl8p8UfQVme5On35uLQm7YKwrK30dyf4HqCkrZEfmcqEod34DrWzD9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

    @yield('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/responsive.css")}}">


</head>


<body class="rtl">


<div class="page-loading">
    <div class="thecube">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c4"></div>
        <div class="cube c3"></div>
    </div>
</div><!--page-loading end-->

<div class="wrapper">

    <header>
        <div class="container">
            <div class="header-content">

                <nav>
                    <ul>
                        <li><a class="active" href="{{ route('home') }}" title="الرئيسية">الرئيسية</a></li>
                        <li><a href="{{ route('about') }}" title="من نحن">من نحن</a></li>
                        <li><a href="{{ route('services') }}" title="الخدمات">الخدمات</a></li>
                        <li><a href="{{ route('portfolio') }}" title="معرض الاعمال">معرض الاعمال</a></li>
                        <li><a href="{{ route('blog') }}" title="الاخبار">الاخبار</a></li>
                        <li><a href="{{ route('contact') }}" title="اتصل بنا">اتصل بنا</a></li>

                    </ul>
                </nav><!--navigation end-->
                <ul class="social-links">
                    <li><a href="{{$abouts->facebook_url}}" title="فيس بوك"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="{{$abouts->instagram_url}}" title="انستغرام"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{$abouts->twitter_url}}" title="تيك توك">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="20" height="20"
                                 viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                            </svg>
                        </a></li>
                </ul><!--social-links end-->

                <div class="logo" style="margin-right: 30px;">
                    <a href="#" title="">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div><!--logo end-->
                <div class="menu-btnn">
                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div><!--menu-bar end-->
                </div>


            </div><!--header-content end-->
        </div>
    </header><!--header end-->


    <div class="">
        <div class="responsive-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}" title="الرئيسية">الرئيسية</a></li>
                <li><a href="{{ route('about') }}" title="من نحن">من نحن</a></li>
                <li><a href="{{ route('services') }}" title="الخدمات">الخدمات</a></li>
                <li><a href="{{ route('portfolio') }}" title="معرض الاعمال">معرض الاعمال</a></li>
                <li><a href="{{ route('blog') }}" title="الاخبار">الاخبار</a></li>
                <li><a href="{{ route('contact') }}" title="اتصل بنا">اتصل بنا</a></li>

            </ul>


            <ul class="text-center">
                <li style="width: 50px !important;height: 50px !important;float: none !important;display: inline-block !important;">
                    <a style="font-size:28px !important;display: inline-block !important; border-bottom: 0 !important;padding: 15px 15px !important;"
                       href="{{$abouts->facebook_url}}" title="فيس بوك"><i class="fab fa-facebook"></i></a></li>
                <li style="width: 50px !important;height: 50px !important;float: none !important;display: inline-block !important;">
                    <a style="font-size:28px !important;display: inline-block !important; border-bottom: 0 !important;padding: 15px 15px !important;"
                       href="{{$abouts->instagram_url}}" title="انستغرام"><i class="fab fa-instagram"></i></a></li>
                <li style="width: 50px !important;height: 50px !important;float: none !important;display: inline-block !important;">
                    <a style="font-size:28px !important;display: inline-block !important; border-bottom: 0 !important;padding: 15px 15px !important;"
                       href="{{$abouts->twitter_url}}" title="تيك توك">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="30" height="30"
                             viewBox="0 0 448 512">
                            <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                        </svg>
                    </a></li>
            </ul><!--social-links end-->

        </div>


    </div><!--responsive-mobile-menu end-->


    @yield('content')

    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12  text-sm-center text-lg-left">
                        <div class="widget widget-company">
                            <h3 class="widget-title">روابط سريعة</h3>
                            <ul class="ft-links">
                                <li><a href="{{ route('about') }}" title="من نحن">من نحن</a></li>
                                <li><a href="{{ route('services') }}" title="الخدمات">الخدمات</a></li>
                                <li><a href="{{ route('portfolio') }}" title="الاعمال">الاعمال</a></li>
                                <li><a href="{{ route('contact') }}" title="اتصل بنا">اتصل بنا</a></li>
                                <li><a href="{{ route('blog') }}" title="الاخبار والنشاطات">الاخبار والنشاطات</a></li>

                            </ul><!--ft-links end-->
                        </div><!--widget-contact end-->
                    </div>
                    <div class="col-lg-4 col-md-12 text-sm-center text-lg-left">

                        <h3 class="widget-title">معلومات التواصل</h3>
                        <ul class="ft-links">
                            <li>
											<span class="ci-icon">
												<i class="fa fa-map-marker-alt"></i>
											</span>
                                <a href="#">العراق، بغداد ، شارع ١٤ رمضان</a>
                            </li>
                            <li>
											<span class="ci-icon">
												<i class="fa fa-clock"></i>
											</span>
                                <span>سبت-احد:</span> 9 صباحا حتى 6 مسائاً <span>الجمعة:</span> مغلق
                            </li>
                            <li>
											<span class="ci-icon">
												<i class="fa fa-at"></i>
											</span>
                                {{$abouts->contact_email}}
                            </li>
                            <li>
											<span class="ci-icon">
												<i class="fa fa-phone"></i>
											</span>
                                <span style="direction: rtl">{{$abouts->phone_number}}</span>
                            </li>
                        </ul>

                    </div>


                    <div class="col-lg-4 col-md-12 text-sm-center text-lg-left">
                        <div class="logo">
                            <div class="text-center">
                                <img src="{{asset("images/logo-white.png")}}" alt="" style="width: 55%">
                            </div>
                            <p class="text-justify mt-2 p-3" style="font-size: 14px; color: #d4cfcf;">
                                في شركة صقر
                                الشاهين، نتجاوز أن نكون مجرد شركة؛ بل نجسد تواصلًا رؤويا متطورة بين التجارة العالمية
                                والتصميم الفني وتنظيم الفعاليات الاستثنائي.
                            </p>
                        </div><!--ft-logo end-->
                    </div>


                </div>
            </div><!--top-footer end-->
        </div>
    </footer><!--footer end-->

</div><!--wrapper end-->
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.min.js"
        integrity="sha512-73t+oD9YRdVZBwLUw/FLF+4+mt6JyUhm8xUEgwA2/+QI3pM+t/6ALkELMcin6caoV1GVt3OMudVlHiMei0DXfQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{asset("js/plugin/slick.min.js")}}"></script>
{{--<script src="{{asset("js/placeholdem.min.js")}}"></script>--}}
<script src="{{asset("js/wow.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/plugin/isotope.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
@yield('js')
<script src="{{asset("js/script.js")}}"></script>



</body>

</html>
