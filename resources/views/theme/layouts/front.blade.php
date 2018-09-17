<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ (isset($meta_desc)) ?  $meta_desc : '' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ?  $keywords : '' }}">

<!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{asset('sell/vendor/nouislider/nouislider.css') }}">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <link rel="stylesheet" href="{{asset('sell/fonts/hkgrotesk/stylesheet.css') }}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('sell/vendor/owl.carousel/assets/owl.carousel.css') }}">
    <!-- Ekko Lightbox-->
    <link rel="stylesheet" href="{{asset('sell/vendor/ekko-lightbox/ekko-lightbox.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/sell/1-2-1/img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
    <title>{{ $title or 'Ideal 2'  }}</title>

    <!-- Required css -->
    
    <link href="{{asset('sell/css/app.css') }}" rel="stylesheet">


</head>
<body>
    @yield('topbar')
    @yield('nav')

    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg'); 
      
    </script>
    <script src="{{asset('sell/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sell/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('sell/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('sell/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('sell/vendor/owl.carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('sell/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('sell/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('sell/vendor/smooth-scroll/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('sell/vendor/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
    <script src="{{asset('sell/js/demo.js')}}"></script>
    <script>
      var basePath = ''
      
    </script>
    <script src="{{asset('sell/js/theme.js')}}"></script>
    <!-- Start of Async Drift Code-->
    <script>
      "use strict";
      
      !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
          if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
          t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
          t.factory = function(e) {
          return function() {
              var n = Array.prototype.slice.call(arguments);
              return n.unshift(e), t.push(n), t;
          };
          }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
          }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
          };
      }
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('mbzrkz3k736r');
      
    </script>
    <!-- End of Async Drift Code-->
    <style>
      iframe#drift-widget {
          left: 24px !important;
          right: auto !important;
      }
    </style>

</body>
</html>