@extends('layouts.master')
@section('seo')
<title>Ro'yxatdan O'tish</title>
<meta property="og:title" content="Richer.uz | Ro'yxatdan O'tish">
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
			<div class="col-sm-12 col-lg-7 offset-lg-3 mt-2">
				<div class="sign_up_form inner_page">
					<div class="heading">
						<h3 class="text-center">Darslarni boshlash uchun ro'hatdan o'ting</h3>
						<p class="text-center">Sizning akauntingiz bormi? <a class="text-thm" href="{{route('login')}}">Kirish</a></p>
					</div>
					<div class="details">
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="form-group">
								<label for="name"><i class="fa fa-address-card" aria-hidden="true"></i> Ism Va Familyangiz</label>
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="email"><i class="fa fa-at" aria-hidden="true"></i> Pochta Manzilingiz</label>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="password"><i class="fa fa-key" aria-hidden="true"></i> Parol O'ylab Toping!</label>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="password"><i class="fa fa-key" aria-hidden="true"></i> Parolni Qayta Kiriting!</label>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">	
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