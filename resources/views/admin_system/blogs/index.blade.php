@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <a class="list-group-item list-group-item-action active" style="color:white;">
                <h6>Blog Categories</h6>
            </a>
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-hover bg-light table-responsive">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong> title</th>
                                <th class="border-top-0"><strong>icon</th>
                                <th class="border-top-0"><strong>url</th>
                                <th class="border-top-0"><strong>author</th>
                                <th class="border-top-0"><strong>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($categories as $key=> $category)
                                <td class="txt-oflo">{{$key+1}}</td>
                                <td class="txt-oflo">{{$category->title}}</td>
                                <td class="txt-oflocategories">{!!$category->icon!!}</i></td>
                                <td class="txt-oflo">/{{$category->slug}}</td>
                                <td class="txt-oflo">{{$category->user_id}}</td>
                                <td><a href="{{route('edit_blog_category',$category->id)}}" style="display: inline;" class="label btn btn-primary label-rounded">edit</a>
                                    <form style="display: inline;" method="POST" action="{{route('delete_blog_category',$category->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="delete_blog_categorysubmit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you going to delete course category!")) {
                                                txt = "You pressed OK!";
                                            } else {
                                                txt = "You pressed Cancel!";
                                            }

                                        }
                                    </script>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-6">
            <a class="list-group-item list-group-item-action active" style="color:white;">
                <h6>Add a blog category</h6>
            </a>
            <div class="card ">
                <div class="card-body">
                    <br>
                    <form action="{{route('create_blog_category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id">Category title</label>
                            <input id="id" placeholder="title" value="" class="form-control" type="text" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="icon">Category icon <a target="_open" href="https://fontawesome.com/v4.7.0/icons/">You can get icon codes from here [click me]</a></label>
                            <input id="icon" placeholder="example: <i class='fa fa-graduation-cap' aria-hidden='true'>" value="" class="form-control" type="text" name="icon" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Category URL (example: /texnologiya)</label>
                            <input id="url" placeholder="url" value="" class="form-control" type="text" name="slug" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">add a blog category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <a class="list-group-item list-group-item-action active" style="color:white;">
                <h6>Articles</h6>
            </a>
            <div class="card">
                <div class="card-body p-0 ">
                    <table class="table table-hover bg-light table-responsive">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong>title</th>
                                <th class="border-top-0"><strong>url</th>
                                <th class="border-top-0"><strong>cover</th>
                                <th class="border-top-0"><strong>content</th>
                                <th class="border-top-0"><strong>user_id</th>
                                <th class="border-top-0"><strong>category</th>
                                <th class="border-top-0"><strong>tags</th>
                                <th class="border-top-0"><strong>writer</th>
                                <th class="border-top-0"><strong>resource</th>
                                <th class="border-top-0"><strong>actions</th>
                                <th class="border-top-0"><strong>creation</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($categories as $category)
                                @foreach($category->articles->sortBy('id') as $key=> $article)
                                <td class="txt-oflo">{{$key+1}}</td>
                                <td class="txt-oflo" title="{{$article->title}}">{{ Illuminate\Support\Str::limit($article->title, 10) }}</td>
                                <td class="txt-oflo">/{{$article->slug}}</td>
                                <td class="txt-oflo"><img style="width: 50; height:50px;" src="{{$article->cover_picture}}" alt=""> </td>
                                <td class="txt-oflo">{{ Illuminate\Support\Str::limit($article->title, 10) }}</td>
                                <td class="txt-oflo">{{$article->user_id}}</td>
                                <td class="txt-oflo">{{$category->title}}</td>
                                <td class="txt-oflo">{{$article->tags}}</td>
                                <td class="txt-oflo">{{$article->writer}}</td>
                                <td class="txt-oflo">{{$article->rescourse}}</td>
                                <td><a href="{{route('edit_blog_article',$article->id)}}" style="display: inline; width:60px;" class="label btn btn-primary label-rounded">edit</a>
                                    <form style="display: inline; width:60px;" method="post" action="{{route('delete_blog_article',$article->id)}}">
                                    @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="myFunction()" class="btn btn-danger">delete</button>
                                    </form>
                                    <script>
                                        function myFunction() {
                                            var txt;
                                            if (confirm("Are you going to delete course category!")) {
                                                txt = "You pressed OK!";
                                            } else {
                                                txt = "You pressed Cancel!";
                                            }
                                        }
                                    </script>
                                </td>
                                <td class="txt-oflo">{{$article->created_at}}</td>
                                
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12">
            <a class="list-group-item list-group-item-action active" style="color:white;">
                <h6>Add a blog article</h6>
            </a>
            <div class="card">
                <div class="card-body">
                    <br>
                    <form action="{{route('create_blog_article')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id">Article title</label>
                            <input id="id" placeholder="title" value="" class="form-control" type="text" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Category URL (example: /study-in-usa)</label>
                            <input id="url" placeholder="url" value="" class="form-control" type="text" name="slug" required>
                        </div>                       
                        <div class="form-group">
                            <label for="cover"><strong>Upload cover picture</strong></label>
                            <input id="cover" class="form-control-file" type="file" name="cover_picture" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" placeholder="Post content" class="form-control" cols="5" rows="3" name="content" required>Content area</textarea>
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
                            <input id="tag" placeholder="tags" value="" class="form-control" type="text" name="tags" required>
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
                            <input id="tag" placeholder="www.kun.uz" value="" class="form-control" type="text" name="rescourse" required>
                        </div>
                        <div class="form-group">
                            <label for="des">Meta description</label>
                            <input id="des" placeholder="description" value="" class="form-control" type="text" name="meta_description" required>
                        </div>
                        <div class="form-group">
                            <label for="key">Meta keywords</label>
                            <input id="key" placeholder="description" value="" class="form-control" type="text" name="meta_keywords" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">add a blog category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection