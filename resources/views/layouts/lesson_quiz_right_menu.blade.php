<div class="col-lg-4 col-xl-4">
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
                                    <li class="@php if(route('action', [$courses, $lesson->slug])==Request::url()){echo" active";}@endphp">
                                        <a href="{{ route('action', [$courses, $lesson->slug]) }}">
                                            <span class="flaticon-play-button-1 icon"></span>{{$lesson->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                    @foreach($section->quizes as $quiz)
                                    <li class="@php if(route('quiz_view', [$courses, $quiz->slug])==Request::url()){echo" active";}@endphp">
                                        <a href="{{ route('quiz_view', [$lesson, $quiz->slug]) }}">
                                            <span class="flaticon-play-button-1 icon"></span>{{$quiz->name}} s
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