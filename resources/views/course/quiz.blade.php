
<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions"><head>
@include('layouts.head')	
    <title>{{$courses->name}}</title>
    <link href="http://mozilla.github.io/foundation-icons/assets/foundation-icons.css" type="text/css" rel="stylesheet">
    <style>
    .details{
        background-color:white;
    }
    .custom-radios div {
  display: inline-block;
}
.custom-radios input[type="radio"] {
  display: none;
}
.custom-radios input[type="radio"] + label {
  color: #333;
  font-family: Arial, sans-serif;
  font-size: 14px;
}
.custom-radios input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
  background-repeat: no-repeat;
  background-position: center;
  text-align: center;
  line-height: 44px;
}
.custom-radios input[type="radio"] + label span img {
  opacity: 0;
  transition: all .3s ease;
}
.custom-radios input[type="radio"]#color-1 + label span {
  background-color: #2ecc71;
}
.custom-radios input[type="radio"].color-2 + label span {
  background-color: hsl(201, 47%, 48%);
}
.custom-radios input[type="radio"].color-3 + label span {
  background-color: #f1c40f;
}
.custom-radios input[type="radio"]#color-4 + label span {
  background-color: #e74c3c;
}
.custom-radios input[type="radio"]:checked + label span {
  opacity: 1;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg) center center no-repeat;
  background-color:hsl(201, 47%, 48%);  
  width: 40px;
  height: 40px;
  display: inline-block;

}
      </style>
</head>
<body>
    @include('layouts.mobile_menu')	
<div class="wrapper mm-page mm-slideout"  style="background-color: #cbcbcb;"  id="mm-0">
    <!-- Inner Page Breadcrumb -->
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
							    <div class="cs_row_one">                            
									<div class="cs_ins_container">                                
										<div class="courses_big_thumb">
                                        <!--
                                            this is starting -->
                                            <div class="tab-pane fade active show" id="course" role="tabpanel" aria-labelledby="review-tab">
                                                <div class="cs_row_three csv2">
                                                    <div class="course_content" >
                                                        <div class="cc_headers">
                                                            <h4 class="title"> {!!$question_category->name!!}</h4>
                                                            <ul class="course_schdule float-right">
                                                                <li class="list-inline-item"><a href="#">Jami Testlar:</a></li>
                                                                <li class="list-inline-item"><a href="#">{{$question_category->questions->count()}}</a></li>
                                                            </ul>
                                                
                                                        </div>
                                                        <br><hr>
                                                        <form method="post" 
                                                        action="{{route('answer')}}">
                                                        @csrf
                                                        <input type="hidden" name="mark"   id="result2" value="result2">
                                                        <input type="hidden" name="quiz_id"    value="{{$question_category->id}}">                                                       
                                                        <input type="hidden" name="user_id"    value="1">
                                                        <input type="hidden" style="width:100%" class="btn btn-lg btn-info"   id="result3" value="saqlash">
                                                        </form>                                                       
                                                       
                                                        
                                                        @if($question_category->answers->count()>=1)
                                                        @foreach($question_category->answers as $answer)
                                                        @if($answer->mark>=50)
                                                        <div class="alert alert-primary" role="alert">
                                                        Tabriklayman, Siz <a class="alert-link">{{$answer->mark}}%</a> ball bilan keyingi bo'limga o'tdingiz
                                                        </div>
                                                        @else
                                                        <div class="alert alert-danger" role="alert">
                                                        Afsuski, Siz <a class="alert-link">{{$answer->mark}}%</a> ball bilan keyingi bo'limga o'ta olmadiz. <br> Sizga avvalgi bo'limni yahshiroq o'rganishni maslahat beramiz!
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                       
                                                        @else
                                                        <div id="quiz">
                                                            <h3><div id="question"></div></h3>
                                                            <label class="option"><input type="radio" name="option" value="1" /><span id="option1"> </span></label><br>
                                                            <label class="option"><input type="radio" name="option" value="2" /><span id="option2"> </span></label><br>
                                                            <label class="option"><input type="radio" name="option" value="3" /><span id="option3"> </span></label><br>
                                                            <label class="option"><input type="radio" name="option" value="4" /><span id="option4"> </span></label><br>
                                                            <input type="submit"   style="width:100%" id="next" value="Keyingi Savol" class="btn btn-info" onclick="nextques();">
                                                          
                                                        </div>
                                                        <div id="result" style="display:none">
                                                        </div>
                                                        
                                                        <input type="hidden" name="" type="hidden" id="quit" onclick="quit();">
                                                        @endif
                                                        
                                                        
                                                        

                                                       
                                                        <!-- <button style="width:100%" href="" type="submit" class="btn btn-lg btn-info">Javoblarni Jo'natish</button>  -->
                                                       
                                                        
                                                        @include('layouts.quiz_script') 
                                                       
                                                    </div>
                                                </div>
                                            </div>   

                                        <!--   this is ending point
                                        -->                                      
											<div class="thumb">                                  							
									        </div>
										</div>
									</div>
								</div>								
								<div class="cs_rwo_tabs csv2">
									<ul class="nav nav-tabs" id="myTab" role="tablist">										
										<li class="nav-item">
										    <a class="nav-link active" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="fa fa-user-circle" aria-hidden="true"></i> O'qituvchi</a>
										</li>										
									</ul>
									<div style="margin-top:30px;" class="tab-content" id="myTabContent">										
										<div class="tab-pane fade show active" id="instructor" role="tabpanel" aria-labelledby="review-tab">
											@include('layouts.teacher')
										</div>
										<!-- comment place -->
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
                                                Darslar:     {{$courses->sections->count()}}
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
                                                            <div id="panelBodyCourse{{$section->id}}" class="panel-collapse collapse @php if($section->id==$question_category->section_id) echo 'show'; @endphp">
                                                                <div class="panel-body">
                                                                    <ul class="cs_list mb0">
                                                                        @foreach($section->lessons as $lesson)																								
                                                                            <li class="@php if(route('action', [$courses, $lesson->slug])==Request::url()){echo"active";}@endphp">																			
                                                                            <a href="{{ route('action', [$courses, $lesson->slug]) }}">
                                                                                    <i class="fa fa-play" aria-hidden="true"></i> {{$lesson->name}}
                                                                                    <span class="cs_time">{{$lesson->duration}}:00 min</span>                                                                                    
                                                                                </a>
                                                                            </li>                                                                       						  								
                                                                        @endforeach
																		@foreach($section->quizes as $quiz)                                                                        																						
                                                                            <li class="@php if(route('quiz_view', [$courses, $quiz->slug])==Request::url()){echo"active";}@endphp">																			
                                                                            <a href="{{ route('quiz_view', [$courses, $quiz->slug]) }}">
                                                                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i> {{$quiz->name}}
                                                                                    <span class="cs_time">{{$quiz->questions->count()}}ta testlar</span>                                                                                    
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
 
	@include('layouts.quiz_calculator')


	<!-- Our Footer -->

@include('layouts.footer')
</body>
</html>
