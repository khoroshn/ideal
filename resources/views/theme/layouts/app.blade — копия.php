<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="{{ (isset($meta_desc)) ?  $meta_desc : '' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ?  $keywords : '' }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset(env('THEME'))}}/favicon.ico">
    <link rel="icon" type="image/x-icon" href="{{asset(env('THEME'))}}/favicon.ico">
    <link rel="icon" type="image/png" href="{{asset(env('THEME'))}}/favicon.png">
    <link rel="apple-touch-icon" href="{{asset(env('THEME'))}}/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset(env('THEME'))}}/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset(env('THEME'))}}/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset(env('THEME'))}}/touch-icon-ipad-retina.png">
    <title>{{ $title or 'Ideal'  }}</title>

    <!-- Required css -->
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Plugins css -->
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/swiper.min.css">
    <!-- Template css -->
    <link rel="stylesheet" href="{{asset(env('THEME'))}}/css/style.css">
</head>
<body>



<div id="app">




</div>

{{--<!-- Required js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>--}}
<script src="{{asset(env('THEME'))}}/js/jquery.min.js"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script src="{{asset(env('THEME'))}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/typeahead.bundle.min.js"></script>
<!-- Plugins js -->
<script src="{{asset(env('THEME'))}}/js/swiper.min.js"></script>
<script src="{{asset(env('THEME'))}}/js/jquery.countdown.min.js"></script>
<!-- Template JS -->
<script src="{{asset(env('THEME'))}}/js/script.min.js"></script>
</body>
</html>