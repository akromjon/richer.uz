@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
    <a  class="list-group-item list-group-item-action active" style="color:white;"><h6>Teachers</h6></a>  
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">IMAGE</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">PHONE</th>                              
                               
                                <th class="border-top-0">INFORMATION</th>
                                <th class="border-top-0">CONFIRM</th>                                
                               
                                <th class="border-top-0">SUBJECT</th>
                                <th class="border-top-0">RESUME</th>
                                <th class="border-top-0">CREATION</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach($teachers as $teacher)
                                <td class="txt-oflo">{{$teacher->teacher_id}}</td>
                                <td class="txt-oflo">{{$teacher->name}}</td>
                                <td class="txt-oflo"><img style="width: 50px; height:50px;" src="{{$teacher->avatar}}" alt="6.png"></td>
                                <td><a href="{{route('edit_teacher',$teacher->id)}}" class="label btn btn-success label-rounded">edit</a>

                                    <form method="post" action="{{route('delete_teacher',$teacher->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Press a button!")) {
                                                txt = "You pressed OK!";
                                            } else {
                                                txt = "You pressed Cancel!";
                                            }
                                            
                                        }
                                    </script>


                                </td>
                                <td class="txt-oflo">{{$teacher->phone_number}}</td>                               
                                
                                <td title="{!!$teacher->information!!}" class="txt-oflo">{!! Illuminate\Support\Str::limit($teacher->information, 10) !!}</td>
                                <td class="txt-oflo">{{$teacher->confirm}}</td>                               
                                
                                <td class="txt-oflo">{{$teacher->subject}}</td>
                                <td class="txt-oflo">{{ Illuminate\Support\Str::limit($teacher->resume, 10) }}</td>
                                <td class="txt-oflo">{{$teacher->created_at->diffForHumans()}}</td>

                            </tr>
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