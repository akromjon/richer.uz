@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Edit a user role</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">

                <div class="card-body">
                    <form action="{{route('update_user',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="category_id">Select a Role</label>
                            <select class="form-control" id="category_id" name="roles">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection