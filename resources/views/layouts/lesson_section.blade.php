<div class="tab-pane fade show active" id="course" role="tabpanel" aria-labelledby="review-tab">
	<div class="cs_row_three csv2">
		<div class="course_content" style="margin-top:30px;">
			<div class="cc_headers">
				<h4 class="title">Barcha kurslar</h4>
				<ul class="course_schdule float-right">
					<li class="list-inline-item"><a href="#">Jami 
					3
					bo'limlar</a></li>
					<li class="list-inline-item"><a href="#">10:56:11</a></li>
				</ul>
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
												<span class="cs_time">02:53</span> 
												<span class="cs_preiew">Ko'rish</span>
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
			
			<!-- this starting of sections of the lesson-->
			<!-- <div class="details">
			  	<div id="accordion" class="panel-group cc_tab">
				    <div class="panel">
				      	<div class="panel-heading">
					      	<h4 class="panel-title">
					        	<a href="#panelBodyCourse1" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">2-BO'LIM: PRESENT SIMPLE</a>
					        </h4>
						</div>
						<div id="panelBodyCourse1" class="panel-collapse collapse">
						    <div class="panel-body">
						      	<ul class="cs_list mb0">
						       		<li><a href="#">
							       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
							       			<span class="cs_time">02:53</span> 
							       			<span class="cs_preiew">Ko'rish</span>
						       			</a>
						       		</li>
						       		<li><a href="#">
							       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
							       			<span class="cs_time">02:53</span> 
							       			<span class="cs_preiew">Ko'rish</span>
						       			</a>
						       		</li>
						       		<li><a href="#">
							       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
							       			<span class="cs_time">02:53</span> 
							       			<span class="cs_preiew">Ko'rish</span>
						       			</a>
						       		</li>
						       		<li><a href="#">
							       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
							       			<span class="cs_time">02:53</span> 
							       			<span class="cs_preiew">Ko'rish</span>
						       			</a>
						       		</li>
						       		<li><a href="#">
							       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
							       			<span class="cs_time">02:53</span> 
							       			<span class="cs_preiew">Ko'rish</span>
						       			</a>
						       		</li>											        		
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			 -->
			<!-- this ^ end of sections of the lesson -->
		</div>
	</div>
</div>