<!DOCTYPE html>
<html lang="en">
<head>
<title>GraceHands</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="GraceHands">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('web.layouts.includes.style')	
@include('web.layouts.includes.alert')
</head>
<body>

<div class="super_container">
    <!-- Header -->
    @include('web.layouts.includes.header')	
    <!-- Home -->
    @yield('content')
    <!-- Footer -->
    @include('web.layouts.includes.footer')

</div>
@include('web.layouts.includes.script')
</body>
</html>