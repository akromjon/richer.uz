@extends('layouts.master')
@section('content')
<section style="padding: 50px;" class="our-contact">
	<div class="container">
		<h2>Biz bilan aloqa qilish</h2>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<div class="contact_localtion text-center">
					<div class="icon"><span class="flaticon-placeholder-1"></span></div>
					<h4>Bizning manzil</h4>
					<p>118 uy, Buloqboshi tumani, Andijon Viloyati, O'zbekiston .</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="contact_localtion text-center">
					<div class="icon"><span class="flaticon-phone-call"></span></div>
					<h4>Bizning Telefonlarimiz</h4>
					<p class="mb0">+998 99 000 53 03</p>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="contact_localtion text-center">
					<div class="icon"><span class="flaticon-email"></span></div>
					<h4>email</h4>
					<p>akyprog@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="row" align="justify">

			<div class="col-lg-5 form_grid">
				<h4 class="mb5">Xabar Jo'natish</h4>
				<p>Taklif, Shikoyatlar Yo'llash</p>
				<form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="exampleInputName">Ism va Familya</label>
								<input id="form_name" placeholder="masalan: Akromjon Numonov" name="form_name" class="form-control" required="required" type="text">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="exampleInputEmail">Sizning Pochta Manzilingiz</label>
								<input placeholder="Masalan: example@mail.com" id="form_email" name="form_email" class="form-control required email" required="required" type="email">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="exampleInputSubject">Nima Haqida?</label>
								<input id="form_subject" placeholder="Masalan: taklif" name="form_subject" class="form-control required" required="required" type="text">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Sizning Xabaringiz</label>
								<textarea placeholder="Masalan: Menga hamma kurslar yoqdi" id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
							</div>
							<div class="courses_all_btn home3">
								<button class="btn btn-transparent" href="#">Yana ko'rish</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection