<!--
  ~ Copyright notice for the website built for saqer.com.iq.
  ~ Copyright (c) 2024. Jodx.dev. All rights reserved.
  ~ This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
  -->
@extends('template.layout')

@section('content')
		<section class="pager-section">
			<div class="container">
				<div class="pager-info">
					<ul class="breadcrumb">
						<li><a href="#" title="">الرئيسية</a></li>
						<li><span>الخدمات</span></li>
					</ul><!--breadcrumb end-->
					<h2>الخدمات</h2>
					<span class="pb-5">من فضلك اطلع على خدماتنا</span>
				</div>

				<div class="clearfix"></div>
			</div>
		</section><!--pager-section end-->


		<section class="block">
			<div class="container">
				<div class="section-title style2 align-items-center">
					<h3 class="sub-title mw-45"> مستعدون لتقديم الخدمات التالية</h3>
					<div class="clearfix"></div>
				</div>
				<div class="svs-section">
					@foreach($services as $service)
						<div class="svs-item">
							<div class="svs-img">
								<img src="{{url('/storage/'.$service->poster_image)}}" alt="" class="w-100">
							</div>
							<div class="svss-info">
								<h3><a href="#" title="">{{$service->name}}</a></h3>
								<p style="line-height: 2em">{{$service->description}}

								</p>
							</div>
						</div><!--svs-item end-->
					@endforeach


				</div><!--svs-section end-->
			</div>
		</section>


@endsection