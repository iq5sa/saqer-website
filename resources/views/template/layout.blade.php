<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{__('app.app_name')}} - {{__('app.official_website')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mint Multipurpose Agency Website"/>
    <meta name="author" content="Saqer Al Shaheen">
    <meta name="keywords" content="Saqer Al Shaheen, website"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/css/bootstrap-rtl.min.css"
          integrity="sha512-WxHTBJz83yMvF4RaULb859Uc22mU124Dl8p8UfQVme5On35uLQm7YKwrK30dyf4HqCkrZEfmcqEod34DrWzD9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
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
                    <li><a href="#" title=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                </ul><!--social-links end-->

                <div class="logo" style="margin-left: 30px;">
                    <a href="#" title="">
                        <img src="{{asset('images/logo.png')}}" style="width: 140px;padding: 10px" alt="">
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


    <div class="responsive-mobile-menu">
        <ul>
            <li><a href="{{ route('home') }}" title="الرئيسية">الرئيسية</a></li>
            <li><a href="{{ route('about') }}" title="من نحن">من نحن</a></li>
            <li><a href="{{ route('services') }}" title="الخدمات">الخدمات</a></li>
            <li><a href="{{ route('portfolio') }}" title="معرض الاعمال">معرض الاعمال</a></li>
            <li><a href="{{ route('blog') }}" title="الاخبار">الاخبار</a></li>
            <li><a href="{{ route('contact') }}" title="اتصل بنا">اتصل بنا</a></li>

        </ul>
    </div><!--responsive-mobile-menu end-->


    @yield('content')

    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <div class="text-center">
                                <img src="{{asset("images/logo-white.png")}}" alt="" style="width: 55%">
                            </div>
                            <p class="text-justify mt-2 p-3" style="font-size: 14px; color: #d4cfcf">في شركة صقر
                                الشاهين، نتجاوز أن نكون مجرد شركة؛ بل نجسد تواصلًا رؤويا متطورة بين التجارة العالمية
                                والتصميم الفني وتنظيم الفعاليات الاستثنائي.</p>
                        </div><!--ft-logo end-->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
                        <div class="widget widget-company text-left">
                            <h3 class="widget-title">روابط مفيدة</h3>
                            <ul class="ft-links">
                                <li><a href="{{ route('about') }}" title="من نحن">من نحن</a></li>
                                <li><a href="{{ route('services') }}" title="الخدمات">الخدمات</a></li>
                                <li><a href="{{ route('portfolio') }}" title="الاعمال">الاعمال</a></li>
                                <li><a href="{{ route('contact') }}" title="اتصل بنا">اتصل بنا</a></li>
                                <li><a href="{{ route('blog') }}" title="الاخبار والنشاطات">الاخبار والنشاطات</a></li>

                            </ul><!--ft-links end-->
                        </div><!--widget-contact end-->
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <div class="widget widget-info">
                            <h3 class="widget-title">القائمة البريدية</h3>
                            <form class="widget-form">
                                <input type="text" name="email" placeholder="البريج الالكتروني">
                                <button type="submit"><i class="la la-arrow-left"></i></button>
                            </form>
                            <span>اشترك لتبقى على اطلاع بالجديد.</span>
                            <ul class="social-links">
                                <li><a href="#" title=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            </ul><!--social-links end-->
                        </div><!--widget-info end-->
                    </div>

                </div>
            </div><!--top-footer end-->
        </div>
    </footer><!--footer end-->

</div><!--wrapper end-->
<script src="{{'js/jquery.min.js'}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.min.js"
        integrity="sha512-73t+oD9YRdVZBwLUw/FLF+4+mt6JyUhm8xUEgwA2/+QI3pM+t/6ALkELMcin6caoV1GVt3OMudVlHiMei0DXfQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("js/plugin/slick.min.js")}}"></script>
{{--<script src="{{asset("js/plugin/html5lightbox.js")}}"></script>--}}
<script src="{{asset("js/placeholdem.min.js")}}"></script>
<script src="{{asset("js/wow.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/plugin/isotope.js")}}"></script>

<script src="{{asset("js/script.js")}}"></script>


</body>

</html>
