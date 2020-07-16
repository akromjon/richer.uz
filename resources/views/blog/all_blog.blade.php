@extends('layouts.master')
	@section('content')
	<section class="blog_post_container " style="margin-top: 15px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xl-9">
					<div class="main_blog_post_content">
						<div class="row">
							<div class="col-xl-5 pr15-xl pr0">
								<div class="blog_grid_post mb35">
									<div class="thumb">
										<img class="img-fluid w100" src="{{asset('assets/images/blog/7.jpg')}}" alt="7.jpg">
										<div class="tag">Onlayn Ta'lim</div>
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 pl15-xl pl0">
								<div class="blog_grid_post style2 mb35">			
									<div class="details">
										<a href="{{route('news_view')}}">
										  <h3>Learning, Friendship and Fun</h3>
									    </a>
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
							</div>
						</div>
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
				<div class="col-lg-4 col-xl-3 pl10 pr10">
					<div class="main_blog_post_widget_list">
						<!-- <div class="blog_search_widget">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
							    	<button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
								</div>
							</div>
						</div> -->
						<div class="blog_category_widget">
							<ul class="list-group">
								<h4 class="title"> Kategoriya</h4>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							   	<i class="fa fa-globe" aria-hidden="true"> Hammasi</i><span class="float-right">6</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	<i class="fa fa-life-ring" aria-hidden="true"> Onlayn Academy </i><span class="float-right">1</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	<i class="fa fa-graduation-cap" aria-hidden="true"> Universitetlar</i> <span class="float-right">6</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	<i class="fa fa-laptop" aria-hidden="true"> Online Ta'lim</i>  <span class="float-right">16</span>
								</li>
							</ul>
						</div>
						<div class="blog_recent_post_widget media_widget">
							<h4 class="title">So'ngi Yangiliklar</h4>
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('assets/images/blog/s1.jpg')}}" alt="s1.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">Half of What We Know About Coffee</h5>
							    	<a href="#">October 25, 2019.</a>
								</div>
							</div>
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('assets/images/blog/s2.jpg')}}" alt="s2.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">The Best Places to Start Your Travel</h5>
							    	<a href="#">October 25, 2019.</a>
								</div>
							</div>
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('assets/images/blog/s3.jpg')}}" alt="s3.jpg">
								<div class="media-body">
							    	<h5 class="mt-0 post_title">The Top 25 London</h5>
							    	<a href="#">October 25, 2019.</a>
								</div>
							</div>
						</div>
						<div class="blog_tag_widget">
							<h4 class="title">Taglar</h4>
							<ul class="tag_list">
								<li class="list-inline-item"><a href="#">Ta'lim</a></li>
								<li class="list-inline-item"><a href="#">Onlayn</a></li>
								<li class="list-inline-item"><a href="#">Kitoblar</a></li>
								<li class="list-inline-item"><a href="#">Ingliz tili</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection