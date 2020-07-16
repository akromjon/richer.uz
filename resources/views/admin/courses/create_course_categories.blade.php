@extends('admin.layouts.app')

@section('content')
<div class="card ">

    <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Add a course category</h6></a>

    
    <div class="card-body">
        <form action="{{route('create_course_categories')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Select a teacher for this course category</label>
                <select class="form-control" id="category_id" name="teacher_id" required> 
                    @foreach($teachers as $teacher)                
                      <option value="{{$teacher->id}}">{{$teacher->name}}</option>                     
                    @endforeach
                </select>
              </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" placeholder="category name" value="" class="form-control" type="text" name="name" required>
            </div>            
             
            <div class="form-group">
                <button type="submit" name="save" class="btn btn-success">Save</button>
            </div>
            <input type="hidden" value="{{Session::token()}}" name="_token">  

        </form>
    </div>
</div>
@endsection
