@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <a class="list-group-item list-group-item-action active" style="color:white;">
                    <h6>Users</h6>
                </a>
                <div class="card-body p-0 ">
                    <table class="table table-responsive table-hover bg-light">
                        <thead>
                            <tr class="btn-dark">
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">NAME</th>
                                <th class="border-top-0">EMAIL</th>
                                <th class="border-top-0">AVATAR</th>
                                <th class="border-top-0">ROLES</th>
                                <th class="border-top-0">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key=>$user)
                            <tr>
                                <td class="txt-oflo btn-dark">{{$key+1}}</td>
                                <td class="txt-oflo btn-primary">{{$user->name}}</td>
                                <td class="txt-oflo btn-success">{{$user->email}}</td>
                                <td class="txt-oflo btn-primary"><img style="width: 50; height:50px;" src="{{$user->avatar}}"></td>
                                <td class="txt-oflo btn-warning">{{implode(',',$user->roles()->pluck('name')->toArray())}}</td>
                                <td class="txt-oflo btn-dark">
                                    <a href="{{route('edit_user',$user->id)}}" class="label label-rounded float-left">
                                        <button type="submit" class="btn btn-success float-left">edit</button>
                                    </a>
                                    <form  method="POST" class="label label-rounded float-left" action="{{route('delete_user',$user->id)}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger float-left">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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

@endsection