    <!DOCTYPE html>
    <html lang="zxx" class="no-js">

    <!-- Mirrored from preview.colorlib.com/theme/education/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 12:04:33 GMT -->

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="img/fav.html">

        <meta name="author" content="colorlib">

        <meta name="description" content="">

        <meta name="keywords" content="">

        <meta charset="UTF-8">

        <title>GraceHand</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    </head>
    @include('web.layouts.includes.style')
    @include('web.layouts.includes.alert')
    </head>

    <body>
        <!-- Header -->
        @include('web.layouts.includes.header')
        <!-- Home -->
        @yield('content')
        <!-- Footer -->
        @include('web.layouts.includes.footer')
        @include('web.layouts.includes.script')
    </body>

    </html>