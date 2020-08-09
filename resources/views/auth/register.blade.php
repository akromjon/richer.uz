@extends('layouts.master')
@section('content')
<section class="our-log bgc-fa">
		<div class="container">		
			<div class="row">
				<div class="col-sm-12 col-lg-7 offset-lg-3 mt-2">
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
@endsection