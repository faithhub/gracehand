
	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{ asset('web/logo/trans_logo_2.png') }}" alt="" style="width: 80px; height: auto;">
					<span style="color: #006600" class="">GraceHand</span>
					{{-- #ffb606 --}}
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item {{ request()->is('home*')  ? 'active' : '' }}"><a href="{{ url('home') }}">home</a></li>
						{{-- <li class="main_nav_item {{ request()->is('contact*')  ? 'active' : '' }}"><a href="{{ url('contact') }}">E-Book</a></li> --}}
						<li class="main_nav_item {{ request()->is('about*')  ? 'active' : '' }}"><a href="{{ url('about') }}">about us</a></li>
						<li class="main_nav_item {{ request()->is('courses*')  ? 'active' : '' }}"><a href="{{ url('courses') }}">Trainings</a></li>
						<li class="main_nav_item {{ request()->is('courses*')  ? 'active' : '' }}"><a href="{{ url('courses') }}">Partnership</a></li>
						<li class="main_nav_item {{ request()->is('courses*')  ? 'active' : '' }}"><a href="{{ url('courses') }}">Trainings</a></li>
						<li class="main_nav_item {{ request()->is('contact*')  ? 'active' : '' }}"><a href="{{ url('contact') }}">Conference</a></li>
						{{-- <li class="main_nav_item {{ request()->is('login*')  ? 'active' : '' }}"><a href="{{ url('login') }}">Sign In</a></li>
						<li class="main_nav_item {{ request()->is('register*')  ? 'active' : '' }}"><a href="{{ url('register') }}">Sign Up</a></li> --}}
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="{{ asset('web/images/phone-call.svg')}}" alt="">
			<span>+43 4566 7788 2457</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="{{ url('home') }}">Home</a></li>
					<li class="menu_item menu_mm"><a href="{{ url('about') }}">About us</a></li>
					<li class="menu_item menu_mm"><a href="{{ url('courses') }}">Courses</a></li>
					<li class="menu_item menu_mm"><a href="{{ url('contact') }}">Contact</a></li>
					<li class="menu_item menu_mm"><a href="{{ url('login') }}">Sign In</a></li>
					<li class="menu_item menu_mm"><a href="{{ url('register') }}">Sign up</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>