@extends('admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="clearfix">
            <span>all courses: <span class="badge badge-primary badge-pill">{{$courses->count()}}</span></span>
            <a href="" class="btn btn-info float-right">Add a COurse</a>
        </div>  
    </div>    
    <div class="card-body p-0 ">        
        <p class="card-text m-3 text-center">No courses yet</p>
        <div class="form-group">
                  <label for="tags_id">Selects Courses by id</label>
                  <select class="form-control" id="tags_id" name="tags_id" multiple>                        
                        <option value="akr" ></option>                       
                  </select>
        </div>
        <table  class="table table-responsive  table-hover">
            <thead>
                <th>id</th>
                <th>teacher_id</th>
                <th>course catagory</th>   
                <th>action</th>
                <th>name</th>
                <th>information</th>             
                <th>intro</th>
                <th>teacher_username</th>
                <th>cost</th>
                <th>section</th>             
                <th>videos</th>                           
                <th>quiz</th>                           
                <th>language</th>
                <th>level</th>
                <th>duration</th>
                <th>enrolled</th>
                <th>confirm</th>
                <th>creation</th>                
            </thead>            
            <tbody>
                @foreach($courses as $course)
                <tr>                    
                    <td>{{$course->id}}</td>
                    <td>{{$course->teacher_id}}                
                        <img src=""  style="width:120px;background-size:cover">
                    </td> 
                    <td>beginner</td>                   
                    <td style="vertical-align:left;">
                        <form action="" method="POST" class="float-right ml-2">                           
                            <button type="submit" class="btn btn-success btn-sm">Edit</button>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                                          
                    <td>{{$course->name}}</td>
                    <td style="vertical-align:left;">{{$course->information}}</td>
                    <td>{{$course->intro}}</td>
                    <td>{{$course->teacher_username}}</td>
                    <td>{{$course->cost}}</td>
                    <td>{{$course->section}}</td>
                    <td>{{$course->videos}}</td>
                    <td>{{$course->quiz}}</td>
                    <td>{{$course->language}}</td>
                    <td>{{$course->level}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->enrolled_students}}</td>
                    <td>{{$course->confirm}}</td>
                    <td>{{$course->created_at}}</td>                    
                </tr>
                @endforeach                
            </tbody>
        </table>        
            <nav class="d-flex justify-content-center">            
        </nav>
    </div>
</div>
@endsection