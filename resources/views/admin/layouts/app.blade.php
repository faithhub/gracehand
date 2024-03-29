<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/zobstar/employer-dashboard.html by HTTrack userssite Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 09:20:23 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="GraceHand Research Institute">
    <meta name="keywords" content="GraceHand,Research,Institute,education,lms,seo,course,online,learning,caoch,training,tutor">
    <meta name="author" content="amaofaith.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard - {{$title ?? ''}}</title>
    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/logo.png') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    @include('admin.layouts.includes.style')
    @include('admin.layouts.includes.alert')
</head>

<body>
    <!-- start per-loader -->
    {{-- <div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div> --}}
    <!-- end per-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    @include('admin.layouts.includes.header')
    <!-- ================================
         END HEADER AREA
================================= -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->

    <section class="dashboard-area">
        @include('admin.layouts.includes.sidemenu')
        <div class="dashboard-content-wrap">
            <div class="container-fluid">
                @yield('admin')
                @include('admin.layouts.includes.footer')
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fa fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- Template JS Files -->
    @include('admin.layouts.includes.script')

</body>

<!-- Mirrored from techydevs.com/demos/themes/html/zobstar/employer-dashboard.html by HTTrack adminsite Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 09:20:47 GMT -->

</html>