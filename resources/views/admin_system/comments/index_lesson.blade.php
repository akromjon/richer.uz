@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">
                        <a class="list-group-item list-group-item-action active" style="color:white;">
                            <h6>Lesson Comments</h6>
                        </a>
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">COMMENT</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">LESSON</th>
                                <th class="border-top-0">ACTION</th>
                                <th class="border-top-0">CONFIRM</th>                                
                                <th class="border-top-0">REPLY</th>
                                <th class="border-top-0">BROWSER</th>
                                <th class="border-top-0">IP</th>
                                <th class="border-top-0">DEVICE</th>
                                <th class="border-top-0">SYSTEM</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($lessons as $lesson)
                                @foreach($lesson->comments as $key=> $comment)
                                <td class="txt-oflo">{{$key+1}}</td>
                                <td class="txt-oflo">{{$comment->content}}</td>
                                <td class="txt-oflo">{{$comment->name}}<input id="{{$key+1}}" type="hidden" value="{{$comment->name}}" name="text"></td>
                                <td class="txt-oflo">{{$lesson->name}}<input id="lesson" type="hidden" value="{{$comment->lesson_id}}" ></td>
                                <td><a style="display: inline-block; width:60px;" href="{{route('edit_lesson_comment',$comment->id)}}" class="label btn btn-success label-rounded">edit</a>
                                    <form style="display: inline-block; width:60px;" method="post" action="{{route('delete_lesson_comment',$comment->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button style="display: inline-block;" type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you sure that you are going to delete this lesson forever!")) {} else {}
                                        }
                                    </script>
                                </td>
                                <td class="txt-oflo">
                                    <form class="form-group " action="{{route('update_lesson_confirmation',$comment->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <select class="form-control" id="category_id" name="confirm">
                                                <option value="1" @if($comment->confirm==1) selected @endif>YES</option>
                                                <option class="bg-danger" value="0" @if($comment->confirm==0) selected @endif>NO</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <button type="submit" class="btn btn-success">update</button>
                                        </div>
                                    </form>
                                </td>                               
                                <td class="txt-oflo">
                                    <div class="form-group d-inline-flex">
                                        <button onclick="myFunction('{{$key+1}}')" class="btn btn-primary fixed">Reply</button>
                                    </div>
                                </td>
                                <td class="txt-oflo">{{$comment->browser}}</td>
                                <td class="txt-oflo">{{$comment->ip_address}}</td>
                                <td class="txt-oflo">{{$comment->device_type}}</td>
                                <td class="txt-oflo">{{$comment->operation_system}}</td>
                            </tr>
                            @endforeach
                            @endforeach                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('reply_lesson_comment')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" placeholder="Admin" value="Richer.uz Admin" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select a lesson</label>
                            <select class="form-control" id="category_id" name="lesson_id">                            
                                @foreach($lessons as $lesson)                                
                                <option value="{{$lesson->id}}">{{$lesson->name}}</option>
                                @endforeach
                                <option value="">Select</option>                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Reply Comment</label>
                            <textarea id="myTextarea" placeholder="Comment" class="form-control" cols="5" rows="3" name="content" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">send a comment</button>
                        </div>
                    </form>
                    <script>
                        function myFunction(inputId) {

                            var text = document.getElementById(inputId).value;
                            var lesson_id=document.getElementById("lesson").value;
                            window.scrollBy(0, 500);

                            document.getElementById("myTextarea").value = "@" + text + '\n';
                            document.getElementById("lesson_id").value = lesson_id;
                        }

                        
                    </script>
                    
                </div>
            </div>
        </div>

    </div>
</div>



@endsection