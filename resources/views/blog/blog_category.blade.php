@extends('layouts.master') 
@section('seo')
<title>Yangiliklar | Bloglar</title>
<meta property="og:title" content="Yangiliklar | Bloglar">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:description" content="Yangiliklar, blogglar yoki ta'lim haqida so'ngi xabarlar bilan tanishing">
<meta name="description" content="Yangiliklar, blogglar yoki ta'lim haqida so'ngi xabarlar bilan tanishing">
<meta name="keywords" content="Universitetlar, Texnologiya, Onlayn Ta'lim, Onlayn Kurslar, Ingliz tili, Matematika, Tarix, Ona tili, Adabiyot, Video Kurslar">
<meta name="robots" content="index, follow">
<!--- this tags for ceo  end   -->
@endsection
@section('content') 
<section class="blog_post_container " style="margin-top: 15px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-9">
				<div class="main_blog_post_content">
					@foreach($blog->articles as $article)
					<div class="row">
						<div class="col-xl-5 pr15-xl pr0use">
							<div class="blog_grid_post mb35">
								<a href="{{route('news_view',$article->slug)}}">
								<div class="thumb">
									<img class="img-fluid w100" src="{{$article->cover_picture}}" alt="7.jpg">
									<div class="tag">{{$blog->title}}</div>
									<div class="post_date">
										<h2></h2> <span>{{$article->created_at->diffForHumans()}}</span>
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-xl-7 pl15-xl pl0">
							<div class="blog_grid_post style2 mb35">
								<div class="details">
									<a href="{{route('news_view',$article->slug)}}">
										<h3>{{$article->title}}</h3>
									</a>
									<ul class="post_meta">
										<li><a href="{{route('news_view',$article->slug)}}"><span class="flaticon-clock"></span></a></li>
										<li><a href="{{route('news_view',$article->slug)}}"><span>{{$article->writer}}</span></a></li>
										<li><a href="{{route('news_view',$article->slug)}}"><span class="flaticon-chat"></span></a></li>
										<li><a href="{{route('news_view',$article->slug)}}"><span> <i class="fa fa-commenting-o" aria-hidden="true"> {{$article->comments->where('confirm', '1')->count()}}</i> fikrlar</span></a></li>
									</ul>
									<p>{!! Illuminate\Support\Str::limit($article->content, 160) !!}</p><br>
									<a href="{{route('news_view',$article->slug)}}"><button href="" type="submit" class="btn btn-dark">Davomi ...</button></a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="row">
						<div class="row mb-sm-3 mx-auto">
							<div class="col-lg-12 offset-lg-4 ">
								<div class="courses_all_btn home3 text-center">
									<a  class="btn btn-transparent" href="#">Yana ko'rish</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('layouts.blog_right_navbar')
		</div>
	</div>
	</section>
	@endsection 