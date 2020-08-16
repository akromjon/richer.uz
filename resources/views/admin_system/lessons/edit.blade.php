@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Edit a lesson</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">

                <div class="card-body">
                    <form action="{{route('update_lesson',$lesson->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="lesson">Lesson</label>
                            <input id="lesson" placeholder="name" value="{{$lesson->name}}" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="image"><strong>Upload a cover picture that appears in the lesson</strong></label>
                            <input id="image" class="form-control-file" type="file" name="image" >
                            <input id="url" placeholder="image" value="{{$lesson->image}}" class="form-control" type="hidden" name="image">
                        </div>
                        Selected Image:<br>
                       
                        <img style="width: 500px; height:300px;" src="{{$lesson->image}}" alt="6.png"><br>
                        
                        <br>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input id="url" placeholder="ulr" value="{{$lesson->slug}}" class="form-control" type="text" name="slug" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Content of lesson</label>
                            <textarea id="content" placeholder="Content lesson" class="form-control" cols="5" rows="3" name="content" required>{{$lesson->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">Duration-only numbers</label>
                            <input id="url" placeholder="minutes" value="{{$lesson->duration}}" class="form-control" type="number" name="duration" required>
                        </div>

                        <div class="form-group">
                            <label for="video"><strong>Upload Cover Video (Size::no more than 20 MB)</strong></label>
                            <input id="video" class="form-control-file" type="file" name="video">
                            <input id="video" value="{{$lesson->video}}" class="form-control-file" type="hidden" name="video">

                        </div>

                        <video width="500" height="300" controls>
                            @foreach($courses as $course)
                            @if($lesson->course_id==$course->id)
                            <source src="{{$lesson->video}}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                            @endif
                            @endforeach
                        </video>

                        <div class="form-group">
                            <label for="categoInformation about a teacherry_id">Select course</label>
                            <select class="form-control" id="course_id" name="course_id">
                                @foreach($courses as $course)
                                <option value="{{$course->id}}" selected>{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoInformation about a teacherry_id">Select folder</label>
                            <select class="form-control" id="course_id" name="course_folder">
                                @foreach($courses as $course)
                                <option value="{{$course->slug}}">/{{$course->slug}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoInformation about a teacherry_id">Select course</label>
                            <select class="form-control" id="section_id" name="section_id">
                                @foreach($course->sections as $section)
                                <option value="{{$section->id}}" selected>{{$section->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="meta">Meta Description</label>
                            <input id="meta" placeholder="name" value="{{$lesson->meta_description}}" class="form-control" type="text" name="meta_description" required>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input id="meta_keywords" placeholder="name" value="{{$lesson->meta_keywords}}" class="form-control" type="text" name="meta_keywords" required>
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