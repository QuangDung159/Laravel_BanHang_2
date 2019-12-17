<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/colorbox/example3/colorbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/rs-plugin/css/responsive.css')}}">
    <link rel="stylesheet" title="style" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" title="style" href="{{asset('assets/css/huong-style.css')}}">
</head>
<body>

@include('header')

@include('slider')

@yield('content')

@include('footer')


<!-- include js files -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('assets/vendors/animo/Animo.js')}}"></script>
<script src="{{asset('assets/vendors/dug/dug.js')}}"></script>
<script src="{{asset('assets/js/scripts.min.js')}}"></script>
<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!--customjs-->
<script src="{{asset('assets/js/custom2.js')}}"></script>
<script>
    $(document).ready(function ($) {
        $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $(".header-bottom").addClass('fixNav')
                } else {
                    $(".header-bottom").removeClass('fixNav')
                }
            }
        )
    })
</script>
</body>
</html>
