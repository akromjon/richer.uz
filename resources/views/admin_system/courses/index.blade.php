@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
            <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Courses</h6></a>  
     
                    <table class="table table-responsive table-hover bg-light">
                    <a href="{{route('add_course')}}"><button class="btn btn-success float-right mt-2" >add a course</button></a>
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">IMAGE</th>                                
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">TEACHER</th>
                                <th class="border-top-0">CONFIRM</th>
                                <th class="border-top-0">URL</th>
                                <th class="border-top-0">CATEGORY</th>                                
                                <th class="border-top-0">INFORMATION</th>
                                <th class="border-top-0">VIDEO</th>
                                <th class="border-top-0">COST</th>                                
                                <th class="border-top-0">LANGUAGE</th>
                                <th class="border-top-0">LEVEL</th>
                                <th class="border-top-0">DURATION</th>
                                
                                <th class="border-top-0">VIEW</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($teachers as $teacher)
                                @foreach($teacher->courses as $course)
                                <td class="txt-oflo">{{$course->id}}</td>
                                <td class="txt-oflo">{{$course->name}}</td>
                                <td class="txt-oflo"><img style="width: 50px; height:50px;" src="{{$course->image}}" alt="6.png"></td>                                
                                <td><a style="display: inline-block; width:60px;" href="{{route('edit_course',$course->id)}}" class="label btn btn-success label-rounded">edit</a>
                                    <form style="display: inline-block; width:60px;" method="post" action="{{route('delete_course',$course->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button style="display: inline-block;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form><!-- ============================================================== -->
    <!-- Email campaign chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Ravenue - page-view-bounce rate -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this course forever!")){} else {}
                                            }
                                    </script>
                                </td>
                                <td class="txt-oflo">{{$teacher->name}}</td>

                                <td class="txt-oflo">
                                <form class="form-group d-inline" action="{{route('update_course_confirmation',$course->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="form-group d-inline-flex">
                                        <select class="form-control d-inline" id="category_id" name="confirm">
                                            <option value="1" @if($course->confirm==1) selected @endif>YES</option>
                                            <option class="bg-danger" value="0" @if($course->confirm==0) selected @endif>NO</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-inline-flex">
                                        <button type="submit" class="btn btn-success">update</button>
                                    </div>

                                </form>
                                </td>
                                <td class="txt-oflo"><a href="http://127.0.0.1:8000/courses/{{$course->slug}}">{{$course->slug}}</a></td>
                                <td class="txt-oflo">{{$course->course_categories_id}}</td>
                                <td class="txt-oflo">{{ Illuminate\Support\Str::limit($course->information, 10) }}</td>
                                <td class="txt-oflo">{{ Illuminate\Support\Str::limit($course->intro, 10) }}</td>
                                <td class="txt-oflo">{{$course->cost}}</td>                               
                                <td class="txt-oflo">{{$course->language}}</td>
                                <td class="txt-oflo">{{$course->level}}</td>
                                <td class="txt-oflo">{{$course->duration}}</td>
                                
                                <td class="txt-oflo">{{$course->visit_count}}</td>
                            </tr>
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