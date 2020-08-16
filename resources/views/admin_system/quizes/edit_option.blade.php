@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Edit a options</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('update_quiz_option',$question->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="option">Question <strong class="btn-warning">[you cannot change title question here!]</strong></label>
                            <input id="option" placeholder="Question" value="{{$question->name}}" class="form-control btn-dark" type="text" name="question" disabled>
                            <input id="question" placeholder="Question" value="{{$question->id}}" class="form-control" type="hidden" name="question_id" required>
                        </div>
                        <div class="form-group">
                            @foreach($question->options as $key=> $option)
                            <label for="id">Option {{$key+1}}</label>
                            <input type="hidden" name="option_{{$key+1}}" class="form-control" value="{{$option->id}}">
                            <input id="id" placeholder="option" value="{{$option->name}}" class="form-control" type="text" name="name_{{$key+1}}" required>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">update options</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection