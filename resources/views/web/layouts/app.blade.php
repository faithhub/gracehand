<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themeturn.com/tf-db/eduhash/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 18:27:18 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Education LMS template by Dreambuzz">
    <meta name="keywords" content="Eduhash,education,lms,seo,course,online,learning,caoch,training,tutor">
    <meta name="author" content="themeturn.com">

    <title>Eduhash - Education LMS template</title>
    @include('web.layouts.includes.style')
    @include('web.layouts.includes.alert')

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

<!-- Mirrored from themeturn.com/tf-db/eduhash/theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 18:28:02 GMT -->

</html>