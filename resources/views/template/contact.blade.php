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

									<form method="post" action="{{route("contact.submit")}}">
										@csrf
										@if(session()->has("status"))

											<div class="alert alert-success">
												<div class="response">
												{{session()->get("message")}}
												</div>
											</div>

										@endif



										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="name">الاسم</label>
													<input  id="name" type="text" value="{{old('full_name')}}" name="full_name" class="@error('full_name') is-invalid @enderror form-control name" placeholder="الاسم الكامل">
													@error('full_name')
													<div class="text-sm text-danger">{{ $message }}</div>
													@enderror
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="address">العنوان</label>
														<input id="address" type="text" value="{{old('address')}}" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="العنوان">
													@error('address')
													<div class="text-sm text-danger">{{ $message }}</div>
													@enderror
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="email">البريد الالكتروني</label>
													<input type="email" value="{{old('email')}}" id="email" name="email" class="form-control email @error('email') is-invalid @enderror" placeholder="Example@gmail.com">
													@error('email')
													<div class="text-sm mt-1 text-danger">{{ $message }}</div>
													@enderror
												</div><!--form-group end-->
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="phone_number">رقم الهاتف</label>
													<input id="phone_number" type="text" value="{{old('phone_number')}}" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="رقم الهاتف">
													@error('phone_number')
													<div class="text-sm text-danger">{{ $message }}</div>
													@enderror
												</div><!--form-group end-->
											</div>
											<div class="col-sm-10">
												<div class="form-group">
													<label for="message">نص الرسالة</label>

													<textarea id="message" name="message"  class="form-control @error('message') is-invalid @enderror" placeholder="نص الرسالة">
														{{old('message')}}
													</textarea>
													@error('message')
													<div class="text-sm text-danger">{{ $message }}</div>
													@enderror
												</div><!--form-group end-->
											</div>
											<div class="col-sm-2">
												<div class="form-submit">
													<button type="submit" id="submit"><img src="{{asset('images/submit.png')}}" alt=""></button>
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
							<li><a href="{{$abouts->twitter_url}}" title="">
									<svg xmlns="http://www.w3.org/2000/svg" fill="#993399" width="30" height="30"
										 viewBox="0 0 448 512">
										<path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
									</svg>
								</a></li>
							<li><a href="{{$abouts->instagram_url}}" title=""><i class="fab fa-instagram"></i></a></li>
							<li><a href="{{$abouts->facebook_url}}" title=""><i class="fab fa-facebook-f"></i></a></li>
						</ul>
					</div><!--contact-social end-->
				</div><!--contact-page end-->
			</div>
		</section><!--page-content end-->
@endsection
