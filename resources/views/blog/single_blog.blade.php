@extends('layouts.master')
@section('content')
<section class="blog_post_container " style="margin-top: 15px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-9" style="background-color: #dadada;">
				<div style="background:#ffffff;" class="main_blog_post_content">
					<div class="mbp_thumb_post">
						<div class="thumb">
							<img class="img-fluid" src="{{asset('assets/images/blog/12.jpg')}}" alt="12.jpg">
							<div class="tag">Onlayn Ta'lim</div>
							<div class="post_date">
								<span>{{$article->created_at->diffForHumans()}}</span>
							</div>
						</div>
						<div class="details" style="padding:25px;">
							<h3>{{$article->title}}</h3>
							<ul class="post_meta">
								<li><a href="#"><span class="flaticon-profile"></span></a></li>
								<li><a href="#"><span>Tayyorladi: {{$article->user->name}}</span></a></li>
								<li><a href="#"><span class="flaticon-comment"></span></a></li>
								<li><a href="#"><span>{{$article->comments->count()}} comments</span></a></li>
							</ul>
							<p>{{$article->content}}</p>
						</div>
					</div>
				</div>
			</div>
			@include('layouts.blog_right_navbar')
			<div class="col-lg-8 col-xl-9" style="background-color:#dadada; margin-top: 25px;">
				<div class="cs_row_six csv2">
					<div class="sfeedbacks">
						@foreach($article->comments as $comment)
						<div class="mbp_pagination_comments">
							<div class="mbp_first media csv1">
								<img src="{{asset('assets/images/team/6.png')}}" class="mr-3" alt="review1.png">
								<div class="media-body">
									<h4 class="sub_title mt-0">{{$comment->name}}
										<span class="sspd_review float-right"></span>
									</h4>
									<a class="sspd_postdate fz14" href="#">{{$comment->created_at->diffForHumans()}}</a>
									<p class="fz15 mt20">{{$comment->content}}.</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-xl-9" style="background-color:#dadada;  margin-top: 0px;">
				<div class="cs_row_seven csv2">
					<div class="sfeedbacks">
						<div class="mbp_comment_form style2 pb0">
							<h4>Fikr bildirish </h4>
							<form action="{{route('comment_article')}}" method="POST" class="comments_form">
								@csrf
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Fikr yoki taklif</label>
									<input type="hidden" name="article_id" value="{{$article->id}}">
									<input type="hidden" name="user_id" value="1">
									<input type="hidden" name="name" value="Akrom">
									<textarea name="content" placeholder="Fikr yoki taklif" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
								</div>
								<button type="submit" class="btn btn-thm">Jo'natish<span class="flaticon-right-arrow-1"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection