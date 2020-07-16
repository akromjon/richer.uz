<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="onlayn talim bepul talim">
	<meta name="description" content="onlayn kurs bepul talim">
	<meta name="CreativeLayers" content="ATFN">
	<!-- css file -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style_home.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- particles stylesheet and scripts -->
	<link href="favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon">
	<link href="favicon.ico" sizes="128x128" rel="shortcut icon">			
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<style type="text/css">
	#particles-js{
	position:relative;
	}			
	</style>		   
	<!-- <link rel="stylesheet" href="{{asset('assets/css/responsive_home.css')}}"> -->
	<!-- Title -->
	<title>Online Course</title>
	<!-- Favicon -->
	
</head>

<body onmousedown='return true;' onselectstart='return false;'>
<script>
document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});</script>
	<div class="wrapper mm-page mm-slideout" id="mm-0">
		<div class="preloader" style="display: none;"></div>
		@include('layouts.sign_up')
		@include('layouts.menu')	
		<!-- Home Design -->
		<section class="home-three home3-overlay home3_bgi6">
		<div  id="particles-js"></div>
		<!-- scripts -->
		<script style="" src="{{asset('assets/js/particles.js')}}"></script>
		<script src="{{asset('assets/js/app.js')}}"></script>
		<!-- stats.js -->
		<script src="{{asset('assets/js/lib/stats.js')}}"></script>
		<script src="{{asset('assets/js/particles_top.js')}}"></script>
			<div class="container">			
				<div class="row posr">
					<div class="col-lg-12">
						<div style= "margin-top: -40%;"  class="home-text text-center">
							<h2 class="fz50">Biz bilan eng zo'r onlayn darslarni olish!</h2>
							<p class="color-white"><i style="font-size: 20px;" class="fa fa-home"></i> Uydan chiqmagan holda eng sifatli onlayn darslarni olish.</p>
							<a class="btn home_btn" href="#home">Onlayn darslarni boshlashga tayyormisiz?</a>
						</div>
					</div>
				</div>		
			</div>
		</section>
		<!--this is the content of home page-->
		@yield('content')		
		<!-- Our Footer -->
		@include('layouts.footer')
</body>
</html>
