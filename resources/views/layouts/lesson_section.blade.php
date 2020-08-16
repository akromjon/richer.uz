<div class="tab-pane fade show active" id="course" role="tabpanel" aria-labelledby="review-tab">
	<div class="cs_row_three csv2">
		<div class="course_content" style="margin-top:30px;">
			<div class="cc_headers">
				<h4 class="title">Barcha kurslar</h4>
				<ul class="course_schdule float-right">
					<li class="list-inline-item"><a href="#">Jami bo'limlar:</a></li>
					<li class="list-inline-item"><a href="#">{{$course->sections->count()}}</a></li>
				</ul>
			</div>
			<br>
			<hr>
			@foreach($course->sections as $section)
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
						<div id="panelBodyCourse{{$section->id}}" class="panel-collapse collapse {{$section->show}}">
							<div class="panel-body">
								<ul class="cs_list mb0">
									@foreach($section->lessons as $lesson)
									<li class="">
										<a href="{{ route('action', [$course, $lesson->slug]) }}">
											<i class="fa fa-play" aria-hidden="true"></i> {{$lesson->name}}
											<span class="cs_time">{{$lesson->duration}}:00 min</span>
											<span class="cs_preiew">Boshlash</span>
										</a>
									</li>
									@endforeach
									@foreach($section->quizes as $quiz)
									<li class="">
										<a href="{{ route('quiz_view', [$course, $quiz->slug]) }}">
											<i class="fa fa-question-circle-o" aria-hidden="true"></i> {{$quiz->name}}
											<span class="cs_time">{{$quiz->questions->count()}}ta testlar</span>
											<span class="cs_preiew">Boshlash</span>
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
			<?php
			// <!-- this starting of sections of the lesson-->
			// <!-- <div class="details">
			//   	<div id="accordion" class="panel-group cc_tab">
			// 	    <div class="panel">
			// 	      	<div class="panel-heading">
			// 		      	<h4 class="panel-title">
			// 		        	<a href="#panelBodyCourse1" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">2-BO'LIM: PRESENT SIMPLE</a>
			// 		        </h4>
			// 			</div>
			// 			<div id="panelBodyCourse1" class="panel-collapse collapse">
			// 			    <div class="panel-body">
			// 			      	<ul class="cs_list mb0">
			// 			       		<li><a href="#">
			// 				       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
			// 				       			<span class="cs_time">02:53</span> 
			// 				       			<span class="cs_preiew">Ko'rish</span>
			// 			       			</a>
			// 			       		</li>
			// 			       		<li><a href="#">
			// 				       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
			// 				       			<span class="cs_time">02:53</span> 
			// 				       			<span class="cs_preiew">Ko'rish</span>
			// 			       			</a>
			// 			       		</li>
			// 			       		<li><a href="#">
			// 				       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
			// 				       			<span class="cs_time">02:53</span> 
			// 				       			<span class="cs_preiew">Ko'rish</span>
			// 			       			</a>
			// 			       		</li>
			// 			       		<li><a href="#">
			// 				       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
			// 				       			<span class="cs_time">02:53</span> 
			// 				       			<span class="cs_preiew">Ko'rish</span>
			// 			       			</a>
			// 			       		</li>
			// 			       		<li><a href="#">
			// 				       			<span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course 
			// 				       			<span class="cs_time">02:53</span> 
			// 				       			<span class="cs_preiew">Ko'rish</span>
			// 			       			</a>
			// 			       		</li>											        		
			// 					</ul>
			// 				</div>
			// 			</div>
			// 		</div>
			// 	</div>
			// </div>			 -->
			// <!-- this ^ end of sections of the lesson -->			
			?>
		</div>
	</div>
</div>