@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Quiz Categories</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">
                        <thead>
                            <tr class="btn-dark">
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">URL</th>
                                <th class="border-top-0">SECTION</th>
                                <th class="border-top-0">COURSE</th>
                                <th class="border-top-0">CREATION</th>
                                <th class="border-top-0">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($courses as $course)
                                @foreach($course->quizes as $quiz)
                                @foreach($course->sections as $section)
                                @if($section->id==$quiz->section_id)
                                <td class="txt-oflo btn-dark">{{$quiz->id}}</td>
                                <td class="txt-oflo">{{$quiz->name}}</td>
                                <td><a style="display: inline-block;" href="{{route('edit_quiz_category',$quiz->id)}}" class="label btn btn-primary label-rounded">edit</a>
                                    <form style="display: inline-block;" method="post" action="{{route('delete_category',$quiz->id)}}">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        <button style="display: inline-block;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this quiz category forever!")) {} else {}
                                        }
                                    </script>
                                </td>
                                <td class="txt-oflo">{{$course->slug}}/{{$quiz->slug}}</td>
                                <td class="txt-oflo">{{$section->name}}</td>
                                <td class="txt-oflo">{{$course->name}}</td>
                                <td class="txt-oflo">{{$quiz->created_at->diffForHumans()}}</td>
                                <td class="txt-oflo btn-dark">{{$quiz->id}}</td>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                        </tbody>
                        <thead>
                            <tr class="btn-dark">
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">URL</th>
                                <th class="border-top-0">SECTION</th>
                                <th class="border-top-0">COURSE</th>
                                <th class="border-top-0">CREATION</th>
                                <th class="border-top-0">#</th>
                            </tr>
                        </thead>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>
        </div>
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Quiz Questions</h6>
        </a>
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">

                        <thead>
                            <tr class="btn-dark">
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">QUESTION</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">CATEGORY</th>
                                <th class="border-top-0">CORRECT</th>
                                <th class="border-top-0">A</th>
                                <th class="border-top-0">B</th>
                                <th class="border-top-0">C</th>
                                <th class="border-top-0">D</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                @foreach($quizes as $quiz)
                                @foreach($quiz->questions as $question)

                                <td class="txt-oflo btn-dark">{{$question->id}}</td>
                                <td class="txt-oflo">{{$question->name}}</td>
                                <td><a style="display: inline-block; width:60px;" href="{{route('edit_quiz_question',$question->id)}}" class="label btn btn-primary label-rounded">edit</a>
                                    <form style="display: inline-block; width:60px;" method="post" action="{{route('delete_question',$question->id)}}">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        <button style="display: inline-block;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this quiz category forever!")) {} else {}
                                        }
                                    </script>
                                </td>
                                <td class="txt-oflo">{{$quiz->name}}</td>
                                <td class="txt-oflo btn-success">
                                    @php
                                    switch($question->answer){


                                    case 1:
                                    echo "A";
                                    break;
                                    case 2:
                                    echo "B";
                                    break;
                                    case 3:
                                    echo "C";
                                    break;
                                    case 4:
                                    echo "D";
                                    break;
                                    }
                                    @endphp
                                </td>

                                @foreach($question->options as $option)
                                <td class="txt-oflo">{{$option->name}}</td>
                                @endforeach
                                <td><a style="display: inline-block; width:60px;" href="{{route('edit_quiz_option',$question->id)}}" class="label btn btn-primary label-rounded">edit</a>
                                    <form style="display: inline-block;" method="post" action="{{route('delete_options',$question->id)}}">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        <button style="display: inline-block; width:60px;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this quiz category forever!")) {} else {}
                                        }
                                    </script>
                                </td>
                                <td class="txt-oflo btn-dark">{{$question->id}}</td>
                            </tr>

                            @endforeach
                            @endforeach
                        </tbody>

                        <thead>
                            <tr class="btn-dark">
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">QUESTION</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">CATEGORY</th>
                                <th class="border-top-0">CORRECT</th>
                                <th class="border-top-0">A</th>
                                <th class="border-top-0">B</th>
                                <th class="border-top-0">C</th>
                                <th class="border-top-0">D</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">#</th>
                            </tr>
                        </thead>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{route('create_quiz_categories')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="id"><strong>Quiz category</strong></label>
                                    <input id="id" placeholder="name of quiz category" value="" class="form-control" type="text" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="id">url</label>
                                    <input id="id" placeholder="slug" value="" class="form-control" type="text" name="slug" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="category_id">Select a section</label>
                                    <select class="form-control" id="section_id" name="section_id" required>
                                        @foreach($sections as $section)
                                        <option value="{{$section->id}}">{{$section->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Select a course</label>
                                    <select class="form-control" id="course_id" name="course_id" required>
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Show or Not?</label>
                                    <select class="form-control" id="course_id" name="show">
                                        <option value="" selected>Don't show</option>
                                        <option value="show">show</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">add a course category</button>
                                </div>
                            </form>
                            
                            <form action="{{route('create_quiz_questions')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                    <label for="id"><strong>Question name</strong></label>
                                    <input id="id" placeholder="name" value="" class="form-control" type="text" name="name" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Select a quiz category</label>
                                    <select class="form-control" id="quiz_id" name="quiz_id" required>
                                        @foreach($quizes as $quiz)
                                        <option value="{{$quiz->id}}">{{$quiz->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Choose a correct answer?</label>
                                    <select class="form-control btn-primary" id="course_id" name="answer" required>
                                        <option>Choose an answer</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                        <option value="4">D</option>
                                    </select>
                                </div>
                                <button class="btn btn-success">add a question</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card ">
                        <div class="card-body">
                            
                            <br><form action="{{route('create_quiz_options')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="category_id">Choose a question?</label>
                                    <select class="form-control" id="question_id" name="question_id">
                                        <option>Choose an question</option>
                                        @foreach($questions->take(5) as  $question)
                                        <option value="{{$question->id}}" selected>{{$question->name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id">Option A</label>
                                    <input id="id" placeholder="A." value="A. " class="form-control" type="text" name="name_a" required>
                                </div>
                                <div class="form-group">
                                    <label for="id">Option B</label>
                                    <input id="id" placeholder="B." value="B. " class="form-control" type="text" name="name_b" required>
                                </div>
                                <div class="form-group">
                                    <label for="id">Option C</label>
                                    <input id="id" placeholder="C." value="C. " class="form-control" type="text" name="name_c" required>
                                </div>
                                <div class="form-group">
                                    <label for="id">Option D</label>
                                    <input id="id" placeholder="D." value="D. " class="form-control" type="text" name="name_d" required>
                                </div>
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">add options</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection