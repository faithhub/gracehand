<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="GraceHand Research Institute">
    <meta name="keywords" content="GraceHand,Research,Institute,education,lms,seo,course,online,learning,caoch,training,tutor">
    <meta name="author" content="amaofaith.com">

    <title>GraceHand Research Institute - {{$title ?? ''}}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/logo.png') }}">
    @include('web.layouts.includes.style')
    @include('web.layouts.includes.alert')

    <!-- Favicon -->
</head>

<body id="top-header">


    <!-- Header -->
    @include('web.layouts.includes.header')


    @yield('content')

    <!-- Footer section End -->
    <div class="fixed-btm-top">
        <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>


    @include('web.layouts.includes.footer')
    @include('web.layouts.includes.script')
</body>
</html>