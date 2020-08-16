<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions">
<head>
	@include('layouts.head')
	@yield('seo')
	
	
</head>

<body style="background-color: #dadada;">
		@include('layouts.mobile_menu')
		@include('layouts.logo')	
		@include('layouts.sign_up')
		@include('layouts.menu')	
		<!-- Home Design -->
	
		<section class="home-three home3-overlay home3_bgi6">		
			<div class="container">			
				<div class="row posr">
					<div class="col-lg-12">
						<div   class="home-text text-center">
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
