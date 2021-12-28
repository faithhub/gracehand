<header>
  <!-- <div class="header-top ">
    <div class="container-fluid container-padding">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <p>Are you interested in Joining program? <a href="#">Contact me.</a></p>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="header-right float-lg-right">
            <a href="#">Join Now</a>
            <a href="#">Courses</a>
            <a href="#">Membership Login</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Main Menu Start -->
  <div class="site-navigation main_menu menu-transparent" id="mainmenu-area">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid container-padding">
        <a class="navbar-brand" href="{{ url('/') }}">
          <!-- <img src="assets/images/dark-logo.png" alt="Eduhash" class="img-fluid"> -->

          @if(config("settings")->website_logo)
          <img src='data:image/;base64,{{ substr(config("settings")->website_logo, 5)}}' alt="GraceHand Logo" class="img-fluid" style="max-width: 90px;">
          @else
          <img src='{{ asset("uploads/logo/logo.png") }}' alt="GraceHand Logo" class="img-fluid" style="max-width: 90px;">
          @endif
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarMenu">

          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
              <a href="{{ route('home') }}" class="nav-link {{ request()->is('/*')  ? 'active' : '' }}">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('about') }}" class="nav-link {{ request()->is('about')  ? 'active' : '' }}">
                About us
              </a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ request()->is('training')  ? 'active' : '' }}" href="#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Training<i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbar3">
                <a class="dropdown-item " href="">
                  Short Time Trainings
                </a>
                <a class="dropdown-item " href="">
                  Full Package Training
                </a>
              </div>
            </li> -->

            <li class="nav-item ">
              <a href="{{ route('trainings') }}" class="nav-link {{ request()->is('trainings')  ? 'active' : '' }}">
                Trainings
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ url('partnership') }}" class="nav-link {{ request()->is('partnership')  ? 'active' : '' }}">
                Partnership
              </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages<i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbar3">
                <a class="dropdown-item " href="login.html">
                  Login
                </a>
                <a class="dropdown-item " href="register.html">
                  Register
                </a>
                <a class="dropdown-item " href="cart.html">
                  cart
                </a>
                <a class="dropdown-item " href="checkout.html">
                  checkout
                </a>
                <a class="dropdown-item " href="error.html">
                  404
                </a>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog<i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbar3">
                <a class="dropdown-item " href="blog.html">
                  Blog
                </a>
                <a class="dropdown-item " href="blog-single.html">
                  Blog Single
                </a>
              </div>
            </li> -->

            <li class="nav-item ">
              <a href="{{ url('contact') }}" class="nav-link {{ request()->is('contact')  ? 'active' : '' }}">
                Contact
              </a>
            </li>
          </ul>

          <div class="d-flex align-items-center">
            <div class="header-socials social-links d-none d-lg-none d-xl-block">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>

            <form action="#" class="header-form ml-3">
              <input type="text" class="form-control" placeholder="search">
              <i class="fa fa-search"></i>
            </form>
          </div>

        </div> <!-- / .navbar-collapse -->
      </div> <!-- / .container -->
    </nav>
  </div>
</header>