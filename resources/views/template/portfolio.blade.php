@extends("template.layout")

@section('content')
		<section class="pager-section">
			<div class="container">
				<div class="pager-info">
					<ul class="breadcrumb">
						<li><a href="#" title="">الرئيسية</a></li>
						<li><span>معرض الاعمال</span></li>
					</ul><!--breadcrumb end-->
					<h2>معرض الاعمال</h2>
					<span class="pb-5">من فضلك اطلع على اعمالنا</span>
				</div>

				<div class="clearfix"></div>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="portfolio-page">
					<div class="section-title">
						<h3 class="sub-title w-100">شاهد افضل   مشاريعنا</h3>
						<p>نبذة عن اهم وافضل مشاريعنا وبماذا تتميز.</p>
					</div><!--section-title end-->
					<div class="options">
						<div class="option-isotop text-right">
							<ul id="filter" class="option-set filters-nav" data-option-key="filter">
								<li><a data-option-value=".architecture" class="selected">تجارة عامة</a></li>
								<li><a data-option-value=".architecture">تصميم ديكور</a></li>
								<li><a data-option-value=".commerical">مؤتمرات</a></li>
							</ul>
						</div>
					</div><!--isotope options end-->
					<div class="row">
						<div class="masonary">
							@foreach($portfolios as $portfolio)
								<div class="col-lg-4 col-md-4 col-sm-6 architecture">
									<div class="project-item">
										<img src="{{url('/storage/'. $portfolio->image)}}" alt="">
										<div class="project-info">
											<h3><a href="#" title="">{{$portfolio->title}}</a></h3>
											<span>{{\App\Models\Category::find($portfolio->category_id)->title}}</span>
										</div><!--project-info end-->
									</div><!--project-item end-->
								</div>
							@endforeach


						</div><!--masonary end-->
					</div>
{{--					<div class="pagination-mint">--}}
{{--						<nav aria-label="Page navigation example">--}}
{{--							<ul class="pagination">--}}
{{--						    	<li class="page-item"><a class="page-link prev" href="#"><i class="fa fa-angle-left"></i>السابق</a></li>--}}
{{--						    	<li class="page-item"><a class="page-link active" href="#">1</a></li>--}}
{{--						    	<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--						    	<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--						    	<li class="page-item"><a class="page-link next" href="#">التالي <i class="fa fa-angle-right"></i></a></li>--}}
{{--						  	</ul>--}}
{{--						</nav>--}}
{{--					</div>--}}
				</div><!--portfolio-page end-->
			</div>
		</section><!--page-content end-->


@endsection