
	<div class="cs_row_four csv2">
		<div class="about_ins_container">
			<h4 class="aii_title">O'qituvchi haqida</h4><hr>
			<div class="about_ins_info">
				<div class="thumb"><img src="{{asset('files/images/teachers/')}}/{{$courses->teacher->avatar}}" alt="6.png"></div>
				</div>
				<div class="details">									
						<!-- <ul class="about_info_list">
							<li class="list-inline-item"><span class="flaticon-comment"></span> 12 Fikrlar </li>
								<li class="list-inline-item"><span class="flaticon-profile"></span> 14 O'quvchilar</li>
								<li class="list-inline-item"><span class="flaticon-play-button-1"></span> 5 Kurslar </li>
							</ul> -->
                        <h4>{{$courses->teacher->name}}</h4>
                            <p class="subtitle">{{$courses->teacher->subject}}</p>
                            <p class="mb25">{!!$courses->teacher->information!!} </p>
                            <p class="mb25">{{$courses->teacher->resume}}</p>														
	    	    </div>
		</div>
	</div>
