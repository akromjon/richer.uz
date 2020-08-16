@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
      
        <!-- column -->
        <div class="col-12">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Blog category</h6>
        </a>
            <div class="card ">
                <div class="card-body">
                    <br>
                    <form action="{{route('update_blog_category',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="id">Category title</label>
                            <input id="id" placeholder="title" value="{{$category->title}}" class="form-control" type="text" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="icon">Category icon [you chose: {!!$category->icon!!}</i>] <a target="_open" href="https://fontawesome.com/v4.7.0/icons/">You can get icon codes from here [click me]</a></label>
                            <input id="icon" placeholder="example: <i class='fa fa-graduation-cap' aria-hidden='true'>" value="{{$category->icon}}" class="form-control" type="text" name="icon" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Category URL (example: /texnologiya)</label>
                            <input id="url" placeholder="url" value="{{$category->slug}}" class="form-control" type="text" name="slug" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">update a blog category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection