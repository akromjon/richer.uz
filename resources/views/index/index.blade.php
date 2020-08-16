@extends('index_layouts.index')
@section('seo')
<title>Onlayn Kurslar</title>
<meta property="og:title" content="Onlayn Kurslar">
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
<section style="background-color: #dadada;" class="home3_top_course pb0 pt0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="options" class="alpha-pag full">
					<div class="option-isotop">

					</div>
				</div>
				<!-- FILTER BUTTONS -->
				@include('layouts.courses')
			</div>
		</div>
	</div>
</section>


<section class="divider_home2 parallax bg-img2" data-stellar-background-ratio="0.3" style="background-position: 50% -97.7594px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="color-white mt0">Bizning platformaning qulay va afzal taraflari</h3>
					<p class="color-white">Sifatli onlayn ta'lim!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div title="Siz uydan chiqmagan holda bepul kurslarni olishingiz mumkin" class="col-sm-6 col-lg-3 text-center">
				<div class="funfact_one">
					<div class="icon"><span class="flaticon-student-3"></span></div>
					<div class="details">
						<h5>Uydan chiqmasdan</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 text-center">
				<div class="funfact_one">
					<div class="icon"><span class="flaticon-cap"></span></div>
					<div class="details">
						<h5>Eng sifatli kurslar</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 text-center">
				<div class="funfact_one">
					<div class="icon"><span class="flaticon-jigsaw"></span></div>
					<div class="details">
						<h5>Onlayn quizlar</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3 text-center">
				<div class="funfact_one">
					<div class="icon"><span class="flaticon-online-learning"></span></div>
					<div class="details">
						<h5>Onlayn talim</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home6_about pt35 bgc-f9 mb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h3 class="mt0">Yangi Bloglar</h3>
					<p>Qaynoq xabarlarni biz bilan o'qing!</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($articles->shuffle()->take(3) as $article)
			<div class="col-sm-6 col-lg-6 col-xl-3">
				<div class="blog_grid_post mb30">
					<div class="thumb">
						<img class="img-fluid" src="{{$article->cover_picture}}" alt="cover picture">
						<div class="tag">{{$article->blog->title}}</div>
						<div class="post_date">
							<h2></h2> <span>{{$article->created_at->diffForHumans()}}</span>
						</div>
					</div>
					<div class="details">
						<a href="{{route('news_view',$article->slug)}}">
							<h3 title="{{$article->title}}">{{ Illuminate\Support\Str::limit($article->title, 50) }}</h3>
						</a>
						<ul class="post_meta">
							<li><a href="#"><span class="flaticon-clock"></span></a></li>
							<li><a href="{{route('news_view',$article->slug)}}"><span>{{$article->writer}}</span></a></li>
							<li><a href="#"><span class="flaticon-chat"></span></a></li>
							<li><a href="{{route('news_view',$article->slug)}}"><span><i class="fa fa-commenting-o" aria-hidden="true"> {{$article->comments->count()}} </i> fikrlar</span></a></li>
						</ul>
						<p>{!! Illuminate\Support\Str::limit($article->content, 50) !!}</p><br>
						<a href="{{route('news_view',$article->slug)}}"><button type="submit" class="btn btn-dark">Davomi ...</button></a>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-lg-12 offset-lg-12">
				<div class="courses_all_btn home3 text-center">
					<button class="btn btn-transparent" href="#">Yana ko'rish</button>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- School category courses -->
<?php
// <section id="our-newslatters" class="our-newslatters home7">
// 	<div class="container">
// 		<div class="row">
// 			<div class="col-lg-6 offset-lg-3">
// 				<div class="main-title home6 text-center">
// 					<h3 class="mt0">Bizning saytga a'zo bo'lish</h3>
// 					<p>Bizdan yangiliklar va foydali narslarni bilib olish?.</p>
// 				</div>
// 				<div class="footer_apps_widget_home1 home7">
// 					<form class="form-inline mailchimp_form">
// 						<input type="tel" id="validationDefault01" class="form-control" placeholder="Telefon raqam">
// 						<button type="submit" class="btn-lg btn-thm2 dbxshad">Hoziroq <span class="flaticon-right-arrow-1"></span></button>
// 					</form>
// 				</div>
// 			</div>
// 		</div>
// 	</div>
// </section>
?>

@endsection