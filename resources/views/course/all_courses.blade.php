@extends('layouts.master')
	@section('content')
		<section class="home3_top_course pb0 pt0" style="margin-top: 25px;">
					<div class="container">
						<div class="row">
							<!-- <div class="col-lg-6 offset-lg-3">
								<div class="main-title text-center">
									<h3 class="mt0" style="">Barcha kurslarni filtirlab ko'rish</h3>				
								</div>
							</div> -->
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div id="options" class="alpha-pag full">
									<div class="option-isotop">
										<ul id="filter" class="option-set" data-option-key="filter">
											<li class="list-inline-item">
												<h4><a href="#all" data-option-value="*" class="selected">Barcha kurslar</a></h4>
											</li>
											@foreach($course_categories as $course_category)
											<li class="list-inline-item">
												<a href="#{{$course_category->id}}" data-option-value=".{{$course_category->id}}">{{$course_category->name}}</a>
											</li>										
											@endforeach
										</ul>
									</div>
								</div><!-- FILTER BUTTONS -->
								@include('layouts.courses')
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
							</div>
						</div>
					</div>
			</section>
	@endsection