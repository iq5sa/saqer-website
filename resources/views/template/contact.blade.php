@extends('template.layout')
@section('content')
		<section class="pager-section">
			<div class="container">
				<div class="pager-info">
					<ul class="breadcrumb">
						<li><a href="#" title="">الرئيسية</a></li>
						<li><span>اتصل بنا</span></li>
					</ul><!--breadcrumb end-->
					<h2>اتصل بنا</h2>
					<span class="pb-5">كيفية التواصل معنا</span>
				</div>

				<div class="clearfix"></div>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="contact-page">
					<div class="contact-head">
						<p>هل لديك اسئلة او مقترحات؟ <br /> اكتب لنا رسالتك وسوف يمت الرد باسرع وقت ممكن!</p>
					</div><!--contact-head end-->
					<div class="contact-main">
						<div class="row">
							<div class="col-lg-4">
								<div class="contact_info">
									<h3 class="sub-title white">التــواصل</h3>
									<ul class="cl-list">
										<li>
											<span class="ci-icon">
												<img src="{{asset("images/images/ci1.png")}}" alt="">
											</span>
											<p>العراق، بغداد ، شارع ١٤ رمضان</p>
										</li>
										<li>
											<span class="ci-icon">
												<img src="{{asset("images/ci2.png")}}" alt="">
											</span>
											<p><span>سبت-احد:</span> 9 صباحا حتى 6 مسائاً <span>الجمعة:</span> مغلق</p>
										</li>
										<li>
											<span class="ci-icon">
												<img src="{{asset("images/ci3.png")}}" alt="">
											</span>
											<p>info@saqer.com.iq</p>
										</li>
										<li>
											<span class="ci-icon">
												<img src="{{asset("images/ci4.png")}}" alt="">
											</span>
											<p style="direction: ltr">+964 780 241 6561</p>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="contact-main-form">
									<form method="post" action="#" id="contact-form">
										<div class="response"></div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Name</label>
													<input type="text" name="name" class="form-control name" placeholder="الاسم الكامل">
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>العنوان</label>
														<input type="text" name="name" class="form-control" placeholder="العنوان">
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>البريد الالكتروني</label>
													<input type="email" name="email" class="form-control email" placeholder="Example@gmail.com">
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>رقم الهاتف</label>
													<input type="text" name="name" class="form-control" placeholder="رقم الهاتف">
												</div><!--form-group end-->
											</div>
											<div class="col-sm-10">
												<div class="form-group">
													<label>Message</label>
													<textarea class="form-control" placeholder="نص الرسالة"></textarea>
												</div><!--form-group end-->
											</div>
											<div class="col-sm-2">
												<div class="form-submit">
													<button type="button" id="submit"><img src="{{asset('images/submit.png')}}" alt=""></button>
												</div><!--form-submit end-->
											</div>
										</div>
									</form>
								</div><!--contact-main-form end-->
							</div>
						</div>
					</div><!--contact-main end-->
					<div class="contact-social">
						<span>تواصل معنا عبر وسائل التواصل الاجتماعي:</span>
						<ul class="social-links without-bg">
							<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
						</ul>
					</div><!--contact-social end-->
				</div><!--contact-page end-->
			</div>
		</section><!--page-content end-->
@endsection
