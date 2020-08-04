<div class="col-lg-4 col-xl-3 pl10 pr10">
					<div class="main_blog_post_widget_list">
						<!-- <div class="blog_search_widget">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
							    	<button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
								</div>
							</div>
						</div> -->
						<div class="blog_category_widget">
							<ul class="list-group">
                           
								<h4 class="title"> Kategoriya <hr></h4>
                                @foreach($blog_categories as $blog)
								<a href="{{route('category_blog',$blog->title)}}">
								<li class="list-group-item d-flex justify-content-between align-items-center">
                                    {!!$blog->icon!!} {{$blog->title}}</i><span class="float-right"><span class="badge badge-pill badge-light">{{$blog->articles->count()}}</span></span>
								</li>
								<a>
                                
							  <?php
							  	// <!-- <i class="fa fa-globe" aria-hidden="true"> Hammasi</i><span class="float-right">6</span>
								//   </li> -->
								  
								//   <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
								// 	  <i class="fa fa-life-ring" aria-hidden="true"> Onlayn Academy </i><span class="float-right">1</span>
								//   </li>
								//   <li class="list-group-item d-flex justify-content-between align-items-center">
								// 	  <i class="fa fa-graduation-cap" aria-hidden="true"> Universitetlar</i> <span class="float-right">6</span>
								//   </li>
								//   <li class="list-group-item d-flex justify-content-between align-items-center">
								// 	  <i class="fa fa-laptop" aria-hidden="true"> Online Ta'lim</i>  <span class="float-right">16</span> --> 
							 
							 ?>
								
                                @endforeach
							</ul>
						</div>
						<div class="blog_recent_post_widget media_widget">
							<h4 class="title">So'ngi Yangiliklar</h4>
							<hr>
                            @foreach($articles as $article)
							<div class="media">
								<img class="align-self-start mr-3" src="{{asset('assets/images/blog/s1.jpg')}}" alt="s1.jpg">
								<div class="media-body">
                                <a href="{{route('news_view',$article->slug)}}"><h5 title="{{$article->title}}" class="mt-0 post_title">{{ Illuminate\Support\Str::limit($article->title, 50) }}</h5></a>
							    	<a href="#">{{$article->created_at->diffForHumans()}}.</a>
								</div>
							</div>
                            @endforeach
							<?php
						// 	<!-- <div class="media">
						// 	<img class="align-self-start mr-3" src="{{asset('assets/images/blog/s2.jpg')}}" alt="s2.jpg">
						// 	<div class="media-body">
						// 		<h5 class="mt-0 post_title">The Best Places to Start Your Travel</h5>
						// 		<a href="#">October 25, 2019.</a>
						// 	</div>
						// </div>
						// <div class="media">
						// 	<img class="align-self-start mr-3" src="{{asset('assets/images/blog/s3.jpg')}}" alt="s3.jpg">
						// 	<div class="media-body">
						// 		<h5 class="mt-0 post_title">The Top 25 London</h5>
						// 		<a href="#">October 25, 2019.</a>
						// 	</div>
						// </div> -->
							?>
						</div>
						<?php
					// 	<!-- <div class="blog_tag_widget">
					// 	<h4 class="title">Taglar</h4>
					// 	<ul class="tag_list">
					// 		<li class="list-inline-item"><a href="#">Ta'lim</a></li>
					// 		<li class="list-inline-item"><a href="#">Onlayn</a></li>
					// 		<li class="list-inline-item"><a href="#">Kitoblar</a></li>
					// 		<li class="list-inline-item"><a href="#">Ingliz tili</a></li>
					// 	</ul>
					// </div> -->
						?>
					</div>
				</div>