<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ideal-garments</title>
    <!-- All app Stylesheets -->
    <link rel="stylesheet" href="{{elixir(env('RES'))}}/build/css/all.css">
    <link href="{{mix('css/app.css') }}" rel="stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{elixir(env('RES'))}}/img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
</head>
<body>
    <header class="header">
      <!-- Top Bar-->
      @section('top')
        
      @show
      <!-- Top Bar End-->
      <!-- Navbar-->
      @section('navbar')
        
      @show
      <!-- /Navbar -->
            <!-- Fullscreen search area-->
      <div class="search-area-wrapper">
        <div class="search-area d-flex align-items-center justify-content-center">
          <div class="close-btn">
            <svg class="svg-icon svg-icon-light w-3rem h-3rem">
              <use xlink:href="#close-1"> </use>
            </svg>
          </div>
          <form action="#" class="search-area-form">
            <div class="form-group position-relative">
              <input type="search" name="search" id="search" placeholder="What are you looking for?" class="search-area-input">
              <button type="submit" class="search-area-button">
                <svg class="svg-icon">
                  <use xlink:href="#search-1"> </use>
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Fullscreen search area-->
    </header>

      @section('hot_products')
        
      @show

    <!-- Footer-->
      @section('footer')
    
      @show



      <div id="scrollTop">
        <i class="fa fa-long-arrow-alt-up"></i>
      </div>

    <!-- /Footer end-->

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
      injectSvgSprite('{{asset(env('RES'))}}/icons/orion-svg-sprite.svg'); 
      
    </script>

    <script src="{{asset('/sell/build/js/all.js')}}"></script>

    <!-- Start of Async Drift Code -->
    <script>
        // "use strict";

        // !function() {
        //     var t = window.driftt = window.drift = window.driftt || [];
        //     if (!t.init) {
        //         if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        //         t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
        //                 t.factory = function(e) {
        //                     return function() {
        //                         var n = Array.prototype.slice.call(arguments);
        //                         return n.unshift(e), t.push(n), t;
        //                     };
        //                 }, t.methods.forEach(function(e) {
        //             t[e] = t.factory(e);
        //         }), t.load = function(t) {
        //             var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
        //             o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
        //             var i = document.getElementsByTagName("script")[0];
        //             i.parentNode.insertBefore(o, i);
        //         };
        //     }
        // }();
        // drift.SNIPPET_VERSION = '0.3.1';
        // drift.load('fbucxgkretzp');
    </script>
    <!-- End of Async Drift Code -->



 <style>
      iframe#drift-widget {
          left: 24px !important;
          right: auto !important;
      }
    </style>

  <script type="text/javascript">
  
// if ('serviceWorker' in navigator) {
//   window.addEventListener('load', function() {
//     navigator.serviceWorker.register('/sw.js').then(function(registration) {
//       // Registration was successful
//       console.log('ServiceWorker registration successful with scope: ', registration.scope);
//     }, function(err) {
//       // registration failed :(
//       console.log('ServiceWorker registration failed: ', err);
//     });
//   });
// }
  </script>

</body>
</html>