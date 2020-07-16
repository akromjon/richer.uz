<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions"><head>
@include('layouts.head')
</head>
<body>

<div class="wrapper mm-page mm-slideout" id="mm-0">
	<div class="preloader" style="display: none;"></div>


	
	<section class="inner_page_breadcrumb">

	<!-- Main Header Nav -->
	@include('layouts.menu')
		
	</section>

	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Darslarni boshlash uchun ro'hatdan o'ting</h3>
							<p class="text-center">Sizning akauntingiz bormi? <a class="text-thm" href="login.html">Kirish</a></p>
						</div>
						<div class="details">
							<form action="#">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName2" placeholder="foydalanuvchi">
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail3" placeholder="pochta manzil (akyprog@gmail.com)">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword4" placeholder="parol">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword5" placeholder="parolni qayta tering">
								</div>								
								<button type="submit" class="btn btn-log btn-block btn-thm2">Ro'yhatdan O'tish</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    @include('layouts.footer')
	</body>
	</html>