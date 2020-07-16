@extends('layouts.master')
	@section('content')
	<section class="blog_post_container " style="margin-top: 15px;">
		<div class="container">
			<div class="row" >
				<div class="col-lg-8 col-xl-9" style="background-color: #ffffff;">
					<div class="main_blog_post_content">						
						<div class="mbp_thumb_post">
							<div class="thumb" style="margin-top: 15px;">
								<img class="img-fluid" src="{{asset('assets/images/blog/12.jpg')}}" alt="12.jpg">
								<div class="tag">Onlayn Ta'lim</div>
								<div class="post_date"><h2>28</h2> <span>Iyun</span></div>
							</div>
							<div class="details">
								<h3>Learning, Friendship and Fun</h3>
								<ul class="post_meta">
									<li><a href="#"><span class="flaticon-profile"></span></a></li>
									<li><a href="#"><span>Ali Tufan</span></a></li>
									<li><a href="#"><span class="flaticon-comment"></span></a></li>
									<li><a href="#"><span>7 comments</span></a></li>
								</ul>
								<h4>Description</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								<p class="mb25">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<h4 class="mb0">Content</h4>
								<ul class="bs_content_list">
									<li><p>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</p></li>
									<li><p>No previous design experience is needed.</p></li>
									<li><p>No previous Adobe XD skills are needed.</p></li>
								</ul>
								<div class="mbp_blockquote">
									<div class="blockquote">
										<span class="font-italic"><i class="fa fa-quote-left"></i></span><em class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</em>
									</div>
								</div>
								<p class="mb25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
								<p class="mb25">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
							<ul class="blog_post_share">
								<li><p>Share</p></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-telegram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>								
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>								
							</ul>
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
								<h4 class="title">Kategoriya</h4>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Hammasi <span class="float-right">6</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Onlayn Academy <span class="float-right">1</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Universitetlar <span class="float-right">6</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
							    	Online Ta'lim <span class="float-right">16</span>
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
				<div class="col-lg-8 col-xl-9" style="background-color: #ffffff; margin-top: 25px;">
					<div class="cs_row_six csv2">
												<div class="sfeedbacks">
													<div class="mbp_pagination_comments">
														<div class="mbp_first media csv1">
															<img src="{{asset('assets/images/team/6.png')}}" class="mr-3" alt="review1.png">
															<div class="media-body">
														    	<h4 class="sub_title mt-0">Warren Bethell
																	<span class="sspd_review float-right">
																		
																	</span>										    		
														    	</h4>
														    	<a class="sspd_postdate fz14" href="#">6 months ago</a>
														    	<p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
														    	<p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> 
														    	
															    
															</div>
														</div>					
														
													</div>
												</div>
											</div>
						
					
					

				</div>
				<div class="col-lg-8 col-xl-9" style="background-color: #ffffff; margin-top: 25px; margin-bottom: 25px;">
				<div class="cs_row_seven csv2">
												<div class="sfeedbacks">
													<div class="mbp_comment_form style2 pb0">
														<h4>Taklif &amp; fikr bildirish</h4>
														
														<form class="comments_form">
															<div class="form-group">
														    	<label for="exampleInputName1">Fikr yoki taklif nomi</label>
														    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp">
															</div>
															<div class="form-group">
															    <label for="exampleFormControlTextarea1">Fikr yoki taklif</label>
															    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
															</div>
															<button type="submit" class="btn btn-thm">Jo'natish<span class="flaticon-right-arrow-1"></span></button>
														</form>
													</div>
												</div>
											</div>
				</div>
				
			</div>
		</div>
	</section>
	@endsection