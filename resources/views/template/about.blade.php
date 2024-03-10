@extends('template.layout')
@section('content')
    <section class="pager-section">
        <div class="container">
            <div class="pager-info">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}" title="">الرئيسية</a></li>
                    <li><span>من نحن</span></li>
                </ul><!--breadcrumb end-->

                <h2>من نحــن</h2>
                <span>نبذة عن الشركة</span>
                <br>
            </div>

        </div>
    </section><!--pager-section end-->

    @if($abouts)
    <section class="block pb-0">
        <div class="container">
            <div class="about-us-section">
                <h2 class="sub-title">المدير التنفيذي </h2>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <img class="wow fadeInUp img-fluid mint-shadow" data-wow-duration="1000ms"
                                 src="{{url('storage/'.$abouts->ceo_picture)}}" alt="">

                        </div><!--abt-imgz end-->

                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <p class="text-justify"
                               style="line-height: 2em;">{!! $abouts->ceo_summary !!}
                            </p>
                            <a href="{{asset('cv-template.pdf')}}" target="_blank" title="" class="lnk-default2 mb-4">تحميل السيرة الذاتية <i
                                        class="la la-arrow-left"></i></a>
                        </div><!--about-text end-->
                    </div>

                </div>
            </div><!--about-us-section end-->
        </div>
    </section>


    <section class="block2">
        <div class="container">
            <div class="our-history">
                <h3 class="sub-title">عن الشركة</h3>
                <p>{!! $abouts->company_summary !!}</p>
                <p>{!! $abouts->extra_text !!}</p>
            </div><!--our-history end-->
        </div>
    </section>

    @endif

    <section class="block2">
        <div class="fixed-bg bg2"></div>
        <div class="container">
            <div class="arch-section">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="sub-title m-0">عصور في الانجازات <br/> مع مختلف المجالات والعملاء</h3>
                    </div>
                    <div class="col-lg-8">
                        <div class="our-awards-sec">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="award-col">
                                        <h2 class="count">10</h2>
                                        <h3>الجوائز</h3>
                                    </div><!--award-col end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="award-col">
                                        <h2 class="count">315</h2>
                                        <h3>العملاء السعيدون</h3>
                                    </div><!--award-col end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="award-col">
                                        <h2 class="count">17</h2>
                                        <h3>سنين الخبرة</h3>
                                    </div><!--award-col end-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="award-col">
                                        <h2 class="count">95</h2>
                                        <h3>سنوات التدريب</h3>
                                    </div><!--award-col end-->
                                </div>
                            </div>
                        </div><!--our-awards-sec end-->
                    </div>
                </div>
            </div><!--arch-section end-->
        </div>
    </section>

    <section class="block testi-section">
        <div class="container">
            <div class="section-title">
                <h3 class="sub-title">اراء عملائنا</h3>
            </div><!--section-title end-->

            <div class="testimonial-section">
                <div class="row testi-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="col-lg-4">
                            <div class="testi-slide">
                                <div class="testi-head">
                                    <img src="{{url('/storage/'.$testimonial->image)}}" style="width: 70px" alt="">
                                    <div class="user-info">
                                        <h3>{{$testimonial->name}}</h3>
                                        <span>{{$testimonial->company}}</span>
                                    </div>
                                </div>
                                <p>{{$testimonial->content}} </p>
                                <ul class="rating">
                                    <li><i class="la la-star"></i></li>
                                    <li><i class="la la-star"></i></li>
                                    <li><i class="la la-star"></i></li>
                                    <li><i class="la la-star"></i></li>
                                    <li><i class="la la-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div><!--testimonial-section end-->
        </div>
    </section>

@endsection