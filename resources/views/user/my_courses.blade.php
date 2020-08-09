@extends('layouts.master')
@section('content')
<section class="blog_post_container mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9" style="background-color: #dadada;">
                <div style="background:#ffffff;" class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="details" style="padding:25px; width: 100%;">
                                    <img style="border-radius:50%;width:110px; height:110px;" src="http://127.0.0.1:8000/assets/images/team/6.png" class="mr-3 mx-auto d-block" alt="review1.png"><br>
                                    <h3 style="text-align:center;" class="">Alisher Ergashev, Sizning Kurslaringiz</h3><br>

                                    <div class="row" id="masonry_abc" style="position: relative; height: 403.406px;">
                                        <div class="col-md-6 col-lg-4 col-xl-4	1" style="position: absolute; left: 0px; top: 0px;">

                                            <div class="top_courses">
                                                <div class="thumb">
                                                    <img class="img-whp" src="http://127.0.0.1:8000/assets/images/courses/t1.jpg" alt="t1.jpg">
                                                    <div class="overlay">
                                                        <a class="tc_preview_course" href="http://127.0.0.1:8000/courses/beginner">Darsni ko'rish</a>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="tc_content">
                                                        <p><i class="fa fa-graduation-cap" aria-hidden="true"></i> Akromjon Numonov</p>
                                                        <h5><a href="http://127.0.0.1:8000/courses/beginner">Beginner kursi</a></h5>
                                                    </div>
                                                    <div class="tc_footer">
                                                        <ul class="tc_meta float-left">
                                                            <li class="list-inline-item">
                                                                <a href="http://127.0.0.1:8000/courses/beginner">
                                                                    <i class="flaticon-profile"></i> 2
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="http://127.0.0.1:8000/courses/beginner#review">
                                                                    <i class="flaticon-comment"></i> 2
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tc_price float-right">bepul </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-4	2" style="position: absolute; left: 380px; top: 0px;">

                                            <div class="top_courses">
                                                <div class="thumb">
                                                    <img class="img-whp" src="http://127.0.0.1:8000/assets/images/courses/t1.jpg" alt="t1.jpg">
                                                    <div class="overlay">
                                                        <a class="tc_preview_course" href="http://127.0.0.1:8000/courses/html-css">Darsni ko'rish</a>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="tc_content">
                                                        <p><i class="fa fa-graduation-cap" aria-hidden="true"></i> Akromjon Numonov</p>
                                                        <h5><a href="http://127.0.0.1:8000/courses/html-css">HTML and CSS</a></h5>
                                                    </div>
                                                    <div class="tc_footer">
                                                        <ul class="tc_meta float-left">
                                                            <li class="list-inline-item">
                                                                <a href="http://127.0.0.1:8000/courses/html-css">
                                                                    <i class="flaticon-profile"></i> 2
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="http://127.0.0.1:8000/courses/html-css#review">
                                                                    <i class="flaticon-comment"></i> 0
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tc_price float-right">bepul </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.user_menu')
        </div>
    </div>
</section>
@endsection