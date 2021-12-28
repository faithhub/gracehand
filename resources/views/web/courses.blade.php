@extends('web.layouts.app')
@section('content')
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('web/styles/courses_responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('web/styles/courses_styles.css') }}"> --}}

{{-- <div class="home">
    <div class="home_background_container prlx_parent">
        <div class="home_background prlx" style="background-image:url({{ asset('web/images/courses_background.jpg') }})"></div>
</div>
<div class="home_content">
  <h1>Courses</h1>
</div>
</div> --}}

<!-- Popular -->
<section class="section-padding popular-course bg-grey">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section-heading center-heading">
                    <!-- <span class="subheading">Trending Trainings</span> -->
                    <h3>Popular Online Trainings</h3>
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

        <!-- <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center mt-5">
                   <a style="text-decoration: none;" href="#" class="btn btn-secondary">View all trainings </a>
                </div>
            </div>
        </div> -->
    </div>
</section>
@endsection