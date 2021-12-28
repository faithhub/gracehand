@extends('web.layouts.app')
@section('content')
<!-- Banner Section Start -->
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-7">
                <div class="banner-content text-center">
                    <span class="subheading">Welcome to</span>
                    <h1><span class="font-weight-normal">GraceHands</span> Research Institute</h1>
                    <h3 class="text-white">Institute driven with passion to affect lives in the world of data analytics and research</h3>
                    <a href="#" class="btn btn-main mr-2">our Trainings </a>
                    <a href="#" class="btn btn-tp">Services </a>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section end -->

<!-- Feature section start -->
<section class="feature section-padding pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading center-heading">
                    <span class="subheading">Maximize your potentials</span>
                    <h3>Learn the secrets to Life Success</h3>
                    <p>The ultimate planning solution for
                        busy women who want to reach their personal goals</p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-3 col-md-6 col-xl-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-flag"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Expert Teacher</h4>
                        <p>Develop skills for career of various majors including computer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xl-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-layers"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Self Development</h4>
                        <p>Develop skills for career of various majors including computer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xl-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Remote Learning</h4>
                        <p>Develop skills for career of various majors including language</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xl-3">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-help"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Life Time Support</h4>
                        <p>Develop skills for career of various majors including language </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature section End -->
<!-- About Section Start -->
<section class="about-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="video-block">
                    <!-- <img src="assets/images/bg/about.jpg" alt="" class="img-fluid"> -->
                    <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                    <video controls autoplay muted class="col-12" style="padding: 0px; padding-bottom: -9px;">
                        <source src="{{ asset('videos/gracehand.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="col-xl-6 pl-5 col-lg-6">
                <div class="section-heading mt-4 mt-lg-0 ">
                    <span class="subheading">About Us</span>
                    <h3>Gracehands Reserach <span> Institute</span></h3>
                    <p style="text-align: justify;">
                        {!!config("settings")->about_content!!}
                    </p>
                </div>
                <ul class="about-features">
                    <li>
                        <i class="fa fa-check"></i>
                        <h5>High Quality Video Details</h5>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <h5>Powerful Audiance</h5>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <h5>Premium Content Worldwide</h5>
                    </li>
                </ul>

                <a href="#" class="btn btn-main">Our Trainings</a>
            </div>
        </div>
    </div>
</section>
<!-- About Section END -->
<section class="section-padding popular-course bg-grey">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading center-heading">
                    <span class="subheading">Trending Trainings</span>
                    <h3>Popular Online Trainings Around You</h3>
                    <!-- <p>The ultimate planning solution for
                        students who want to reach their personal goals</p> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <img src="{{ asset('banners/spss-banner.jpeg') }}" alt="" class="img-fluid">
                        <div class="course-price ">${{ number_format(50, 2) }}</div>
                    </div>

                    <div class="course-content">
                        <span class="course-cat">SPSS</span>
                        <h4><a href="https://spss.gracehandsresearchinstitute.com/" target="blank">Data Analysis with SPSS + Certificate</a></h4>
                        <div class="course-meta">
                            <span class="course-student"><i class="fa fa-user-alt"></i>340 Students</span>
                            <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <img src="{{ asset('banners/excel-banner.jpeg') }}" alt="" class="img-fluid">
                        <div class="course-price ">${{ number_format(50, 2) }}</div>
                    </div>

                    <div class="course-content">
                        <span class="course-cat">Excel</span>
                        <h4><a href="#">Excel Training + Certificate</a></h4>
                        <div class="course-meta">
                            <span class="course-student"><i class="fa fa-user-alt"></i>340 Students</span>
                            <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="course-block">
                    <div class="course-img">
                        <img src="{{ asset('banners/research-banner.jpeg') }}" alt="" class="img-fluid">
                        <div class="course-price ">${{ number_format(50, 2) }}</div>
                    </div>

                    <div class="course-content">
                        <span class="course-cat">Research Analysis</span>
                        <h4><a href="http://research.gracehandsresearchinstitute.com/" target="blank">Research Analysis + Certificate</a></h4>

                        <div class="course-meta">
                            <span class="course-student"><i class="fa fa-user-alt"></i>340 Students</span>
                            <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center mt-5">
                   <a style="text-decoration: none;" href="{{ route('trainings') }}" class="btn btn-secondary">View all trainings </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COunter Section start -->
<section class="counter-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-10">
                <div class="section-heading">
                    <span class="subheading">Maximize your potentials</span>
                    <h3>We break down barriers so teams can focus on what matters – learning together to create
                        online career you love.</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h6>Instructors</h6>
                    <div class="count">
                        <span class="counter">90</span>
                    </div>
                    <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h6>Total Trainings</h6>
                    <div class="count">
                        <span class="counter">1450</span>
                    </div>
                    <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h6>Registered Enrolls</h6>
                    <div class="count">
                        <span class="counter">5697</span>
                    </div>
                    <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <h6>Satisfaction rate</h6>
                    <div class="count">
                        <span class="counter">100</span>%
                    </div>
                    <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COunter Section END -->

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <hr>
        </div>
    </div>
</div>



<!-- About Section Start -->
<!-- <section class="about-section section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-heading ">
                    <span class="subheading">Self Development Course</span>
                    <h3>Get Instant Access To <span> Expert solution</span></h3>
                    <p>The ultimate planning solution for busy women who want to reach their personal goals.Effortless comfortable eye-catching unique detail </p>
                </div>

                <div class="about-text-block">
                    <div class="icon-box">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <div class="about-desc">
                        <h4>Sign up in website</h4>
                        <p>The right mentoring relationship can be a powerful tool for professional growth. Bark up the right tree.</p>
                    </div>
                </div>

                <div class="about-text-block">
                    <div class="icon-box">
                        <i class="flaticon-flag"></i>
                    </div>
                    <div class="about-desc">
                        <h4>Enroll your course</h4>
                        <p>The right mentoring relationship can be a powerful tool for professional growth. Bark up the right tree.</p>
                    </div>
                </div>
                <div class="about-text-block">
                    <div class="icon-box border-none">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <div class="about-desc">
                        <h4>Start from now</h4>
                        <p>The right mentoring relationship can be a powerful tool for professional growth. Bark up the right tree.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="about-img">
                    <img src="assets/images/bg/about-image.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- About Section End -->
<!-- Testimonial section start -->
<section class="testimonial section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading center-heading">
                    <span class="subheading">Testimonials</span>
                    <h3>Success Stories from person</h3>
                    <p>The ultimate planning solution for
                        busy women who want to reach their personal goals</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-120">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="client-info">
                            <img src="assets/images/clients/test-1.jpg" alt="" class="img-fluid">
                            <div class="testionial-author">Jessica Smith - Amazon co.</div>
                        </div>
                        <div class="testimonial-info-title">
                            <h4>One of the easiest online accounting systems we've tried.</h4>
                        </div>

                        <div class="testimonial-info-desc">
                            People who build their own home tend to be very courageous. These people are curious about life.
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="client-info">
                            <img src="assets/images/clients/test-2.jpg" alt="" class="img-fluid">
                            <div class="testionial-author">Jessica Smith - Amazon co.</div>
                        </div>
                        <div class="testimonial-info-title">
                            <h4>One of the easiest online accounting systems we've tried.</h4>
                        </div>

                        <div class="testimonial-info-desc">
                            People who build their own home tend to be very courageous. These people are curious about life.
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="client-info">
                            <img src="assets/images/clients/test-3.jpg" alt="" class="img-fluid">
                            <div class="testionial-author">Jessica Smith - Amazon co.</div>
                        </div>
                        <div class="testimonial-info-title">
                            <h4>One of the easiest online accounting systems we've tried.</h4>
                        </div>

                        <div class="testimonial-info-desc">
                            They're thinking about what it means to live in a house, rather than just buying a commodity and making it work.
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="client-info">
                            <img src="assets/images/clients/test-1.jpg" alt="" class="img-fluid">
                            <div class="testionial-author">Jessica Smith - Amazon co.</div>
                        </div>

                        <div class="testimonial-info-title">
                            <h4>One of the easiest online accounting systems we've tried.</h4>
                        </div>

                        <div class="testimonial-info-desc">
                            People who build their own home tend to be very courageous. These people are curious about life.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->
<!-- Blog Section Start -->
<!-- <se ion> -->
<!-- Blog Section End -->
<!-- <section class="subscribe section-padding pt-0">
    <div class="container">
        <div class="row align-items-center form-inner">
            <div class="col-lg-6 col-xl-6">
                <div class="section-heading mb-0">
                    <span class="subheading">Newsletter</span>
                    <h3>Subscribe to get latest news</h3>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Email" class="form-control">
                    <a href="#" class="btn btn-main">Subscribe</a>
                </form>
            </div>
        </div>
    </div>
</section> -->
<!-- Footer section start -->
@endsection