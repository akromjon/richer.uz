<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions"><head>
@include('layouts.head')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>{{$courses->name}}</title>
</head>
<body>
@include('layouts.mobile_menu')
	<!--this blocks inspect the element in the chrome-->
	
<div class="wrapper mm-page mm-slideout"  style="background-color: #cbcbcb;"  id="mm-0">
	<!-- Inner Page Breadcrumb -->
	<div class="wrapper mm-page mm-slideout" id="mm-0">
		<div class="preloader" style="display: none;"></div>
		@include('layouts.logo')	
	<section class="inner_page_breadcrumb" >	
	<!-- Main Header Nav -->
	@include('layouts.sign_up')
	@include('layouts.menu')
	
	
	</section>	<!-- Our Team Members -->
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
												{!!$courses->intro!!}
											</div>
										</div>
									</div>
								</div>
								<form  method="POST" action="{{route('view_counter',$courses->id)}}">								
									@csrf
									@method('PUT')									
									<input type="text" id="postVisitCount" name="visitCount" value="{{$courses->visit_count}}">
									<input value="send" type="submit">
								</form>								
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
														
														<p class="mb30">{{$courses->information}} </p>
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
												
													@foreach($courses->comments as $comment)
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
				<img class="img-whp" src="{{asset('assets/images/courses/t1.jpg')}}" alt="t1.jpg">
				
					<div class="instructor_pricing_widget">	
					<?php	
					     // this is for courses for money				
						// <!-- <div class="price" style="color: red"><span></span> Bepul  <s style="color: black"><strong><br>69 000</strong> </s></div> -->						
					?>
						<h5 class="subtitle text-left">Kurs quyidagilarni o'z ichiga oladi</h5>
						<ul class="price_quere_list text-left">
							<li><a href="#"><i class="fa fa-play" aria-hidden="true"></i> {{$courses->section}} Darslar</a></li>
									<li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> {{$courses->videos}} Videolar</a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$courses->quiz}} Quizlar</a></li>
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
	<!-- Our Footer -->
@include('layouts.footer')
<script>
	
	
	let visitCount=document.getElementById('postVisitCount').value;
	let visitCountPlusOne=parseInt(visitCount)+1;
	document.getElementById('postVisitCount').value=visitCountPlusOne;
	let $formVar=$('form');
	event.preventDefault();
	$.ajax({		
		url: $formVar.prop('{{ route('view_counter', ['put' => $courses->id ]) }}'),	
		type: 'PUT',		
		data:
			$formVar.serialize()
			
		
	});

	
		event.preventDefault();
		const CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content');
		$.ajax({	
			url:"{{url('/blog')}}",
			type:'get',
			data:{
				CSRF_TOKEN
			},
			success:function (data){
				$("#content").html(data)
			}

		


	});


	


	
</script>
</body>
</html>
