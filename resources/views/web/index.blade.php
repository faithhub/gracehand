@extends('web.layouts.app')
@section('content')   

<div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">
            
            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" data-scrset="{{asset('web/images/slider_background.jpg')}}" style="background-image:url({{asset('web/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>
            
            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('web/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>
            
            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url({{asset('web/images/slider_background.jpg')}})"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
    </div>

</div>

<div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{asset('web/images/earth-globe.svg')}}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Online Courses</h2>
                            <a href="courses.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{asset('web/images/books.svg')}}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">E-Books</h2>
                            <a href="courses.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{asset('web/images/professor.svg')}}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Teachers</h2>
                            <a href="teachers.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Ongoing Trainings</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">                
                <div class="testimonials_slider_container">
                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">                        
                        <!-- Testimonials Item -->
                        <div class="owl-item pr-2 pl-2">                            
                            <div class="row course_boxes justify-content-center">            
                                <!-- Popular Course Item -->
                                <div class="col-lg-4 course_box">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('web/images/course_1.jpg')}}" alt="https://unsplash.com/@kellybrito">
                                        <div class="card-body text-center">
                                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                                        </div>
                                        <div class="price_box d-flex flex-row align-items-center">
                                            <div class="course_author_image">
                                                <img src="{{asset('web/images/author.jpg')}}" alt="https://unsplash.com/@mehdizadeh">
                                            </div>
                                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Popular Course Item -->
                                {{-- <div class="col-lg-4 course_box">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('web/images/course_2.jpg')}}" alt="https://unsplash.com/@cikstefan">
                                        <div class="card-body text-center">
                                            <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                                        </div>
                                        <div class="price_box d-flex flex-row align-items-center">
                                            <div class="course_author_image">
                                                <img src="{{asset('web/images/author.jpg')}}" alt="https://unsplash.com/@mehdizadeh">
                                            </div>
                                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Popular Course Item -->
                                {{-- <div class="col-lg-4 course_box">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('web/images/course_2.jpg')}}" alt="https://unsplash.com/@cikstefan">
                                        <div class="card-body text-center">
                                            <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                                        </div>
                                        <div class="price_box d-flex flex-row align-items-center">
                                            <div class="course_author_image">
                                                <img src="{{asset('web/images/author.jpg')}}" alt="https://unsplash.com/@mehdizadeh">
                                            </div>
                                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="">
                                    </div>
                                    <div class="testimonial_name">james cooper</div>
                                    <div class="testimonial_title">Graduate Student</div>
                                </div>
                            </div> --}}
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- Services -->

<div class="services page_section">
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>

        <div class="row services_row">

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/earth-globe.svg" alt="">
                </div>
                <h3>Online Courses</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/exam.svg" alt="">
                </div>
                <h3>Indoor Courses</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/books.svg" alt="">
                </div>
                <h3>Amazing Library</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/professor.svg" alt="">
                </div>
                <h3>Exceptional Professors</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/blackboard.svg" alt="">
                </div>
                <h3>Top Programs</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/mortarboard.svg" alt="">
                </div>
                <h3>Graduate Diploma</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
            </div>

        </div>
    </div>
</div>

@endsection