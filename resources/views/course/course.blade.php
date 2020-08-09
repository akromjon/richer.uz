@extends('layouts.master')
@section('seo')
<meta name="description" content="Uydan chiqmasdan turib onlayn ingliz tili kurslarini olish">
<meta name="keywords" content="beginner kursi, ingliz tilini o'rganish, dasturlash tillilarini o'rganish, elementart kursi, bepul ta'lim, onlayn ta'lim, sifatli ta'lim">
<meta property="og:title" content="Onlayn kurslar. Uydan chiqmasdan o'rganish">
<meta property="og:description" content="long text">
<meta property="og:type" content="article">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:image" content="the thumnail is here">
<meta property="og:site_name" content="Richer.uz">

<meta property="og:type" content="video">
<meta property='og:video' content='url'>
<meta property="og:video:height" content="640">
<meta property="og:video:width" content="385">
<!--- this tags for ceo  end   -->
@endsection
@section('content')
<section class="our-team pb40" style="margin-top:20px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-8">
					<div class="row">
						<div class="col-lg-12">
							<div class="courses_single_container">
								<div  class="cs_row_one">
									<div class="cs_ins_container">
										<div class="courses_big_thumb">
											<div class="thumb">
												<?php	
												// this is example of video for the course											
												// <iframe class="iframe_video" src="//www.youtube.com/embed/57LQI8DKwec" frameborder="0" allowfullscreen=""></iframe>												
												?>												
												<!-- <iframe width="653" height="430"  class="iframe_video" src="{{asset('files/courses/')}}/{{$courses->slug}}/{{$courses->intro}}" frameborder="0" allowfullscreen=""></iframe>
																						 -->
																						 {!!$courses->intro!!}
											</div>
										</div>
									</div>
								</div>
															
								<div class="cs_rwo_tabs csv2">
									<ul style="margin-bottom:30px;" class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item">
										    <a class="nav-link active" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false"><i class="fa fa-video-camera" aria-hidden="true"></i> Darslar</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link " id="Overview-tab" data-toggle="tab" href="#Overview" role="tab" aria-controls="Overview" aria-selected="true"><i class="fa fa-file-text" aria-hidden="true"></i>  Kurs </a>
										</li>										
										<li class="nav-item">
										    <a class="nav-link" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="fa fa-user-circle" aria-hidden="true"></i> O'qituvchi</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false"> 
										    <i class="fa fa-comments" aria-hidden="true"></i> {{$courses->comments->count()}}</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
												<div class="cs_row_two csv2">
													<div class="cs_overview">
														<h4 class="title">{{$courses->name}}</h4>
														
														<p class="mb30">{!!$courses->information!!} </p>
														<?php
														// this is for additional content for the courses
														// <p class="mb20">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
														// <h4 class="subtitle">What you'll learn</h4>
														// <ul class="cs_course_syslebus">
														// 	<li><i class="fa fa-check"></i><p>Become a UX designer.</p></li>
														// 	<li><i class="fa fa-check"></i><p>You will be able to add UX designer to your CV</p></li>
														// 	<li><i class="fa fa-check"></i><p>Become a UI designer.</p></li>
														// 	<li><i class="fa fa-check"></i><p>Build &amp; test a full website design.</p></li>
														// 	<li><i class="fa fa-check"></i><p>Build &amp; test a full mobile app.</p></li>
														// </ul>
														// <ul class="cs_course_syslebus2">
														// 	<li><i class="fa fa-check"></i><p>Learn to design websites &amp; mobile phone apps.</p></li>
														// 	<li><i class="fa fa-check"></i><p>You'll learn how to choose colors.</p></li>
														// 	<li><i class="fa fa-check"></i><p>Prototype your designs with interactions.</p></li>
														// 	<li><i class="fa fa-check"></i><p>Export production ready assets.</p></li>
														// 	<li><i class="fa fa-check"></i><p>All the techniques used by UX professionals</p></li>
														// </ul>
														// <h4 class="subtitle">Requirements</h4>
														// <ul class="list_requiremetn">
														// 	<li><i class="fa fa-circle"></i><p>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</p></li>
														// 	<li><i class="fa fa-circle"></i><p>No previous design experience is needed.</p></li>
														// 	<li><i class="fa fa-circle"></i><p>No previous Adobe XD skills are needed.</p></li>
														// </ul>
														?>
													</div>
												</div>
											</div>
										@include('layouts.lesson_section')
										<div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="review-tab">
										@include('layouts.teacher')
										</div>
										<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
										<div class="cs_row_six csv2">
												<div class="sfeedbacks">
												
													@foreach($courses->comments->take(2) as $comment)
													<div class="mbp_pagination_comments">
														<div class="mbp_first media csv1">
															<img src="{{asset('assets/images/team/6.png')}}" class="mr-3" alt="review1.png">
															<div class="media-body">
														    	<h4 class="sub_title mt-0">{{$comment->name}}
																	<span class="sspd_review float-right">
																		
																	</span>										    		
														    	</h4>
														    	<a class="sspd_postdate fz14" href="#">{{$comment->created_at->diffForHumans()}}</a>
														    	<p class="fz15 mt20">{{$comment->content}}.</p>											    
														    	
															</div>
														</div>					
														
													</div>
													@endforeach											
												</div>												
											</div>
										<div class="cs_row_seven csv2">
												<div class="sfeedbacks">
													<div class="mbp_comment_form style2 pb0">
														<h4>Fikr bildirish </h4>
														@include('layouts.errors')
														<form method="POST" action="{{route('comment')}}" class="comments_form">
															@csrf													
															<div class="form-group">
															    <label for="exampleFormControlTextarea1">Fikr yoki taklif</label>
																<input type="hidden" name="course_id" value="{{$courses->id}}">
																<input type="hidden" name="user_id" value="1">
																<input type="hidden" name="name" value="Akrom">																											
																													
																<textarea name="content" placeholder="Fikr yoki taklif" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
																
															
															</div>
															<button type="submit" class="btn btn-thm">Jo'natish<span class="flaticon-right-arrow-1"></span></button>
															
														</form>
													</div>
												</div>
											</div>											
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>					
				</div>
				<div class="col-lg-4 col-xl-4">
				<img style="border-top-right-radius:5px;border-top-left-radius:5px;" class="img-whp" src="{{asset('files/courses/')}}/{{$courses->slug}}/{{$courses->image}}" alt="t1.jpg">
				
					<div class="instructor_pricing_widget">	
					<?php	
					     // this is for courses for money				
						// <!-- <div class="price" style="color: red"><span></span> Bepul  <s style="color: black"><strong><br>69 000</strong> </s></div> -->						
					?>
						<h5 class="subtitle text-left">Kurs quyidagilarni o'z ichiga oladi</h5>
						<ul class="price_quere_list text-left">
							<li><a href="#"><i class="fa fa-play" aria-hidden="true"></i> {{$courses->sections->count()}} Darslar</a></li>
									<li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> {{$courses->lessons->count()}} Videolar</a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$courses->quizes->count()}} Quizlar</a></li>
							<li><a href="#"><i class="fa fa-language" aria-hidden="true"></i> {{$courses->language}}</a></li>						
							<li><a href="#"><i class="fa fa-level-up" aria-hidden="true"></i> {{$courses->level}}</a></li>
							<hr><a href=""><button style="width:100%" href="" type="submit" class="btn btn-lg btn-info">Kursni boshlash</button></a>
						</ul>
					</div>											 
					@include('layouts.course_tags')
					<?php
					// this is for ads in the future adver
					// <!-- <div class="selected_filter_widget style2">
					// // 	<span class="float-left"><img class="mr20" src="images/resource/2.png" alt="2.png"></span>
					// // 	<h4 class="mt15 fz20 fw500">Not sure?</h4>
					// // 	<br>
					// // 	<p>this is for Ads</p>
					// // </div>  -->
					?>
				</div>
			</div>
		</div>
	</section>
@endsection