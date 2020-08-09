@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Add a section</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('create_section')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id"></label>
                            <input id="id" placeholder="name of section" value="" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select a course</label>
                            <select class="form-control" id="course_id" name="course_id" required>
                                @foreach($sections as $section)
                                @foreach($section->courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select a teacher</label>
                            <select class="form-control" id="course_id" name="teacher_id" required>
                                @foreach($sections as $teacher)                              
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>                               
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Show or Not?</label>
                            <select class="form-control" id="course_id" name="show" >
                                <option value="" selected>Don't show</option> 
                                <option value="show">show</option>                         
                            </select>
                        </div>                    

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection