<div id="home"></div>
<div class="emply-text-sec" style="margin-top:20px;">
	@php 
		if(Request::url()==route('all_courses'))
	{
		
	}
	else
	{
		$html="<div class='col-lg-6 offset-lg-3'>
		<div class='main-title text-center'>
			<h3 title='BARCHA KURSLAR' class='mt0'>Kurslar</h3>
		</div>
	</div>";
	echo $html;}
	@endphp
	<div class="row" id="masonry_abc" style="position: relative; height: 1789.5px;">
		@foreach($courses as $course)
		@if($course->confirm==1)
		<div class="col-md-6 col-lg-4 col-xl-3	{{$course->course_categories->id}}" style="position: absolute; left: 0px; top: 0px;">

			<div class="top_courses">
				<div class="thumb">
					<img class="img-whp" src="{{$course->image}}" alt="{{$course->image}}">
					<div class="overlay">
						<div class="tag bg-info">{{$course->cost}} </div>
						<a class="tc_preview_course" href="{{route('view',$course->slug)}}">Darsni ko'rish</a>
					</div>
				</div>
				<div class="details">
					<div class="tc_content">
						<p> {{$course->teacher->name }}</p>
						<h4><a href="{{route('view',$course->slug)}}">{{$course->name}}</a></h4>
					</div>
					<div class="tc_footer">
						<ul class="tc_meta float-left">
							<li class="list-inline-item">
								<a href="{{route('view',$course->slug)}}">
								<i class="fa fa-file-video-o" aria-hidden="true"></i> {{$course->lessons->count()}} darslar
								</a>
							</li>
							<li class="list-inline-item">
								<a href="{{route('view',$course->slug)}}#review">
									<i class="flaticon-comment"></i> {{$course->comments->where('confirm', '1')->count()}} fikrlar
								</a>
							</li>
							<li class="list-inline-item">
								<a href="{{route('view',$course->slug)}}#review">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$course->quizes->count()}} testlar
								</a>
							</li>
						</ul>
						<?php
						// <div class="tc_price float-right"> </div>
						?>
					</div>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	