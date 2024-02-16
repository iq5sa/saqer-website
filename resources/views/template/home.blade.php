@extends('template.layout')
@section('content')
    <section class="main-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h2 class="wow fadeInUp" data-wow-duration="1000ms"> شركة صقر
                            الشاهين</h2>
                        <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">

                            في شركة صقر الشاهين، نتجاوز أن نكون مجرد شركة؛ بل نجسد تواصلًا رؤويا متطورة بين التجارة
                            العالمية والتصميم الفني وتنظيم الفعاليات الاستثنائي.
                        </p>
                        <a href="#" title="" class="lnk-default wow fadeInUp" data-wow-duration="1000ms"
                           data-wow-delay="500ms">اكتشف المزيــد <i class="la la-arrow-left"></i> <span></span></a>

                        <div class="clearfix"></div>
                    </div><!--banner-content end-->
                </div>
                <div class="col-lg-6">
                    <div class="banner-slider">
                        <div class="banner-slide">
                            <img src="{{asset("images/banner/1.jpg")}}" alt="">
                        </div><!--banner-slide end-->
                        <div class="banner-slide">
                            <img src="{{asset("images/banner/2.jpg")}}" alt="">
                        </div><!--banner-slide end-->
                        <div class="banner-slide">
                            <img src="{{asset("images/banner/3.jpeg")}}" alt="">
                        </div><!--banner-slide end-->
                    </div><!--banner-slider end-->
                </div>
            </div>
        </div>
    </section><!--main-banner end-->

    <section class="block pb-0">
        <div class="container">
            <div class="about-us-section">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="about-text">
                            <h2 class="sub-title">المدير التنفيذي </h2>
                            <p class="text-justify" style="line-height: 2em;height: 200px; overflow: hidden">

                                أهلاً ومرحبًا بكم في عالم الابتكار والتميز حيث تتجاوب "صقر الشاهين" مع تحديات السوق بروح
                                ريادية واستراتيجية تجعلنا متقدمين في ميداننا. نحن نفتخر بتقديم خدمات استثنائية ومنتجات
                                فريدة تلبي توقعات عملائنا الكرام.

                                في "صقر الشاهين"، نؤمن بالتميز في كل تفاصيل عملنا. نسعى جاهدين لتحقيق الريادة في مجالنا
                                من خلال الابتكار المستمر وتحسين الأداء. نحن نعتبر أن كل فرد في فريقنا هو جزء لا غنى عنه
                                من نجاحنا، ونعمل معًا بروح الفريق لتحقيق أهدافنا المشتركة.

                                نحن ملتزمون بتقديم خدمة عملاء لا مثيل لها، وضمان رضاكم التام. نحن هنا لندعمكم ونساعدكم
                                في تحقيق أهدافكم الاستراتيجية وتطلعاتكم المستقبلية. في "صقر الشاهين"، لا يكون التفوق
                                مجرد هدف، بل يكون أسلوب حياة نتبناه.

                                نتطلع إلى بناء علاقة قائمة على الثقة والشفافية معكم، ونأمل أن تكونوا جزءًا لا يتجزأ من
                                رحلتنا نحو النجاح. شكرًا لثقتكم بنا وبفريق عمل "صقر الشاهين".

                                مع خالص التقدير،

                            </p>
                            <a href="#" title="" class="lnk-default2 mb-4">اقرأ المزيد <i
                                        class="la la-arrow-left"></i></a>
                        </div><!--about-text end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <img class="wow fadeInUp img-fluid mint-shadow" data-wow-duration="1000ms"
                                 src="{{asset("images/ceo.jpeg")}}" alt="">

                        </div><!--abt-imgz end-->

                    </div>
                </div>
            </div><!--about-us-section end-->
        </div>
    </section>

    <section class="block pb-0" style="margin-bottom: 160px;">
        <div class="container">
            <h3 class="sub-title">خدماتنا</h3>
            <div class="team-section">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="mint-shadow w-100 h-100 p-3 text-center">
                            <img src="{{asset("images/icons/general_trade_icon.svg")}}" class="w-25 my-4" alt="">

                            <h5 class="mt-3 font-weight-bold text-black mb-2">تجارة عامة</h5>
                            <p class="text-secondary mb-2">خدمة التجارة العامة لدينا مميزة عصرية حيث نبحث دائما عن
                                التميز</p>
                            <a href="#" title="" class="lnk-default2 my-4" style="font-size: 14px;font-weight: normal;">اقرأ
                                المزيد <i
                                        class="la la-arrow-left"></i></a>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="mint-shadow w-100 h-100 p-3 text-center">

                            <img src="{{asset("images/icons/events_organizer_icon.svg")}}" class="w-25 my-4" alt="">
                            <h5 class="mt-3 font-weight-bold text-black mb-2">اقامة المؤتمرات</h5>
                            <p class="">خدمة التجارة العامة لدينا مميزة عصرية حيث نبحث دائما عن
                                التميز</p>
                            <a href="#" title="" class="lnk-default2 my-4" style="font-size: 14px;font-weight: normal;">اقرأ
                                المزيد <i
                                        class="la la-arrow-left"></i></a>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="mint-shadow w-100 h-100 p-3 text-center">
                            <img src="{{asset("images/icons/decor_icon.svg")}}" class="w-25 my-4" alt="">

                            <h5 class="mt-3 font-weight-bold text-black mb-2">تصميم الديكور</h5>
                            <p class="text-secondary mb-2">خدمة التجارة العامة لدينا مميزة عصرية حيث نبحث دائما عن
                                التميز</p>
                            <a href="#" title="" class="lnk-default2 my-4" style="font-size: 14px;font-weight: normal;">اقرأ
                                المزيد <i
                                        class="la la-arrow-left"></i></a>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="mint-shadow w-100 h-100 p-3 text-center">
                            <img src="{{asset("images/icons/events_icon2.svg")}}" class="w-25 my-4" alt="">

                            <h5 class="mt-3 font-weight-bold text-black mb-2">تنظيم المعارض</h5>
                            <p class="text-secondary mb-2">خدمة التجارة العامة لدينا مميزة عصرية حيث نبحث دائما عن
                                التميز</p>
                            <a href="#" title="" class="lnk-default2 my-4" style="font-size: 14px;font-weight: normal;">اقرأ
                                المزيد <i
                                        class="la la-arrow-left"></i></a>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>
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
                            <p>في قسم معرض الأعمال بـ "صقر الشاهين"، نعتبر الإبداع والتميز ركيزتين أساسيتين للتفرد
                                والتميز في عرض أعمالنا. نقدم لعملائنا وشركائنا فرصة فريدة لاستكشاف عالمنا المتميز من
                                خلال مجموعة متنوعة من المشاريع والإبداعات.</p>
                            <a href="#" title="" class="lnk-default2">اقرأ المزيد <i
                                        class="la la-arrow-left"></i></a>
                        </div><!--project-text end-->
                    </div>
                    <div class="col-lg-7">
                        <div class="project-carousel">
                            <div class="project-item">
                                <img src="https://images.pexels.com/photos/12119203/pexels-photo-12119203.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                     alt="">
                                <div class="project-info">
                                    <h3><a href="#" title="">غرف المعيشه</a></h3>
                                    <span>59 مشروع</span>
                                </div><!--project-info end-->
                            </div><!--project-item end-->
                            <div class="project-item">
                                <img src="{{asset("images/projects/3.jpeg")}}" alt="">
                                <div class="project-info">
                                    <h3><a href="#" title="">المطابخ والصلات</a></h3>
                                    <span>75 مشروع</span>
                                </div><!--project-info end-->
                            </div><!--project-item end-->
                            <div class="project-item">
                                <img src="{{asset("images/projects/2.jpg")}}" alt="">
                                <div class="project-info">
                                    <h3><a href="#" title="">غرف الاستقبال</a></h3>
                                    <span>49 مشروع</span>
                                </div><!--project-info end-->
                            </div><!--project-item end-->
                            <div class="project-item">
                                <img src="{{asset("images/projects/1.jpeg")}}" alt="">
                                <div class="project-info">
                                    <h3><a href="#" title="">غرف نوم</a></h3>
                                    <span>59 مشروع</span>
                                </div><!--project-info end-->
                            </div><!--project-item end-->
                        </div><!--project-carousel end-->
                    </div>
                </div>
            </div><!--latest-projects-section end-->
        </div>
    </section>


    <section class="block">
        <div class="container">
            <h3 class="sub-title">الاخبار والنشاطات</h3>
            <div class="blog-posts">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <img src="{{asset("images/blog/1.jpg")}}" alt="">
                                <span class="category">الخبر الاول</span>
                            </div>
                            <div class="blog-info">
                                <span>فبراير 21, 2024</span>
                                <h2 class="blog-title"><a href="#" title="">عنوان الخبر</a></h2>
                                <p>التفاصيل التفاصيل الخاصة بالخبر</p>
                                <a href="#" title="" class="lnk-default2">اقرا المزيد<i
                                            class="la la-arrow-left"></i></a>
                            </div>
                        </div><!--blog-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <img src="{{asset("images/blog/2.jpg")}}" alt="">
                                <span class="category">Interior design</span>
                            </div>
                            <div class="blog-info">
                                <span>فبراير 21, 2024</span>
                                <h2 class="blog-title"><a href="#" title="">عنوان الخبر</a></h2>
                                <p>التفاصيل التفاصيل الخاصة بالخبر</p>
                                <a href="#" title="" class="lnk-default2">اقرا المزيد<i
                                            class="la la-arrow-left"></i></a>
                            </div>
                        </div><!--blog-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <img src="{{asset("images/blog/1.jpg")}}" alt="">
                                <span class="category">Interior design</span>
                            </div>
                            <div class="blog-info">
                                <span>فبراير 21, 2024</span>
                                <h2 class="blog-title"><a href="#" title="">عنوان الخبر</a></h2>
                                <p>التفاصيل التفاصيل الخاصة بالخبر</p>
                                <a href="#" title="" class="lnk-default2">اقرا المزيد<i
                                            class="la la-arrow-left"></i></a>
                            </div>
                        </div><!--blog-post end-->
                    </div>
                </div>
            </div><!---blog-posts end-->
        </div>
    </section>
    <section class="consultation-sec" style="margin-bottom: 160px">
        <div class="container">
            <div class="consultation-section">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="consult-text">
                            <h3 class="sub-title">اشترك في القائمة البريدية.</h3>
                            <form class="subsc-form">
                                <input type="email" name="name" placeholder="البريد الالكتروني">
                                <button type="submit" class="lnk-default">ارسال <i class="la la-arrow-left"></i>
                                    <span></span></button>
                            </form>
                        </div><!--consult-text end-->
                    </div>
                    <div class="col-lg-5">
                        <div class="consult-img wow slideInUp" data-wow-duration="1000ms">
                            <img src="{{asset('images/newsletter.jpg')}}" alt="">
                        </div><!--consult-img end-->
                    </div>
                </div>
            </div><!--consultation-section end-->
        </div>
    </section>
@endsection