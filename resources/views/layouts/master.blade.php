<!DOCTYPE html>
<html dir="ltr" lang="uz" class=" js no-touch csstransitions"><head>
	@include('layouts.head')
</head>
<body style="background-color: #bebebe8f;">

@include('layouts.mobile_menu')



	<div class="wrapper mm-page mm-slideout" id="mm-0">
	
			<div class="preloader" style="display: none;"></div>
			@include('layouts.logo')	
			<!-- Inner Page Breadcrumb -->
			<section class="inner_page_breadcrumb">
			<!-- Main Header Nav -->
				@include('layouts.sign_up ')
				@include('layouts.menu')
					
			</section>
			
			<!-- Our LogIn Register -->
			@yield('content')			
	</div>	
@include('layouts.footer')
<script>
	function routeToBlog(){
		event.preventDefault();
		const CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content');
		$.ajax({	
			url:"{{url('/blog')}}",
			type:'get',
			data:{
				CSRF_TOKEN
			},
			success:function (data){
				$("#content").html(data)
			}

		})


	}
	
		
		</script>
		
		
</body>
</html>
