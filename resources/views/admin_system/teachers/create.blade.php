@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Add a teacher</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('create_teacher')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id">Teacher ID</label>
                            <input id="id" placeholder="teacher ID" value="" class="form-control" type="number" name="teacher_id" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" placeholder="teacher name" value="" class="form-control" type="text" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="username">username</label>
                            <input id="username" placeholder="teacher username" value="@" class="form-control" type="text" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload image (image should be 120 x 120 pixels)</label>
                            <input id="image" class="form-control-file" type="file" name="avatar" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Information about a teacher</label>
                            <textarea id="content" placeholder="Post content" class="form-control" cols="5" rows="3" name="information" required></textarea>
                        </div>


                        <div class="form-group">
                            <label for="category_id">Select Category</label>
                            <select class="form-control" id="category_id" name="confirm" required>
                                <option value="1">Confirm [1]</option>
                                <option value="0">Disconfirm [0]</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="address">address</label>
                            <textarea id="address" placeholder="teacher address" class="form-control" rows="2" name="address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="id">Teacher phone number</label>
                            <input id="phone_number" placeholder="teacher phone number" value="" class="form-control" type="number" name="phone_number" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Teacher email</label>
                            <input id="email" placeholder="Teacher email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Select Subject</label>
                            <select class="form-control" id="category_id" name="subject">
                                <option value="english">Ingliz tili</option>
                                <option value="history">Tarix</option>
                                <option value="IELTS">IELTS</option>
                                <option value="grammar">Grammar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Resume of a teacher</label>
                            <textarea id="content" placeholder="Resume" class="form-control" cols="5" rows="3" name="resume" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        <input type="hidden" value="{{Session::token()}}" name="_token">



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection