@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Add a lesson</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('create_lesson')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="lesson">Lesson</label>
                            <input id="lesson" placeholder="name" value="" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input id="url" placeholder="ulr" value="" class="form-control" type="text" name="slug" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="content">Content of lesson</label>
                            <textarea id="content" placeholder="Content lesson" class="form-control" cols="5" rows="3" name="content" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">Duration-only numbers</label>
                            <input id="url" placeholder="minutes" value="" class="form-control" type="number" name="duration" required>
                        </div>
                        <div class="form-group">
                            <label for="video"><strong>Upload Cover Video (Size::no more than 20 MB)</strong></label>
                            <input id="video" class="form-control-file" type="file" name="video" required>
                        </div>

                        <div class="form-group">
                            <label for="categoInformation about a teacherry_id">Select course</label>
                            <select class="form-control" id="course_id" name="course_id" >
                                @foreach($courses as $course)
                                <option value="{{$course->id}}" selected>{{$course->name}}</option>
                                @endforeach                                                       
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoInformation about a teacherry_id">Select folder</label>
                            <select class="form-control" id="course_id" name="course_folder" >
                                @foreach($courses as $course)
                                <option value="{{$course->slug}}">/{{$course->slug}}</option>
                                @endforeach                                                       
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoInformation about a teacherry_id">Select course</label>
                            <select class="form-control" id="section_id" name="section_id" >
                                @foreach($course->sections as $section)
                                <option value="{{$section->id}}" selected>{{$section->name}}</option>
                                @endforeach                                                       
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