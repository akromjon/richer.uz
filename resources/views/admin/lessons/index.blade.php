@extends('admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="clearfix">
            <span>All Lessons</span>           
        </div>        
    </div>  
       <div class="card-body p-0 ">
        <table  class="table table-responsive table-bordered  table-hover">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>action</th>
                <th>slug</th>             
                <th>content</th>
                <th>video</th>
                <th>duration</th>
                <th>section_id</th>
                <th>lesson_id</th>             
                        
                
            </thead>
            
            <tbody>

                <tr>
                    @foreach($lessons as $lesson)
                    <td>{{$lesson->id}}</td>
                    <td>{{$lesson->name}}                    
                        <img src=""  style="width:120px;    background-size:cover">
                    </td>
                    <td style="vertical-align:left;">
                        
                    <form method="post" action="{{route('delete_lesson',$lesson->id)}}"> 
                    <input type="hidden" name="_method" value="delete" />                 
                    @csrf

                    <button type="submit" onclick="return alert('Are you sure?')" class="btn btn-danger">Remove</button>
                    </form>  
                         <a class="btn btn-primary" href="{{route('edit_lesson',$lesson->id)}}">edit</a>          
                                              
                    <td>{{$lesson->slug}}</td>                    
                    <td>{{ Illuminate\Support\Str::limit($lesson->content, 20) }}</td>
                    <td>{{ Illuminate\Support\Str::limit($lesson->video, 20) }}</td>
                    <td>{{$lesson->duration}}</td>
                    <td>{{$lesson->section_id}}</td>
                    <td>{{$lesson->course_id}}</td>
                    
                   
                </tr>
                @endforeach
                
                
            </tbody>

        </table>
        
        <nav class="d-flex justify-content-center">

            
        </nav>
    </div>
</div>

@endsection