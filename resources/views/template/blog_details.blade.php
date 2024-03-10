@extends("template.layout")
@section("content")
<section class="page-content" style="margin-top: 9rem !important;">
			<div class="container">
				<div class="blog-single">
					<div class="row justify-content-center">

						<div class="col-lg-8">
							<div class="blog-post single">

								<div class="blog-info">
									<h2 class="blog-title">{{$blog->title}}</h2>

									<span>{{\Illuminate\Support\Carbon::parse($blog->created_at)->format('Y M d')}}</span>
								</div>
								<div class="blog-thumbnail">
									<img src="{{url('/storage').'/'.$blog->image}}" alt="">
								</div>
								<div class="blog-info">
									<p>{!! $blog->content !!} </p>

								</div>
								<ul class="tags_list">
									<li><a href="#" title="">#{{\App\Models\Category::find($blog->category_id)->title}}</a></li>

								</ul><!--tags_liste end-->

							</div><!--blog-post single end-->
						</div>
					</div>
				</div><!--blog-single end-->
			</div>
		</section><!--page-content end-->
@endsection