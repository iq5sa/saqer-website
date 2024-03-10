@extends('template.layout')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
@endsection
@section('content')
    <section class="main-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h2 class="wow fadeInUp" data-wow-duration="1000ms">{{$sliders->title}}</h2>
                        <h2 class="wow fadeInUp" data-wow-duration="1000ms">{{$sliders->subtitle}}</h2>
                        <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            {{$sliders->description}}
                        </p>
                        <a href="{{route("about")}}" title="" class="lnk-default wow fadeInUp"
                           data-wow-duration="1000ms"
                           data-wow-delay="500ms">عرض المزيــد <i class="la la-arrow-left"></i> <span></span></a>

                        <div class="clearfix"></div>
                    </div><!--banner-content end-->
                </div>
                <div class="col-lg-6">

                    <div class="banner-slider">
                        @foreach($sliders->attachment as $sliderImage)
                            <div class="banner-slide">
                                <img src="{{url('storage/'.$sliderImage)}}" alt="">
                            </div><!--banner-slide end-->

                        @endforeach

                    </div><!--banner-slider end-->
                </div>
            </div>
        </div>
    </section><!--main-banner end-->
    <section class="block pb-5">
        <div class="container">
            <h3 class="sub-title">خدماتنا</h3>
            <div class="team-section">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <div class="mint-shadow w-100 h-100 p-3 text-center">
                                <img src="{{url("storage/".$service->image)}}" class="w-25 my-4" alt="">

                                <h5 class="mt-3 font-weight-bold text-black mb-2">{{$service->name}}</h5>
                                <p class="text-secondary mb-2">{{$service->description}}</p>
                                <a href="#" title="" class="lnk-default2 my-4"
                                   style="font-size: 14px;font-weight: normal;">اقرأ
                                    المزيد <i
                                            class="la la-arrow-left"></i></a>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>

    <section class="block2 ">
        <div class="fixed-bg bg1"></div>
        <div class="container">
            <div class="latest-projects-section">
                <div class="row">
                    <div class="col-md-12">

                        <div class="text-center">

                            @if($videoPromotion)
                                @php $embedUrl = \Illuminate\Support\Str::of($videoPromotion->url)->explode('v=');@endphp

                                <div class="vlog-cover-bg video">
                                    <a class="vlog-cover"
                                       data-fancybox
                                       href="{{$videoPromotion->url}}"
                                       data-caption="{{$videoPromotion->title}}"
                                       data-type="html5video">
                                        <img
                                                class="img-fluid attachment-vlog-cover-full size-vlog-cover-full wp-post-image"
                                                src="https://i3.ytimg.com/vi/{{$embedUrl[1]}}/maxresdefault.jpg"
                                                alt=""/>
                                        <span class="vlog-format-action large"><i class="fa fa-play"></i></span>
                                    </a>
                                    <div class="vlog-format-content video"></div>
                                </div>

                            @endif

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                   style="line-height: 2em;">{!! \Illuminate\Support\Str::limit($abouts->ceo_summary,500) !!}
                                </p>
                                <a href="{{route('about')}}" title="" class="lnk-default2 mb-4">اقرأ المزيد <i
                                            class="la la-arrow-left"></i></a>
                            </div><!--about-text end-->
                        </div>

                    </div>
                </div><!--about-us-section end-->
            </div>
        </section>
    @endif
    <section class="block">
        <div class="container">
            <h3 class="sub-title">الاخبار والنشاطات</h3>
            <div class="blog-posts">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-post">
                                <div class="blog-thumbnail">
                                    <img src="{{url('storage/'. $blog->image)}}" alt="">
                                    <span class="category">{{\App\Models\Category::find($blog->category_id)->title}}</span>
                                </div>
                                <div class="blog-info">
                                    <span>{{\Illuminate\Support\Carbon::parse($blog->created_at)->format("Y M D")}}</span>
                                    <h2 class="blog-title"><a href="{{route('blog-details',["slug"=>$blog->slug])}}"
                                                              title="">{{\Illuminate\Support\Str::limit($blog->title,30)}}</a>
                                    </h2>
                                    <p>{!! \Illuminate\Support\Str::limit($blog->content,100) !!}</p>
                                    <a href="{{route('blog-details',["slug"=>$blog->slug])}}" title=""
                                       class="lnk-default2">اقرا المزيد<i
                                                class="la la-arrow-left"></i></a>
                                </div>
                            </div><!--blog-post end-->
                        </div>

                    @endforeach

                </div>
            </div><!---blog-posts end-->
        </div>
    </section>



    <section class="block2">
        <div class="fixed-bg bg1"></div>
        <div class="container">
            <div class="latest-projects-section">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="project-text">
                            <h3 class="sub-title">معرض الاعمال</h3>
                            <p class="text-justify">
                                في قسم معرض الأعمال بـ "صقر الشاهين"، نعتبر الإبداع والتميز ركيزتين أساسيتين للتفرد
                                والتميز في عرض أعمالنا. نقدم لعملائنا وشركائنا فرصة فريدة لاستكشاف عالمنا المتميز من
                                خلال مجموعة متنوعة من المشاريع والإبداعات.


                            </p>
                            <a href="{{route('portfolio')}}" title="" class="lnk-default2">تصفح المزيد <i
                                        class="la la-arrow-left"></i></a>
                        </div><!--project-text end-->
                    </div>
                    <div class="col-lg-7">
                        <div class="project-carousel">

                            @foreach($portfolios as $portfolio)

                                <div class="project-item">

                                        <img src="{{url('/storage/'.$portfolio->image)}}" alt="">
                                        <div class="project-info">
                                            <h3>{{$portfolio->title}}</h3>
                                            <span>{{\App\Models\Category::find($portfolio->category_id)->title}}</span>
                                        </div><!--project-info end-->

                                </div>

                            @endforeach


                        </div><!--project-carousel end-->
                    </div>
                </div>
            </div><!--latest-projects-section end-->
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

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox]', {
            //
        });
    </script>

@endsection