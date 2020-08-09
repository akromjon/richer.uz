@extends('layouts.master')
@section('seo')
<!--- this tags for ceo     -->
<meta name="description" content="Uydan chiqmasdan turib onlayn ingliz tili kurslarini olish">
<meta name="keywords" content="ingliz tilini o'rganish, dasturlash tillilarini o'rganish, elementart kursi, bepul ta'lim, onlayn ta'lim, sifatli ta'lim">
<meta property="og:title" content="Onlayn kurslar. Uydan chiqmasdan o'rganish">
<!-- <meta property="og:description" content="long text">

<meta property="og:type" content="article">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:image" content="the thumnail is here">
<meta property="og:site_name" content="Richer.uz">

<meta property="og:type" content="video">
<meta property='og:video' content='url'>
<meta property="og:video:height" content="640" />
<meta property="og:video:width" content="385" /> -->
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