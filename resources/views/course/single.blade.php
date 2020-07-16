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
	<!--this blocks inspect the element in the chrome-->
	
<div class="wrapper mm-page mm-slideout"  style="background-color: #cbcbcb;"  id="mm-0">
	<!-- Inner Page Breadcrumb -->
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
										<!-- <li class="nav-item">
										    <a class="nav-link active" id="course-tab" data-toggle="tab" href="#course" role="tab" aria-controls="course" aria-selected="false"><i class="fa fa-video-camera" aria-hidden="true"></i> Darslar</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link " id="Overview-tab" data-toggle="tab" href="#Overview" role="tab" aria-controls="Overview" aria-selected="true"><i class="fa fa-file-text" aria-hidden="true"></i>  Kurs </a>
										</li>										 -->
										<li class="nav-item">
										    <a class="nav-link active" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="fa fa-user-circle" aria-hidden="true"></i> O'qituvchi</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false"> 
										    <i class="fa fa-comments" aria-hidden="true"></i> Fikrlar</a>
										</li>
									</ul>
									<div style="margin-top:30px;" class="tab-content" id="myTabContent">
										
										<div class="tab-pane fade show active" id="instructor" role="tabpanel" aria-labelledby="review-tab">
											<div class="cs_row_four csv2">
												<div class="about_ins_container">
													<h4 class="aii_title">O'qituvchi haqida</h4>
													<div class="about_ins_info">
														<div class="thumb"><img src="{{asset('files/images/teachers/')}}/{{$courses->teacher->avatar}}" alt="6.png"></div>
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
				<div class="col-lg-4 col-xl-4" >
					
                	<div class="cs_row_three csv2">
                                            <div id="scroll" class="course_content">
                                                <div class="cc_headers">
                                                    Darslar
                                                </div>
                                                <br>
                                                @foreach($courses->sections as $section)
                                                <div class="details">
                                                    <div id="accordion" class="panel-group cc_tab">
                                                        <div class="panel">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#panelBodyCourse{{$section->id}}" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">									
                                                                    {{$section->name}}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="panelBodyCourse{{$section->id}}" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <ul class="cs_list mb0">
                                                                        @foreach($lessons as $lesson)
                                                                        @if($section->id==$lesson->section_id)									
                                                                            <li class="">
                                                                            <a href="">
                                                                                    <span class="flaticon-play-button-1 icon"></span>{{$lesson->name}}
                                                                                    
                                                                                </a>
                                                                            </li>
                                                                        @endif									  								
                                                                        @endforeach									        		
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach		
			
                                                </div>
                                            </div>
                                        </div>  
					
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
@include('layouts.footer')
</body>
</html>
