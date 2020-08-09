@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Lessons</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">
                        <a href="{{route('add_lesson')}}"><button class="btn btn-success float-right mt-2">add a lesson</button></a>
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">ACTION</th>                                
                                <th class="border-top-0">URL</th>                                
                                <th class="border-top-0">DURATION</th>
                                <th class="border-top-0">VIDEO</th>
                                <th class="border-top-0">SECTION</th>
                                <th class="border-top-0">COURSE</th>
                                <th class="border-top-0">CREATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($teachers as $teacher)                              
                                @foreach($teacher->sections as $section)
                                @foreach($section->lessons as $lesson)
                                @foreach($teacher->courses as $course)
                                <td class="txt-oflo">{{$lesson->id}}</td>
                                <td class="txt-oflo">{{$lesson->name}}</td>
                                <td><a style="display: inline-block;" href="{{route('edit_lesson',$lesson->id)}}" class="label btn btn-success label-rounded">edit</a>
                                    <form style="display: inline-block;" method="post" action="{{route('delete_lesson',$lesson->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button style="display: inline-block;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                     <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this section forever!")) {} else {}
                                        }
                                    </script>
                                </td>
                                <td class="txt-oflo">{{$lesson->slug}}</td>                                
                                <td class="txt-oflo">{{$lesson->duration}}</td>
                                <td class="txt-oflo">{{ Illuminate\Support\Str::limit($lesson->video, 50) }}</td>
                                <td class="txt-oflo">{{$section->name}}</td>
                                <td class="txt-oflo">{{$course->name}}</td>
                                <td class="txt-oflo">{{$lesson->created_at->diffForHumans()}}</td>


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