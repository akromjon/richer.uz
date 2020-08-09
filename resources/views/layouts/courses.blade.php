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
		<div class="col-md-6 col-lg-4 col-xl-4	{{$course->course_categories->id}}" style="position: absolute; left: 0px; top: 0px;">

			<div class="top_courses">
				<div class="thumb">
					<img class="img-whp" src="{{asset('files/courses/')}}/{{$course->slug}}/{{$course->image}}" alt="t1.jpg">
					<div class="overlay">
						<a class="tc_preview_course" href="{{route('view',$course->slug)}}">Darsni ko'rish</a>
					</div>
				</div>
				<div class="details">
					<div class="tc_content">
						<p><i class="fa fa-graduation-cap" aria-hidden="true"></i> {{$course->teacher->name }}</p>
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
								<a href="{{route('view',$course->slug)}}#review">
									<i class="flaticon-comment"></i> {{$course->comments->count()}}
								</a>
							</li>
						</ul>
						<div class="tc_price float-right">{{$course->cost}} </div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	