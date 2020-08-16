@extends('layouts.master')
@section('seo')
<title>Kurslar</title>
<meta property="og:title" content="Kurslar">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:description" content="">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index, follow">
<!--- this tags for ceo  end   -->
@endsection
@section('content')
<section class="home3_top_course pb0 pt0" style="margin-top: 25px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="options" class="alpha-pag full">
                    <div class="option-isotop">
                        <ul id="filter" class="option-set" data-option-key="filter">
                            <li class="list-inline-item">
                                <h4><a href="#all" data-option-value="*" class="selected">Barcha kurslar</a></h4>
                            </li>
                            @foreach($course_categories as $course_category)
                            <li class="list-inline-item">
                                <a href="#{{ $course_category->id }}" data-option-value=".{{ $course_category->id }}">{{ $course_category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @include('layouts.courses')
            </div>
        </div>

    </div>
</section>
@endsection