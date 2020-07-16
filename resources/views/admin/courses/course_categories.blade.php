@extends('admin.layouts.app')
@section('content')




<div class="card">
     <div class="card-header">
        <div class="clearfix">
            <span>categories: <span class="badge badge-primary badge-pill">{{$course_categories->count()}}</span></span>
            <a href="" class="btn btn-info float-right">Add a course category</a>
        </div>  
    </div>    
    <!-- <div class="card-body p-0 ">        
        <p class="card-text m-3 text-center">No course categories yet</p>
        <div class="form-group">
                  <label for="tags_id">Selects Course categories by id</label>
                  <select class="form-control" id="tags_id" name="tags_id" multiple>                        
                        <option value="akr" ></option>                       
                  </select>
        </div>  -->
        <table  class="table  table-hover table-bordered">
            <thead>
                <th>#</th>
                <th>teacher_id</th>
                <th>course_name</th>  
                <th>creation date</th>
                <th>edit</th>   
                <th>delete</th>                        
            </thead>            
            <tbody>
                @foreach($course_categories as $course_category)
                <tr>                    
                    <td>{{$course_category->id}}</td>
                    <td>@foreach($teachers as $teacher)
                         @if($teacher->id==$course_category->teacher_id_number)
                         {{$teacher->name}}
                         @endif
                        @endforeach       
                        <img src=""  style="width:120px;background-size:cover">
                    </td> 
                    <td>{{$course_category->name}}</td>  
                    <td>{{date_format($course_category->created_at,' D, F d, Y ')}}</td>   
                    <td> 
                        <form action="" method="POST" class="float-left ml-2">                           
                            <button type="submit" class="btn btn-success btn-sm">Edit</button>                            
                        </form>
                    </td>  
                    <td>
                        <form action="" method="POST" class="float-left  ml-2">                            
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>                                
                    </td>              
                            
                </tr>
                @endforeach                
            </tbody>
        </table>        
            <nav class="d-flex justify-content-center">            
        </nav>
    </div>
</div>
@endsection