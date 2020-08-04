@extends('admin.layouts.app')

@section('content')
<div class="card ">

    <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Add a Lesson</h6></a>

    
    <div class="card-body">
        <form action="{{route('course_lesson')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="id">lesson</label>
                    <input id="id" placeholder="name" class="form-control" type="text" name="name" required>
                </div> 
                <div class="form-group">
                    <label for="id">slug</label>
                    <input id="id" placeholder="name"  class="form-control" type="text" name="slug" required>
                </div>
                <div class="form-group">
                <label for="content">content</label>
                <textarea id="content"  placeholder="Post content" class="form-control" cols="5" rows="3" name="content" required></textarea >
            </div>
            
                <div class="form-group">
                    <label for="id">duration</label>
                    <input id="id" placeholder="name" value="" class="form-control" type="number" name="duration" required>
                </div>
                <div class="form-group">
                    <label for="id">video link here</label>
                    <input id="id" placeholder="name" value="" class="form-control" type="text" name="video" required>
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
                  <label for="section_id">Select a course</label>                 
                    <select class="form-control" id="course_id" name="course_id" required>  
                        @foreach($courses as $course)                                                  
                         <option value="{{$course->id}}">{{$course->name}}</option> 
                        @endforeach                
                    </select>
                 </div>     


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                <input type="hidden" value="{{Session::token()}}" name="_token">

    

        </form>
    </div>
</div>
@endsection
