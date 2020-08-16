<header  class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu" style="z-index: 1000;">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle" style="display: none;">
		            <img class="nav_logo_img img-fluid" src="{{asset('assets/images/header-logo3.png" alt="header-logo3.png')}}">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="{{route('home_page')}}" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{asset('assets/images/header-logo.png')}}" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="{{asset('assets/images/header-logo2.png')}}" alt="header-logo2.png">
		            <span>richer.uz</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->	
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li class="last">
		                <a href="{{route('contact')}}"><span title="BIZ BILAN ALOQA QILISH" class="title"><i class="fa fa-list-alt" aria-hidden="true"></i> Biz bilan aloqa</span></a>
		            </li>
		            <li class="list_five">
		                <a href="{{route('blog')}}"><span title="YANGILIKLAR VA XABARLAR" class="title"><i class="fa fa-paper-plane" aria-hidden="true"></i> Blog</span></a>
		                
					</li>
					<?php
		            // <li class="list_four">
		            //     <a href=""><span title="ONLAYN TEST TOPSHIRISH" class="title">
		            //     	<i class="fa fa-check-square-o" aria-hidden="true"></i>onlayn Test</span></a>		                
					// </li>
					?>		            
		            <li class="list_two">
		                <a href="{{route('all_courses')}}">
		                	<span title="BARCHA KURSLAR" class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Kurslar</span>
		                </a>		                                	
		            </li>		           
		        </ul>
		    </nav>	    
		</div>
</header>