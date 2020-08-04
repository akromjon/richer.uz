@extends('admin.layouts.app')

@section('content')
<div class="card ">

    <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Add a Section</h6></a>

    
    <div class="card-body">
        <form action="{{route('create_section')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="id">name of section</label>
                    <input id="id" placeholder="name" value="" class="form-control" type="text" name="name" required>
                </div> 

                <div class="form-group">
                  <label for="category_id">Select a course</label>
                 
                    <select class="form-control" id="course_id" name="course_id" required>
                    @foreach($courses as  $course)                                
                         <option value="{{$course->id}}">{{$course->name}}</option>       
                    @endforeach
                    </select>
                 </div>
                <div class="form-group">
                  <label for="category_id">Select a teacher</label>
                    <select class="form-control" id="teacher_id" name="teacher_id" required> 
                    @foreach($teachers as $teacher)                               
                         <option value="{{$teacher->id}}">{{$teacher->name}}</option>  
                    @endforeach     
                   
                    </select>
                 </div>
                 <div class="form-group">
                  <label for="category_id">Select a category</label>
                    <select class="form-control" id="teacher_id" name="category_id" required>  
                    @foreach($categories as $category)                             
                         <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach           
                    </select>
                 </div>
                 <div class="form-group">
                  <label for="category_id">Select a user</label>
                  
                    <select class="form-control" id="teacher_id" name="user_id" required> 
                    @foreach($users as $user)                            
                         <option value="{{$user->id}}">{{$user->name}}</option>   
                    @endforeach          
                    </select>
                 </div>
                 <div class="form-group">
                  <label for="category_id">Select a user</label>
                  
                    <select class="form-control" id="teacher_id" name="show" required> 
                                              
                         <option value="show">show</option>
                         <option value="" selected>NO</option>      
                          
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
