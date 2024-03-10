@extends('template.layout')
@section('content')
		<section class="pager-section">
			<div class="container">
				<div class="pager-info">
					<ul class="breadcrumb">
						<li><a href="#" title="">الرئيسية</a></li>
						<li><span>الاخبار</span></li>
					</ul><!--breadcrumb end-->
					<h2>الاخبار </h2>
					<span class="pb-5">انشطة واخبار شركتنا</span>
				</div>

			</div>
		</section><!--pager-section end-->

		<section class="block">
			<div class="container">
				<h3 class="sub-title">انشطتنا واخبارنا</h3><!--sub-title end-->
				<div class="blog-posts blog-page">
					<div class="row">
						@foreach($blogs as $blog)

							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="blog-post">
									<div class="blog-thumbnail">
										<img src="{{url('/storage/'. $blog->image)}}" alt="">
										<span class="category">{{\App\Models\Category::find($blog->category_id)->name}}</span>
									</div>
									<div class="blog-info">
										<span>{{\Illuminate\Support\Carbon::parse($blog->created_at)->format("Y-m-d")}}</span>
										<h2 class="blog-title"><a href="{{route('blog-details',['slug'=>$blog->slug])}}" title="">{{\Illuminate\Support\Str::limit($blog->title)}}</a></h2>
										<p>{!!  \Illuminate\Support\Str::limit($blog->content) !!}</p>
										<a href="#" title="" class="lnk-default2">اقرأ المزيد <i class="la la-arrow-right"></i></a>
									</div>
								</div><!--blog-post end-->
							</div>

						@endforeach


					</div>
				</div><!--blog-posts end-->
{{--				<div class="mint-pagination">--}}
{{--					<ul class="paginated">--}}
{{--						<li>--}}
{{--							<a href="#" title=""><i class="fa fa-angle-left"></i></a>--}}
{{--							<a href="#" title=""><i class="fa fa-angle-right"></i></a>--}}
{{--						</li>--}}
{{--					</ul>--}}
{{--				</div><!--mint-pagination end-->--}}
			</div>
		</section>

@endsection
