@extends('index_layouts.index')
    @section('content')    
        <section class="home3_top_course pb0 pt0">
                    <div class="container">			
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="options" class="alpha-pag full">
                                    <div class="option-isotop">							
                                    </div>
                                </div>
                                <!-- FILTER BUTTONS -->
                                @include('layouts.courses')
                            </div>
                        </div>			
                    </div>
        </section>
        <section class="divider_home2 parallax bg-img2" data-stellar-background-ratio="0.3" style="background-position: 50% -97.7594px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h3 class="color-white mt0">Bizning platformaning qulay va afzal taraflari</h3>
							<p class="color-white">Sifatli onlayn ta'lim!</p>
						</div>
					</div>
				</div>			
				<div class="row mt40 text-center">				
							<div class="col-sm-6 col-lg-3">
								<div class="home_icon_box home6">
									<div class="icon"><span class="flaticon-student"></span></div>
									<p>Uydan chiqmagan holda</p>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="home_icon_box home6">
									<div class="icon"><span class="flaticon-book"></span></div>
									<p>Bizning onlayn kitoblar</p>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="home_icon_box home6">
									<div class="icon"><span class="flaticon-global"></span></div>
									<p>Siz istagan joyda</p>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="home_icon_box home6">
									<div class="icon"><span class="flaticon-first"></span></div>
									<p>Muafaqiyatga erishish</p>
								</div>
							</div>
				</div>			
			</div>
		</section>
		<!-- School category courses -->
		<section id="our-newslatters" class="our-newslatters home7">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title home6 text-center">
							<h3 class="mt0">Bizning saytga a'zo bo'lish</h3>
							<p>Bizdan yangiliklar va foydali narslarni bilib olish?.</p>
						</div>
						<div class="footer_apps_widget_home1 home7">
							<form class="form-inline mailchimp_form">
								<input type="tel" id="validationDefault01" class="form-control" placeholder="Telefon raqam">
								<button type="submit" class="btn-lg btn-thm2 dbxshad">Hoziroq <span class="flaticon-right-arrow-1"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
    @endsection
