<!DOCTYPE html>
<html dir="ltr" lang="uz" class=" js no-touch csstransitions"><head>
	@include('layouts.head')
</head>
<body style="background-color: #bebebe8f;">
	<div class="wrapper mm-page mm-slideout" id="mm-0">
			<div class="preloader" style="display: none;"></div>			
			<!-- Inner Page Breadcrumb -->
			<section class="inner_page_breadcrumb">
			<!-- Main Header Nav -->
				@include('layouts.sign_up ')
				@include('layouts.menu')	
			</section>
			<!-- Our LogIn Register -->
			@yield('content')
	</div>	
@include('layouts.footer')
</body>
</html>
