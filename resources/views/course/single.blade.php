<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions"><head>
@include('layouts.head')	
    <title>{{$courses->name}}</title>
</head>
<body>	
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
												{!!$video->video!!}							
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
										    <i class="fa fa-comments" aria-hidden="true"></i> {{$video->comments->count()}} fikrlar</a>
										</li>
									</ul>
									<div style="margin-top:30px;" class="tab-content" id="myTabContent">										
										<div class="tab-pane fade show active" id="instructor" role="tabpanel" aria-labelledby="review-tab">
											@include('layouts.teacher')
										</div>
										<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">																					
											<div class="cs_row_six csv2">
											<div class="sfeedbacks">
											
													@foreach($video->comments as $comment)
													
													<div class="mbp_pagination_comments">
														<div class="mbp_first media csv1">
															<img src="{{asset('assets/images/team/6.png')}}" class="mr-3" alt="review1.png">
															<div class="media-body">
														    	<h4 class="sub_title mt-0">{{$comment->name}}
																	<spafiles/images/teachers/1595059880.pngn class="sspd_review float-right">
																		
																	</span>										    		
														    	</h4>
														    	<a class="sspd_postdate fz14" href="#">{{$comment->created_at->diffForHumans()}}</a>
														    	<p class="fz15 mt20">{{$comment->content}}.</p>
														    	<!-- <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p>  -->
														    	
															    
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
														<form method="POST" action="{{route('comment')}}" class="comments_form">
															@csrf													
															<div class="form-group">
															    <label for="exampleFormControlTextarea1">Fikr yoki taklif</label>
																<input type="hidden" name="lesson_id" value="{{$video->id}}">
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
				<div class="col-lg-4 col-xl-4" >
					
                	<div class="cs_row_three csv2">
                                            <div id="scroll" class="course_content">
                                                <div class="cc_headers">
                                                Darslar 
												</div>
												<hr>															
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
															
                                                            <div id="panelBodyCourse{{$section->id}}" class="panel-collapse collapse @php if($video->section_id==$section->id) echo 'show'; @endphp">
                                                                <div class="panel-body">
                                                                    <ul class="cs_list mb0">
																	
																		@foreach($section->lessons as $lesson)																								
                                                                            <li class="@php if(route('action', [$courses, $lesson->slug])==	Request::url()){echo"active";}@endphp">
																			
                                                                            <a href="{{ route('action', [$courses, $lesson->slug]) }}">
                                                                                    <span class="flaticon-play-button-1 icon"></span>{{$lesson->name}}
                                                                                    
                                                                                </a>
                                                                            </li>
                                                                       						  								
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
											@include('layouts.course_tags')
											
                                        </div> 
										 
					
				</div>
				
			</div>
		</div>
	</section>

	<!-- Our Footer -->
@include('layouts.footer')
</body>
</html>
