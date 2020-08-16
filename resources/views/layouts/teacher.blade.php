<div class="cs_row_four csv2">
	<div class="about_ins_container">
		<h4 class="aii_title">O'qituvchi haqida</h4>
		<hr>
		<div class="about_ins_info">
			<div class="thumb"><img src="{{$courses->teacher->avatar}}" alt="teacher_avatar"></div>
		</div>
		<div class="details">
			<h4>{{$courses->teacher->name}}</h4>
			<p class="subtitle">{{$courses->teacher->subject}}</p>
			<p class="mb25">{!!$courses->teacher->information!!} </p>
			<p class="mb25">{{$courses->teacher->resume}}</p>
		</div>
	</div>
</div>