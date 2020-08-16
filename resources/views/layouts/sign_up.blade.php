<div class="header_top home3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-xl-5">
				<ul class="home3_header_top_contact pull-left">
				</ul>
			</div>
			<div class="col-lg-7 col-xl-7">
				<ul class="sign_up_btn pull-right dn-smd mt15 home3">
					@if (Route::has('login'))
					<li class="list-inline-item">
						@auth
						<a href="{{route('user_main')}}" class="btn btn-md" data-toggle="modal">
							<i class="flaticon-user"></i>
							<span class="dn-md">Profil </span>
						</a>
						<a class="btn btn-md" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="fa fa-sign-out" aria-hidden="true"></i> Chiqish
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
						</form>
						@else
						<a href="{{route('login')}}" class="btn btn-md" data-toggle="modal">
							<i class="fa fa-sign-in" aria-hidden="true"></i>
							<span class="dn-md">Kirish </span>
						</a>
						@if (Route::has('register'))
						<a href="{{route('register')}}" class="btn btn-md" data-toggle="modal"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="dn-md">Ro'yhatdan O'tish</span></a>
						@endif
						@endauth

					</li>
					@endif
					<li class="list-inline-item">
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>