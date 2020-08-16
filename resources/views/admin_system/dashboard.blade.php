@extends('admin_system.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Email campaign chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Teachers</h5>
                    <h3 class="font-light"><span class="badge badge-pill badge-primary">{{$teachers->count()}}</span></h3>
                    <table class="table table-hover bg-light">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong>name</strong></th>
                                <th class="border-top-0"><strong>subject</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $key=> $teacher)
                            <tr>
                                <td class="txt-oflo"><strong>{{$key+1}}</strong></td>
                                <td class="txt-oflocategories">{{$teacher->name}}</td>
                                <td class="txt-oflo">{{$teacher->subject}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Courses</h5>
                    <h3 class="font-light"><span class="badge badge-pill badge-success">{{$courses->count()}}</span></h3>
                    <table class="table table-hover bg-light">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong>name</strong></th>                                
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($courses as $course)
                            <tr>
                                <td class="txt-oflo"><strong>{{$key+1}}</strong></td>
                                <td class="txt-oflocategories">{{$course->name}}</td>                                
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Lessons</h5>
                    <h3 class="font-light"><span class="badge badge-pill badge-dark">{{$lessons->count()}}</span></h3>
                    <table class="table table-hover bg-light">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong>name</strong></th>                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($lessons as $lesson)
                            <tr>
                                <td class="txt-oflo"><strong>{{$key+1}}</strong></td>
                                <td class="txt-oflocategories">{{$lesson->name}}</td>                                
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Quizes</h5>
                    <h3 class="font-light"><span class="badge badge-pill badge-primary">{{$questions->count()}}</span></h3>
                    <table class="table table-hover bg-light">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong>name</strong></th>                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($questions as $question)
                            <tr>
                                <td class="txt-oflo"><strong>{{$key+1}}</strong></td>
                                <td class="txt-oflocategories">{{$question->name}}</td>                                
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Articles</h5>
                    <h3 class="font-light"><span class="badge badge-pill badge-primary">{{$articles->count()}}</span></h3>
                    <table class="table table-hover bg-light">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0"><strong>name</strong></th>                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($articles as $lesson)
                            <tr>
                                <td class="txt-oflo"><strong>{{$key+1}}</strong></td>
                                <td class="txt-oflocategories">{{$lesson->title}}</td>                                
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Comments</h5>
                    <h3 class="font-light"><span class="badge badge-pill badge-primary">{{$comments}}</span></h3>
                    
                    <nav class="d-flex justify-content-center">
                    </nav>
                </div>
            </div>

        </div>
    </div>
    
</div>
@endsection