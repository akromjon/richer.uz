@extends('admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="clearfix">

            <span>All Teachers</span>
            <a href="{{route('add_teacher')}}" class="btn btn-info float-right">Add a Teacher</a>
        </div>       
        
    </div>
    
       <div class="card-body p-0 ">
        
        
        <div class="form-group">
                  <label for="tags_id">Selects Teachers by Username</label>
                  <select class="form-control" id="tags_id" name="tags_id" multiple>
                        @foreach($teachers as $teacher)
                        <option value="akr" >{{$teacher->username}}</option>                       
                        @endforeach
                  </select>
                </div>

        <table  class="table table-responsive table-bordered  table-hover">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>action</th>
                <th>phone</th>             
                <th>avatar</th>
                <th>username</th>
                <th>information</th>
                <th>confirm</th>             
                <th>address</th>                           
                <th>email</th>                           
                <th>subject</th>
                <th>resume</th>
                <th>created date</th>
                
            </thead>
            
            <tbody>

                <tr>
                    @foreach($teachers as $teacher)
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->name}}                    
                        <img src=""  style="width:120px;background-size:cover">
                    </td>
                    <td style="vertical-align:left;">
                        <form action="" method="POST" class="float-right ml-2">                           
                            <button type="submit" class="btn btn-success btn-sm">Edit</button>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        
                    <td>{{$teacher->phone_number}}</td>
                    <td style="vertical-align:left;">{{$teacher->avatar}}
                        
                    </td>
                    <td>{{$teacher->username}}</td>
                    <td>{{$teacher->information}}</td>
                    <td>{{$teacher->confirm}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->subject}}</td>
                    <td>{{$teacher->resume}}</td>
                    <td>{{$teacher->created_at}}</td>
                </tr>
                @endforeach
                
                
            </tbody>

        </table>
        
        <nav class="d-flex justify-content-center">

            
        </nav>
    </div>
</div>

@endsection