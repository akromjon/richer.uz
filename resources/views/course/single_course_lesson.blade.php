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
	
<div class="wrapper mm-page mm-slideout"  style="background-color: #cbcbcb;"  id="mm-0">
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb" >
	<!-- Main Header Nav -->
	@include('layouts.sign_up')
	@include('layouts.menu')
	<div class="col-xl-12">
		<div class="breadcrumb_content">
			<div class="cs_row_one csv3">
				<div class="cs_ins_container">
					<div class="cs_instructor">
						<ul class="cs_instrct_list float-left mb0">
							<li class="list-inline-item">
								<img class="thumb" src="{{asset('assets/images/team/4.png')}}" alt="4.png">
							</li>
							<li class="list-inline-item">
								<a class="color-white" href="#">{{$courses->teacher->name}}</a>
							</li>
							<li class="list-inline-item">
								<a class="color-white" href="#"> Tayyor boldi: 11/2019</a>
							</li>
						</ul>
					</div>
						<h3 class="cs_title color-white">{{$courses->name}}</h3>
						<ul class="cs_review_enroll">
							<li class="list-inline-item">
								<a class="color-white" href="#">
									<span class="flaticon-profile"></span>
									 {{$courses->enrolled_students}} O'quvchilar
								</a>
							</li>
							<li class="list-inline-item">
								<a class="color-white" href="#">
									<span class="flaticon-comment"></span>
									 25 Fikrlar
								</a>
							</li>
						</ul>								
				</div>
			</div>
		</div>
	</div>		
	</section>	<!-- Our Team Members -->
	<section class="our-team pb40" style="margin-top:20px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-lg-12">
							<div class="courses_single_container">
							<div class="cs_row_one">
									<div class="cs_ins_container">
										<div class="courses_big_thumb">
											<div class="thumb">
												<!-- <iframe class="iframe_video" src="//www.youtube.com/embed/57LQI8DKwec" frameborder="0" allowfullscreen=""></iframe> -->
												{!!$courses->intro!!}
											</div>
										</div>
									</div>
								</div>
								
								<div class="cs_rwo_tabs csv2">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
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
										    <i class="fa fa-comments" aria-hidden="true"></i> Fikrlar</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
											<div class="cs_row_two csv2">
												<div class="cs_overview">
													<h4 class="title">{{$courses->name}}</h4>
													<h4 class="subtitle">Kurs tushunchasi</h4>
													<p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
													<p class="mb20">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
													<h4 class="subtitle">What you'll learn</h4>
													<ul class="cs_course_syslebus">
														<li><i class="fa fa-check"></i><p>Become a UX designer.</p></li>
														<li><i class="fa fa-check"></i><p>You will be able to add UX designer to your CV</p></li>
														<li><i class="fa fa-check"></i><p>Become a UI designer.</p></li>
														<li><i class="fa fa-check"></i><p>Build &amp; test a full website design.</p></li>
														<li><i class="fa fa-check"></i><p>Build &amp; test a full mobile app.</p></li>
													</ul>
													<ul class="cs_course_syslebus2">
														<li><i class="fa fa-check"></i><p>Learn to design websites &amp; mobile phone apps.</p></li>
														<li><i class="fa fa-check"></i><p>You'll learn how to choose colors.</p></li>
														<li><i class="fa fa-check"></i><p>Prototype your designs with interactions.</p></li>
														<li><i class="fa fa-check"></i><p>Export production ready assets.</p></li>
														<li><i class="fa fa-check"></i><p>All the techniques used by UX professionals</p></li>
													</ul>
													<h4 class="subtitle">Requirements</h4>
													<ul class="list_requiremetn">
														<li><i class="fa fa-circle"></i><p>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</p></li>
														<li><i class="fa fa-circle"></i><p>No previous design experience is needed.</p></li>
														<li><i class="fa fa-circle"></i><p>No previous Adobe XD skills are needed.</p></li>
													</ul>
												</div>
											</div>
										</div>
										@include('layouts.lesson_section')
										<div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="review-tab">
											<div class="cs_row_four csv2">
												<div class="about_ins_container">
													<h4 class="aii_title">O'qituvchi haqida</h4>
													<div class="about_ins_info">
														<div class="thumb"><img src="{{asset('assets/images/team/6.png')}}" alt="6.png"></div>
													</div>
													<div class="details">									
														<ul class="about_info_list">
															<li class="list-inline-item"><span class="flaticon-comment"></span> 12 Fikrlar </li>
															<li class="list-inline-item"><span class="flaticon-profile"></span> 14 O'quvchilar</li>
															<li class="list-inline-item"><span class="flaticon-play-button-1"></span> 5 Kurslar </li>
														</ul>
														<h4>{{$courses->teacher->name}}</h4>
														<p class="subtitle">{{$courses->teacher->subject}}</p>
														<p class="mb25">{!!$courses->teacher->information!!} </p>
														<p class="mb25">{{$courses->teacher->resume}}</p>														
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
										<div class="cs_row_seven csv2">
												<div class="sfeedbacks">
													<div class="mbp_comment_form style2 pb0">
														<h4>Taklif &amp; fikr bildirish</h4>
														
														<form class="comments_form">
															<div class="form-group">
														    	<label for="exampleInputName1">Fikr yoki taklif nomi</label>
														    	<input type="text" placeholder="Taklif" class="form-control" id="exampleInputName1" aria-describedby="textHelp">
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
											<div class="cs_row_six csv2">
												<div class="sfeedbacks">
													<div class="mbp_pagination_comments">
														<div class="mbp_first media csv1">
															<img src="{{asset('assets/images/team/6.png')}}" class="mr-3" alt="review1.png">
															<div class="media-body">
														    	<h4 class="sub_title mt-0">{{$courses->username}}
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
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="instructor_pricing_widget">
						<div class="price" style="color: red"><span>Narxi</span> {{$courses->cost}} so'm <s style="color: black"><strong><br>69 000</strong> </s></div>						
						<a href="#" class="cart_btnss_white">Sotib olish</a>
						<h5 class="subtitle text-left">Kurs quyidagilarni o'z ichiga oladi</h5>
						<ul class="price_quere_list text-left">
							<li><a href="#"><i class="fa fa-play" aria-hidden="true"></i> {{$courses->section}} Darslar</a></li>
							<li><a href="#"><i class="fa fa-file-video-o" aria-hidden="true"></i> {{$courses->videos}} Videolar</a></li>
							<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$courses->quiz}} Quizlar</a></li>
							<li><a href="#"><i class="fa fa-language" aria-hidden="true"></i> {{$courses->language}}</a></li>						
							<li><a href="#"><i class="fa fa-level-up" aria-hidden="true"></i> {{$courses->level}}</a></li>
						</ul>
					</div>
					<!-- <div class="feature_course_widget">
						<ul class="list-group">
							<h4 class="title">Course Features</h4>
							<li class="d-flex justify-content-between align-items-center">
						    	Lectures <span class="float-right">6</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
						    	Quizzes <span class="float-right">1</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
						    	Duration <span class="float-right">3 hours</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
						    	Skill level <span class="float-right">All level</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
						    	Language <span class="float-right">English</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
						    	Assessments <span class="float-right">Yes</span>
							</li>
						</ul>
					</div>
					<div class="blog_tag_widget">
						<h4 class="title">Tags</h4>
						<ul class="tag_list">
							<li class="list-inline-item"><a href="#">Photoshop</a></li>
							<li class="list-inline-item"><a href="#">Sketch</a></li>
							<li class="list-inline-item"><a href="#">Beginner</a></li>
							<li class="list-inline-item"><a href="#">UX/UI</a></li>
						</ul>
					</div>
					<div class="selected_filter_widget style2">
						<span class="float-left"><img class="mr20" src="images/resource/2.png" alt="2.png"></span>
						<h4 class="mt15 fz20 fw500">Not sure?</h4>
						<br>
						<p>Every course comes with a 30-day money-back guarantee</p>
					</div> -->
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
@include('layouts.footer')
</body>
</html>
