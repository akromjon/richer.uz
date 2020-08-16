@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Add a course Category</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('create_category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" placeholder="course category name" value="" class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Select a teacher</label>
                            <select class="form-control" id="category_id" name="teacher_id">
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection