@extends('layouts.master')
@section('seo')
<title>Kirish</title>
<meta property="og:title" content="Richer.uz | Kirish">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:description" content="Yangiliklar, blogglar yoki ta'lim haqida so'ngi xabarlar bilan tanishing">
<meta name="description" content="Yangiliklar, blogglar yoki ta'lim haqida so'ngi xabarlar bilan tanishing">
<meta name="keywords" content="Universitetlar, Texnologiya, Onlayn Ta'lim, Onlayn Kurslar, Ingliz tili, Matematika, Tarix, Ona tili, Adabiyot, Video Kurslar">
<meta name="robots" content="index, follow">
<!--- this tags for ceo  end   -->
@endsection
@section('content')
<section class="our-log bgc-fa">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6 offset-lg-3">
				<div class="login_form inner_page">
					<form method="POST" action="{{route('login')}}">
						@csrf
						<div class="heading">
							<h3 class="text-center"> Akauntga kirish</h3>
							<p class="text-center">Sizda Akaunt yo'qmi? <a class="text-thm" href="{{route('register')}}">Ro'yhatdan O'tish!</a></p>
						</div>
						<div class="form-group">
							<label for="email"><i class="fa fa-at" aria-hidden="true"></i> Emailingiz</label>
							<input value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Emailni tering" required autocomplete="email" autofocus>
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password"><i class="fa fa-key" aria-hidden="true"></i> Parol</label>
							<input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Parolni tering" required autocomplete="current-password">
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group custom-control custom-checkbox">
							<input type="checkbox" name="remember" class="custom-control-input" id="exampleCheck3" {{ old('remember') ? 'checked' : '' }}>
							<label class="custom-control-label" for="exampleCheck3">Eslab qolish</label>
							@if (Route::has('password.request'))
							<a class="tdu btn-fpswd float-right" href="{{ route('password.request') }}">Parolni qayta tiklash?</a>
							@endif
						</div>
						<button type="submit" class="btn btn-log btn-block btn-thm2">Kirish</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection