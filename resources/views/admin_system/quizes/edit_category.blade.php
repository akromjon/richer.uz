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
                <form action="{{route('update_quiz_category',$category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="id">Quiz category</label>
                                    <input id="id" placeholder="name of quiz category" value="{{$category->name}}" class="form-control" type="text" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label class="btn-info" for="slug">url  /{{$category->slug}}</label>
                                    <input id="slug" placeholder="slug" value="{{$category->slug}}" class="form-control" type="text" name="slug" required>
                                </div>                                
                                <div class="form-group">
                                    <label for="section_id">Select a section</label>
                                    <select class="form-control" id="section_id" name="section_id" required>
                                        @foreach($sections as $section)
                                        <option value="{{$section->id}}">{{$section->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="course_id">Select a course</label>
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
                                    <button type="submit" class="btn btn-success">update a course category</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection