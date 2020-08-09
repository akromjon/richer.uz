<!DOCTYPE html>
<html dir="ltr" lang="uz" class=" js no-touch csstransitions">

<head>
    @include('layouts.head')
</head>

<body style="background-color: #bebebe8f;">
    @include('layouts.mobile_menu')
    <div class="wrapper mm-page mm-slideout" id="mm-0">
        <div class="preloader" style="display: none;"></div>
        @include('layouts.logo')
        <!-- Inner Page Breadcrumb -->
        <section class="inner_page_breadcrumb">
            <!-- Main Header Nav -->
            @include('layouts.sign_up ')
            @include('layouts.menu')
        </section>
        <section class="blog_post_container mb-3 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9" style="background-color: #dadada;">
                        <div style="background:#ffffff;" class="main_blog_post_content">
                            <div class="mbp_thumb_post">
                            <div class="container-fluid">
				<div class="main_content_container">
					<div class="row">						
						<div class="col-xl-12">
							<div class="row">
								
								<div class="col-lg-12">
									<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
										<h4 class="title float-left">Onlayn</h4>
										
									</nav>
								</div>
							</div>
							    <div class="row message_container">
                                    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 pr0 pl0">
                                        <div class="inbox_user_list">
                                            
                                            <ul>
                                                <li class="contact">
                                                    <a href="#">
                                                        <div class="wrap">
                                                            <span class="contact-status online"></span>
                                                            <img class="img-fluid" src="images/team/s1.jpg" alt="s1.jpg">
                                                            <div class="meta">
                                                                <h5 class="name">Vincent Porter</h5>
                                                                <p class="preview">I'm going to office.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-8 pr0 pl0">
                                        <div class="user_heading">
                                            <a href="#">
                                                <div class="wrap">
                                                    <span class="contact-status online"></span>
                                                    <img class="img-fluid" src="{{asset('assets/images/team/s5.jpg')}}" alt="s5.jpg">
                                                    <div class="meta">
                                                        <h5 class="name">Joanne Davies</h5>
                                                        <p class="preview">was online today at 11:43</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="last_seen_time text-center">
                                            <a href="#">November 5, 2018</a>
                                        </div>
                                        <div class="inbox_chatting_box">
                                            <ul class="chatting_content">
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:31</div>
                                                        <p>Hello, John!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:31</div>
                                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                                    </div>
                                                </li>
                                                <li class="media reply first">
                                                    <div class="media-body text-right">
                                                        <div class="date_time">Today, 10:35</div>
                                                        <p>Are we meeting today?</p>
                                                    </div>
                                                </li>
                                                <li class="media reply">
                                                    <div class="media-body text-right">
                                                        <div class="date_time">Today, 10:35</div>
                                                        <p>The project finally complete! Let's go to!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:45</div>
                                                        <p>Let's go!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:51</div>
                                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:31</div>
                                                        <p>Hello, John!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:31</div>
                                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                                    </div>
                                                </li>
                                                <li class="media reply first">
                                                    <div class="media-body text-right">
                                                        <div class="date_time">Today, 10:35</div>
                                                        <p>Are we meeting today?</p>
                                                    </div>
                                                </li>
                                                <li class="media reply">
                                                    <div class="media-body text-right">
                                                        <div class="date_time">Today, 10:35</div>
                                                        <p>The project finally complete! Let's go to!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:45</div>
                                                        <p>Let's go!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:51</div>
                                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                                    </div>
                                                </li>
                                                <li class="media reply first">
                                                    <div class="media-body text-right">
                                                        <div class="date_time">Today, 10:35</div>
                                                        <p>Are we meeting today?</p>
                                                    </div>
                                                </li>
                                                <li class="media reply">
                                                    <div class="media-body text-right">
                                                        <div class="date_time">Today, 10:35</div>
                                                        <p>The project finally complete! Let's go to!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:45</div>
                                                        <p>Let's go!</p>
                                                    </div>
                                                </li>
                                                <li class="media sent">
                                                    <span class="contact-status busy"></span>
                                                    <img class="img-fluid align-self-start mr-3" src="images/team/s6.jpg" alt="s6.jpg">
                                                    <div class="media-body">
                                                        <div class="date_time">Today, 10:51</div>
                                                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="message_input">
                                            <form class="form-inline">
                                                <input class="form-control" type="search" placeholder="Enter text here..." aria-label="Search">
                                                <button class="btn" type="submit">Send <span class="flaticon-paper-plane"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
							<div class="row mt50 mb50">
								<div class="col-lg-12">
									<div class="copyright-widget text-center">
										<p class="color-black2">Copyright Edumy © 2019. All Rights Reserved.</p>
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
                    <div class="col-lg-4 col-xl-3 pl10 pr10">
                        <div class="main_blog_post_widget_list">
                            <div class="blog_category_widget">
                                <ul class="list-group">
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-home" aria-hidden="true"> Bosh saxifa</i></span>
                                        </li>
                                    </a>
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"> Mening kurslarim</i></span>
                                        </li>
                                    </a>                                    
                                    <a href="http://127.0.0.1:8000/blog/category/Universitetlar">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <i class="fa fa-cog" aria-hidden="true"> Sozlamalar</i></span>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>


    @include('layouts.footer')


</body>

</html>