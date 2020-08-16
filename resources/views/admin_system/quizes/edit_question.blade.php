@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Edit a teacher</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('update_quiz_question',$question->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="id"></label>
                            <input id="id" placeholder="name of section" value="{{$question->name}}" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="quiz_id">Select a Quiz category</label>
                            <select class="form-control" id="quiz_id" name="quiz_id" required>
                                @foreach($quizes as $quiz)
                                <option value="{{$quiz->id}}">{{$quiz->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="answer">Select an answer</label>
                            <select class="form-control btn-success" id="answer" name="answer" required>                                
                                @foreach($question->options as $key=> $answer)
                                <option value="{{$key+1}}" @if($question->answer==$key+1){{{"selected"}}}@endif>                                
                                {{$answer->name}}
                                </option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Show or Not? (<strong> this section is the first section in the course make it show</strong>)</label>
                            <select class="form-control" id="course_id" name="show">
                                <option value="" selected>Don't show</option>
                                <option value="show">show</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection