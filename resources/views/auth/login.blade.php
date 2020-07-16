<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions">
<head>
@include('layouts.head')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="wrapper mm-page mm-slideout" id="mm-0">
	<div class="preloader" style="display: none;"></div>
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb"><!-- Main Header Nav -->
	@include('layouts.menu')		
	</section>
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form action="#">
							<div class="heading">
								<h3 class="text-center">	Akauntga kirish</h3>
								<p class="text-center">Sizda Akaunt yo'qmi? <a class="text-thm" href="{{route('register')}}">Ro'yhatdan O'tish!</a></p>
							</div>
							 <div class="form-group">
						    	<input type="email" class="form-control" id="exampleInputEmail3" placeholder="pochta manzilingiz">
							</div>
							<div class="form-group">
						    	<input type="password" class="form-control" id="exampleInputPassword4" placeholder="parol">
							</div>
							<div class="form-group custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="exampleCheck3">
								<label class="custom-control-label" for="exampleCheck3">Eslab qolish</label>
								<a class="tdu btn-fpswd float-right" href="#">Parolni qayta tiklash?</a>
							</div>
							<button type="submit" class="btn btn-log btn-block btn-thm2">Kirish</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@include('layouts.footer')
</body>
</html>