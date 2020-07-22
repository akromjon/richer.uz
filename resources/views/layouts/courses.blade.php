<div id="home"></div>
<div class="emply-text-sec" style="margin-top:20px;">
	@php if(Request::url()==route('all_courses')) {}else{$html="<div class='col-lg-6 offset-lg-3'><div class='main-title text-center'><h3 title='BARCHA KURSLAR' class='mt0'>Kurslar</h3></div></div>";
	echo $html;}@endphp	
	<div  class="row" id="masonry_abc" style="position: relative; height: 1789.5px;">
		@foreach($courses as $course)		
		<div class="col-md-6 col-lg-4 col-xl-3	{{$course->course_categories->id}}" style="position: absolute; left: 0px; top: 0px;">
	
			<div class="top_courses">
				<div class="thumb">
					<img class="img-whp" src="{{asset('assets/images/courses/t1.jpg')}}" alt="t1.jpg">
						<div class="overlay">											
							<a class="tc_preview_course" href="{{route('view',$course->slug)}}">Darsni ko'rish</a>
						</div>
				</div>
				<div class="details">
					<div class="tc_content">
						<p><i class="fa fa-graduation-cap" aria-hidden="true"></i> {{$course->teacher->name
							}}</p>
						<h5><a href="{{route('view',$course->slug)}}">{{$course->name}}</a></h5>						
					</div>
					<div class="tc_footer">
						<ul class="tc_meta float-left">
							<li class="list-inline-item">
								<a href="{{route('view',$course->slug)}}">
									<i class="flaticon-profile"></i> students
								</a>
							</li>							
							<li class="list-inline-item">
								<a href="{{route('view',$course->slug)}}">
									<i class="flaticon-comment"></i> {{$course->comments->count()}}
								</a>
							</li>							
						</ul>
						<div class="tc_price float-right">{{$course->cost}}	</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
				 				<!-- <div class="col-md-6 col-lg-4 col-xl-3 business marketing" style="position: absolute; left: 360px; top: 0px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t2.jpg')}}" alt="t2.jpg">
											<div class="overlay">											
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>Designing a Responsive Mobile Website</h5>											
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 				<div class="col-md-6 col-lg-4 col-xl-3 web design" style="position: absolute; left: 0px; top: 447px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t3.jpg')}}" alt="t3.jpg">
											<div class="overlay">										
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>Adobe XD: Prototyping Tips and Tricks</h5>										
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 				<div class="col-md-6 col-lg-4 col-xl-3 business Web" style="position: absolute; left: 360px; top: 447px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t4.jpg')}}" alt="t4.jpg">
											<div class="overlay">											
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>Sketch: Creating Responsive SVG</h5>											
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 				<div class="col-md-6 col-lg-4 col-xl-3 marketing" style="position: absolute; left: 360px; top: 869px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t5.jpg')}}" alt="t5.jpg">
											<div class="overlay">										
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>Design Instruments for Communication</h5>										
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 				<div class="col-md-6 col-lg-4 col-xl-3 business marketing" style="position: absolute; left: 0px; top: 894px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t6.jpg')}}" alt="t6.jpg">
											<div class="overlay">											
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>How to be a DJ? Make Electronic Music</h5>											
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 				<div class="col-md-6 col-lg-4 col-xl-3 design Web" style="position: absolute; left: 360px; top: 1317px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t7.jpg')}}" alt="t7.jpg">
											<div class="overlay">										
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>How to Make Beautiful Landscape Photos?</h5>										
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 				<div class="col-md-6 col-lg-4 col-xl-3 business" style="position: absolute; left: 0px; top: 1342px;">
									<div class="top_courses">
										<div class="thumb">
											<img class="img-whp" src="{{asset('assets/images/courses/t8.jpg')}}" alt="t8.jpg">
											<div class="overlay">											
												<a class="tc_preview_course" href="">Darsni ko'rish</a>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<p>Ali TUFAN</p>
												<h5>Fashion Photography From Professional</h5>											
											</div>
											<div class="tc_footer">
												<ul class="tc_meta float-left">
													<li class="list-inline-item"><a href=""><i class="flaticon-profile"></i></a></li>
													<li class="list-inline-item"><a href="">1548</a></li>
													<li class="list-inline-item"><a href=""><i class="flaticon-comment"></i></a></li>
													<li class="list-inline-item"><a href="">25</a></li>
												</ul>
												<div class="tc_price float-right">39000 so'm</div>
											</div>
										</div>
									</div>
				 				</div>
				 			</div>
				 		</div> -->