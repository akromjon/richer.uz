@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
    <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Course Categories</h6></a>       
        <div class="col-12">
            <div class="card">                
                <div class="card-body p-0 ">
                   
                    <table class="table table-hover bg-light">
                    
                    <a href="{{route('add_category')}}"><button class="btn btn-success float-right mt-2" >Add a course category</button></a>
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong> name</th>
                                <th class="border-top-0"><strong>teacher</th>
                                <th class="border-top-0"><strong>actions</th>                   

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               @foreach($teachers as $teacher)
                               @foreach($teacher->CourseCategories as $category)
                                <td class="txt-oflo"><strong>{{$category->id}}</td>
                                <td class="txt-oflocategories">{{$category->name}}</td>
                                <td class="txt-oflo">{{$teacher->name}}</td>
                                <td><a href="{{route('edit_category',$category->id)}}" style="display: inline;" class="label btn btn-primary label-rounded">edit</a>
                                    <form style="display: inline;" method="post" action="{{route('delete_category',$category->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you going to delete course category!")) {
                                                txt = "You pressed OK!";
                                            } else {
                                                txt = "You pressed Cancel!";
                                            }
                                            
                                        }
                                    </script>
                                </td>
                                
                            </tr>  
                            @endforeach 
                            @endforeach                       
                        </tbody>
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong> name</th>
                                <th class="border-top-0"><strong>teacher</th>
                                <th class="border-top-0"><strong>actions</th>                   

                            </tr>
                        </thead>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection