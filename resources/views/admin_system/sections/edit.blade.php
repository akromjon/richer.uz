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
                    <form action="{{route('update_section',$section->id)}}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                        <div class="form-group">
                            <label for="id"></label>
                            <input id="id" placeholder="name of section" value="{{$section->name}}" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            
                            <label for="category_id">Select a course</label>
                            <select class="form-control" id="course_id" name="course_id" required>
                                @foreach($teachers as $section)
                                @foreach($section->courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select a teacher</label>
                            <select class="form-control" id="course_id" name="teacher_id" required>
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
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