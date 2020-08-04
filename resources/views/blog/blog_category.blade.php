@extends('layouts.master')
	@section('content')
	<section class="blog_post_container " style="margin-top: 15px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xl-9">
					<div class="main_blog_post_content">
                    @foreach($blog->articles as $article)
						<div class="row">							
							<div class="col-xl-5 pr15-xl pr0use">
								<div class="blog_grid_post mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="{{asset('assets/images/blog/7.jpg')}}" alt="7.jpg">
										<div class="tag">{{$blog->title}}</div>
										<div class="post_date"><h2></h2> <span>{{$article->created_at->diffForHumans()}}</span></div>
									</div>
								</div>
								</div>
								<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 mb35">			
									<div class="details">
										<a href="{{route('news_view',$article->slug)}}">
										  <h3>{{$article->title}}</h3>
									    </a>
										<ul class="post_meta">
											<li><a href="#"><span class="flaticon-clock"></span></a></li>
											<li><a href="#"><span>{{$article->user->name}}</span></a></li>
											<li><a href="#"><span class="flaticon-chat"></span></a></li>
											<li><a href="{{route('news_view',$article->slug)}}"><span> <i class="fa fa-commenting-o" aria-hidden="true"> {{$article->comments->count()}}</i> fikrlar</span></a></li>
										</ul>
										<p>{{ Illuminate\Support\Str::limit($article->content, 310) }}</p>
									</div>

								</div>
							</div>
							
							<!-- <div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="{{asset('assets/images/blog/8.jpg')}}" alt="8.jpg">
										<div class="tag">Onlayn Ta'lim</div>
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 mb35">
									<div class="details">
										<h3>An Indigenous Anatolian Syllabic Script</h3>
										<ul class="post_meta">
											<li><a href="#"><span class="flaticon-clock"></span></a></li>
											<li><a href="#"><span>Ali Tufan</span></a></li>
											<li><a href="#"><span class="flaticon-chat"></span></a></li>
											<li><a href="#"><span>7 <i class="fa fa-commenting-o" aria-hidden="true"></i> comments</span></a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="{{asset('assets/images/blog/9.jpg')}}" alt="9.jpg">
										<div class="tag">Onlayn Ta'lim</div>
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 mb35">
									<div class="details">
										<h3>World Heath Day in LA 2019</h3>
										<ul class="post_meta">
											<li><a href="#"><span class="flaticon-clock"></span></a></li>
											<li><a href="#"><span>Ali Tufan</span></a></li>
											<li><a href="#"><span class="flaticon-chat"></span></a></li>
											<li><a href="#"><span>7 <i class="fa fa-commenting-o" aria-hidden="true"></i> comments</span></a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
									</div>
								</div>
							</div> -->
						</div>
                        @endforeach
						<div  class="row">
							<div class="col-lg-12">
								<div class="mbp_pagination mt20">
									<ul  class="page_navigation">									    
									    <li class="page-item">
									    	<button type="submit" class="btn-lg btn-thm2 dbxshad">Ko'proq Yuklash <span class="flaticon-right-arrow-1"></span></button>
									    </li>
									</ul>
								</div>
							</div>
						</div>
					
					</div>
				</div>
				@include('layouts.blog_right_navbar')
			</div>
		</div>
	</section>
	@endsection