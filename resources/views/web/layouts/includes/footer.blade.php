<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 mr-auto col-sm-6 col-md-6">
				<div class="widget footer-widget mb-5 mb-lg-0">
					<div class="footer-logo">
					<h5 class="widget-title" style="font-size: 35px;">{{config("settings")->website_name}}</h5>
					
						<!-- <img src="assets/images/dark-logo.png" alt="EduHash" class="img-fluid"> -->
					</div>
					<p class="mt-3" style="text-align: justify;">
					{!!config("settings")->short_desc!!}
					</p>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"> <a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-sm-6 col-md-6 col-xl-2">
				<div class="footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">Explore</h5>
					<ul class="list-unstyled footer-links">
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact us</a></li>
						<li><a href="#">Terms & Condition</a></li>
						<li><a href="#">Privacy policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-md-6 col-xl-2">
				<div class="footer-widget mb-5 mb-lg-0">
					<h5 class="widget-title">Courses</h5>
					<ul class="list-unstyled footer-links">
						<li><a href="#">SPSS</a></li>
						<li><a href="#">Data Analysis</a></li>
						<li><a href="#">Research Analysis</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-md-6 col-xl-2">
				<div class="footer-widget footer-links mb-5 mb-lg-0">
					<h5 class="widget-title">Address </h5>

					<ul class="list-unstyled">
						<li>{{config("settings")->phone}}</li>
						<li><a href='mailto:{{config("settings")->email}}' class="__cf_email__">{{config("settings")->email}}</a></li>
						<li>{{config("settings")->address}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-btm">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="copyright text-lg-left text-center">
						<p>© Copyright EduHash Template All rights reserved.Crafted by <a href="https://amaofaith.com/">Cierto</a> </p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<ul class="list-inline footer-contact  text-lg-right text-center mt-4 mt-lg-0">
						<li class="list-inline-item"><a href="#">Home</a></li>
						<li class="list-inline-item"><a href="#">Courses</a></li>
						<li class="list-inline-item"><a href="#">Blog</a></li>
						<li class="list-inline-item"><a href="#">Support</a></li>
						<li class="list-inline-item"><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>