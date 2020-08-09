@extends('admin_system.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="list-group-item list-group-item-action active" style="color:white;">
            <h6>Add a Course</h6>
        </a>
        <!-- column -->
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{route('create_course')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_id">Select a teacher</label>
                            <select class="form-control" id="category_id" name="teacher_id">
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>                               
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">URL (courses/beginner)</label>
                            <input id="name" placeholder="url: beginner/(url)" value="" class="form-control" type="text" name="slug" required>
                        </div>                       

                        <div class="form-group">
                            <label for="category_id">Select a Course Category</label>
                            <select class="form-control" id="category_id" name="course_categories_id">
                                @foreach($teachers as $teacher)
                                @foreach($teacher->CourseCategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>   
                                @endforeach                            
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Course name (Beginner kursi)</label>
                            <input id="name" placeholder="course name" value="" class="form-control" type="text" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload image (image should be 307 x 200 (pixels) and no more than 50 kB)</label>
                            <input id="image" class="form-control-file" type="file" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content at least 5 paragraphs</label>
                            <textarea id="content" placeholder="Post content" class="form-control" cols="5" rows="3" name="information" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="video"><strong>Upload Cover Video (Size::no more than 20 MB)</strong></label>
                            <input id="video" class="form-control-file" type="file" name="intro" required>
                        </div>

                        <div class="form-group">
                            <label for="cost">Example: bepul, or  actual cost 49.000</label>
                            <input type="text" id="cost" placeholder="course cost" class="form-control" rows="2" name="cost" required>
                        </div>               
                        <div class="form-group">
                            <label for="language">Select Course Language</label>
                            <select class="form-control" id="language" name="language">
                                <option value="Ingliz tilida">Ingliz tili</option>
                                <option value="O'zbekcha">O'zbekcha</option>
                                <option value="Rus tilida">Rus tili</option>
                                <option value="Kores tilida">Kores tili</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="language">Select Course level</label>
                            <select class="form-control" id="language" name="level">
                                <option value="Boshlang'ich">Boshlang'ich</option>
                                <option value="O'rta">O'rta</option>
                                <option value="O'rta Yuqori">O'rta Yuqori</option>
                                <option value="Yuqori">Yuqori</option>
                                <option value="Eng yuqori">Eng Yuqori</option>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="duration">Duration [Only Numbers]</label>
                            <input id="duration" type="number" placeholder="Duration" class="form-control" rows="2" name="duration" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm">Select Confirmation</label>
                            <select class="form-control" id="confirm" name="confirm">
                                <option value="1">ALLOW</option>
                                <option value="0">DISALLOW</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Meta description</label>
                            <textarea id="description" placeholder="Description" class="form-control" cols="5" rows="3" name="meta_description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Meta Keywords</label>
                            <textarea id="keywords" placeholder="keywords" class="form-control" cols="5" rows="3" name="meta_keywords" required></textarea>
                        </div>                    

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection