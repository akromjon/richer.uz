@extends('layouts.master')
@section('content')
<section class="our-log bgc-fa">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6 offset-lg-3">
				<div class="login_form inner_page">
					<form action="#">
						<div class="heading">
							<h3 class="text-center"> Akauntga kirish</h3>
							<p class="text-center">Sizda Akaunt yo'qmi? <a class="text-thm" href="{{route('register')}}">Ro'yhatdan O'tish!</a></p>
						</div>
						<div class="form-group">
							<label for="email"><i class="fa fa-at" aria-hidden="true"></i> Emailingiz</label>
							<input type="email" class="form-control" id="email" placeholder="Emailni tering">
						</div>
						<div class="form-group">
							<label for="password"><i class="fa fa-key" aria-hidden="true"></i> Parol</label>
							<input type="password" class="form-control" id="password" placeholder="Parolni tering">
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
@endsection