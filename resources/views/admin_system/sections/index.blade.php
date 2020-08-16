@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
         <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Sectins</h6></a>  
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">
                    <a href="{{route('add_section')}}"><button class="btn btn-success float-right mt-2" >add a section</button></a>
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME OF SECTION</th>  
                                                                                             
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">COURSE</th> 
                                <th class="border-top-0">TEACHER</th>                                
                                <th class="border-top-0">SHOW</th>  
                                <th class="border-top-0">CREATION</th>                   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($sections as $teacher)
                                @foreach($teacher->sections as $section)
                                @foreach($teacher->courses as $course)
                                @foreach($teacher->CourseCategories as $category)
                                <td class="txt-oflo">{{$section->id}}</td>
                                <td class="txt-oflo">{{$section->name}}</td>
                                                                                       
                                <td><a style="display: inline-block; " href="{{route('edit_section',$section->id)}}" class="label btn btn-success label-rounded">edit</a>
                                    <form style="display: inline-block;" method="post" action="{{route('delete_section',$section->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button style="display: inline-block;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this section forever!")){} else {}
                                            }
                                    </script>
                                </td>
                                <td class="txt-oflo">{{$course->name}}</td>    
                                <td class="txt-oflo">{{$teacher->name}}</td>
                                <td class="txt-oflo">{{$section->show}}</td>
                                <td class="txt-oflo">{{$section->created_at->diffForHumans()}}</td>                

                                
                            </tr>
                            @endforeach
                            @endforeach
                            @endforeach
                            @endforeach
                        </tbody>                       
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection