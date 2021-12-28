@extends('web.layouts.app')
@section('content')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>Who we are</h1>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature section start -->
<section class="features pt-100">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
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
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
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
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
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
            <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
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
                    <!-- <img src="assets/images/bg/about.jpg" alt="" class="img-fluid">
                    <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->                    
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

                <a href="{{ route('trainings') }}" class="btn btn-main">Our Trainings</a>
            </div>
        </div>
    </div>
</section>
<!-- About Section END -->
<!-- COunter Section start -->
<section class="counter-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 bg-black counter-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center">
                            <i class="flaticon-video-camera"></i>
                            <div class="count">
                                <span class="counter">90</span>
                            </div>
                            <h6>Instructors</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center">
                            <i class="flaticon-layers"></i>
                            <div class="count">
                                <span class="counter">1450</span>
                            </div>
                            <h6>Total Courses</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center">
                            <i class="flaticon-flag"></i>
                            <div class="count">
                                <span class="counter">5697</span>
                            </div>
                            <h6>Registered Enrolls</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center border-0">
                            <i class="flaticon-help"></i>
                            <div class="count">
                                <span class="counter">100</span>%
                            </div>
                            <h6>Satisfaction rate</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COunter Section End -->


<!-- Team section start -->
<!-- <section class="team pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-7">
                <div class="section-heading center-heading">
                    <span class="subheading">Best Expert Team</span>
                    <h3>Our Professional Team</h3>
                    <p>The ultimate planning solution for busy women who want to reach their personal goals</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-4 mb-lg-0">
                    <img src="assets/images/team/team-4.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h5>Harish Ham</h5>
                        <p>CEO, Developer</p>

                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-4 mb-lg-0">
                    <img src="assets/images/team/team-1.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h5>Tanvir Hasan</h5>
                        <p>Market Researcher</p>
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-4 mb-lg-0">
                    <img src="assets/images/team/team-2.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h5>Mikele John</h5>
                        <p>Content Writter</p>
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item">
                    <img src="assets/images/team/team-3.jpg" alt="" class="img-fluid">
                    <div class="team-info">
                        <h5>Mikele John</h5>
                        <p>Content Writter</p>
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Team section End -->
<!-- Testimonial section start -->
<section class="testimonial-2 section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-xl-5 mr-auto">
                <div class="section-heading">
                    <span class="subheading">Testimonials</span>
                    <h3>Success Stories from person</h3>
                    <p>The ultimate planning solution for busy women who want to reach their personal goals.Effortless comfortable eye-catching unique detail.Take the control of their life back</p>
                    <p>Help you to get the best course that fits you <a href="#" class="text-underline d-block">Free Consultation <i class="fa fa-angle-right ml-2"></i></a></p>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="testimonials-slides-2 owl-carousel owl-theme">
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
<!-- CTA Sidebar start -->
<section class="cta bg-gray section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading center-heading mb-0">
                    <span class="subheading">be a Partner</span>
                    <h3>Want to partner with us ?</h3>
                    <p class="mb-4">Join millions of people from around the world
                        learning together. Online learning is as easy and
                        natural as chatting.</p>
                    <a href="{{ route('partnership') }}" class="btn btn-main">Become PARTNER</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->
@endsection