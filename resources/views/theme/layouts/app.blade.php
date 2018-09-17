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
    <title>{{ $title or 'Ideal 2'  }}</title>

    <!-- Required css -->
<link href="{{mix('css/app.css') }}" rel="stylesheet">
</head>
<body>



<div id="app">




</div>

    





<script src="{{mix('js/index.js') }}"></script>

</body>
</html>