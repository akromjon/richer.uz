<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions"><head>
	@include('layouts.head')
</head>
<body style="background-color: #bebebe8f;">
	<div class="wrapper mm-page mm-slideout" id="mm-0">
		<div class="preloader" style="display: none;"></div>
		<!-- Modal Search Button Bacground Overlay -->
		<!-- Main Header Nav For Mobile -->
		<!-- /.mobile-menu -->	
		<div id="page" class="stylehome1 h0">
			<div class="mobile-menu">
				<div class="header stylehome1">
					<div class="main_logo_home2">
			            <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
			            <span>edumy</span>
					</div>
					<ul class="menu_bar_home2">
						<li class="list-inline-item">	                	
						</li>
						<li class="list-inline-item">
							<a href="#menu">
								<span></span>
							</a>
						</li>
					</ul>
				</div>
			</div>	
		</div>
		<!-- Inner Page Breadcrumb -->
		<section class="inner_page_breadcrumb">
		<!-- Main Header Nav -->
			@include('layouts.sign_up')
			@include('layouts.menu')	
		</section>	
		@yield('content')	
		@include('layouts.footer')
		</body>
		</html>