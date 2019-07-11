<!DOCTYPE html>
<html   {{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Marketing Lab</title>
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 

            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
            <link rel="stylesheet" href="{{asset('css/plugin.css')}}"/>
            <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
            <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
            <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    </head>
    <body>
        <div>
            @include('layouts.nav')
            @yield('content')
            
        </div>
    <script type="text/javascript" src="{{asset('js/plugin.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery(".flexslider-wrap .flexslider").flexslider({
                animation: "fade",
                animationLoop: true,
                animationSpeed: 1500,
                slideshow: true,
                pauseOnHover: false,
                controlNav: false,
                directionNav: true
            });

        });
    </script>
    </body>
