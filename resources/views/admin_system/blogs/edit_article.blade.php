@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">       
        <div class="col-12">
            <a class="list-group-item list-group-item-action active" style="color:white;">
                <h6>Edit Article</h6>
            </a>
            <div class="card ">
                <div class="card-body">
                    <br>
                    <form action="{{route('update_blog_article',$article->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="id">Title</label>
                            <input id="id" placeholder="title" value="{{$article->title}}" class="form-control" type="text" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="url">article URL (example: /studt-in-usa)</label>
                            <input id="url" placeholder="url" value="{{$article->slug}}" class="form-control" type="text" name="slug" required>
                        </div>
                        <div class="form-group">
                            <label for="cover"><strong>Upload cover picture</strong></label>
                            <input id="cover" class="form-control-file" type="file" name="cover_picture" >
                            <input id="cover" value="{{$article->cover_picture}}" class="form-control-file" type="hidden" name="cover_picture" >
                        </div>
                       <strong>Picture:</strong>  <br><img style="width: 300; height:300px;" src="{{$article->cover_picture}}">
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" placeholder="Post content" class="form-control" cols="5" rows="3" name="content" required>{{$article->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="language">Select Blog Category</label>
                            <select class="form-control" id="language" name="blog_id">
                               @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                               @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tag">Tags [Onlayn kurslar, bepul kurslar, mening kurslarim, ingliz tili kurslari]</label>
                            <input id="tag" placeholder="tags" value="{{$article->tags}}" class="form-control" type="text" name="tags" required>
                        </div>
                        <div class="form-group">
                            <label for="language">Select a writer</label>
                            <select class="form-control" id="language" name="writer">
                                @foreach($teachers as $teacher)
                                <option value="{{$teacher->name}}">{{$teacher->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tag">Resource</label>
                            <input id="tag" placeholder="www.kun.uz" value="{{$article->rescourse}}" class="form-control" type="text" name="rescourse" required>
                        </div>
                        <div class="form-group">
                            <label for="des">Meta description</label>
                            <input id="des" placeholder="description" value="{{$article->meta_description}}" class="form-control" type="text" name="meta_description" required>
                        </div>
                        <div class="form-group">
                            <label for="key">Meta keywords</label>
                            <input id="key" placeholder="description" value="{{$article->meta_keywords}}" class="form-control" type="text" name="meta_keywords" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">update a blog article</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection