<!DOCTYPE html>
<html dir="ltr" lang="en" class=" js no-touch csstransitions"><head>
@include('layouts.head')
</head>
<body>
@include('layouts.mobile_menu')

<div class="wrapper mm-page mm-slideout" id="mm-0">
	<div class="preloader" style="display: none;"></div>
	@include('layouts.logo')		
		


	
	<section class="inner_page_breadcrumb">
	

	<!-- Main Header Nav -->
	@include('layouts.sign_up')
	
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
							<p class="text-center">Sizning akauntingiz bormi? <a class="text-thm" href="{{route('login')}}">Kirish</a></p>
						</div>
						<div class="details">
							<form action="#">
								<div class="form-group">
									<label for="name"><i class="fa fa-address-card" aria-hidden="true"></i> Ism Va Familyangiz</label>
							    	<input type="text" class="form-control" id="name" placeholder="Alisher Ergashev">
								</div>
								<!-- <div class="form-group">
									<label for="birthday"><i class="fa fa-calendar-o" aria-hidden="true"></i> Tug'ilgan Sana</label>
									<input type="date" class="form-control" id="birthday" name="birthday">
								</div>
								<label for="gender">Jinsingiz</label><br>
								<div id="gender" class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1"><i class="fa fa-male" aria-hidden="true"></i> Erkak</label>
									</div>
									<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2"><i class="fa fa-female" aria-hidden="true"></i> Ayol</label>
								</div><br><br>
								
								<div class="form-group">
									<label for="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Qayerdansiz?</label>
									<select class="form-control" id="location">
									<option>Boshqa</option>
									<option>Andijon viloyati</option>
									<option>Buxoro viloyati</option>
									<option>Fargʻona viloyati</option>
									<option>Xorazm viloyati</option>
									<option>Namangan viloyati</option>
									<option>Navoiy viloyati</option>
									<option>Qashqadaryo viloyati</option>
									<option>Qoraqalpogʻiston Respublikasi</option>
									<option>Samarqand viloyati</option>
									<option>Sirdaryo viloyati</option>
									<option>Surxondaryo viloyati</option>
									<option>Toshkent viloyati</option>
									</select>
								</div>								 -->
								 <div class="form-group">
								 <label for="email"><i class="fa fa-at" aria-hidden="true"></i> Pochta Manzilingiz</label>
							    	<input type="email" class="form-control" id="email" placeholder="alisher2002@gmail.com">
								</div>
								<div class="form-group">
									<label for="password"><i class="fa fa-key" aria-hidden="true"></i> Parol O'ylab Toping!</label>
							    	<input type="password" class="form-control" id="password" placeholder="parol">
								</div>
								<div class="form-group">
								<label for="password"><i class="fa fa-key" aria-hidden="true"></i> Parolni Qayta Kiriting!</label>
							    	<input type="password" class="form-control" id="password" placeholder="parolni qayta tering">
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