@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <a class="list-group-item bg-success" style="color:white;">
                <h6>Update a course comment</h6>
            </a>
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('update_course_comment',$comment->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" placeholder="course category name" value="{{$comment->name}}" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea id="myTextarea" placeholder="Comment" class="form-control" cols="5" rows="3" name="content" required>{{$comment->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select a course</label>
                            <select class="form-control" id="category_id" name="course_id">
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Do you allow this comment?</label>
                            <select class="form-control" id="category_id" name="confirm">                                
                               <option value="1" @if($comment->confirm==1) selected @endif>YES</option> 
                                <option value="0" @if($comment->confirm==0) selected @endif>NO</option>                               
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">update a comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection