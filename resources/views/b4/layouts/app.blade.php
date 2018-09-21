<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{asset(env('RES'))}}/vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <link rel="stylesheet" href="{{asset(env('RES'))}}/fonts/hkgrotesk/stylesheet.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset(env('RES'))}}/vendor/owl.carousel/assets/owl.carousel.css">
    <!-- Ekko Lightbox-->
    <link rel="stylesheet" href="{{asset(env('RES'))}}/vendor/ekko-lightbox/ekko-lightbox.css">
    <!-- RES stylesheet-->
    <link rel="stylesheet" href="{{asset(env('RES'))}}/css/style.default.css" id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet" href="{{asset(env('RES'))}}/css/style.red.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset(env('RES'))}}/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset(env('RES'))}}/img/favicon.png">
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


    <iframe src="https://fxo.io/m/x2pxbkdw" width="20%" height="20%" style="position: absolute; float-left; border: 3px solid #f9f9fb; width: 100%; height: 100%;"></iframe>
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
    <script src="{{asset(env('RES'))}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset(env('RES'))}}/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{{asset(env('RES'))}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset(env('RES'))}}/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{asset(env('RES'))}}/vendor/owl.carousel/owl.carousel.js"></script>
    <script src="{{asset(env('RES'))}}/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="{{asset(env('RES'))}}/vendor/nouislider/nouislider.min.js"></script>
    <script src="{{asset(env('RES'))}}/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <script src="{{asset(env('RES'))}}/vendor/ekko-lightbox/ekko-lightbox.min.js"></script>
    <script src="{{asset(env('RES'))}}/js/demo.js"></script>
    <script>
      var basePath = 'sell/'
    </script>
    <script src="{{asset(env('RES'))}}/js/theme.js"></script>
    <!-- Start of Async Drift Code-->

    <!-- End of Async Drift Code-->


    <script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMzMjNhNDYiLCJ3ZWIiOnsiYm90SWQiOiI1YmE0OTc0ZDg1MjEyMDAwOGQ4NmU4ZWEiLCJ0aGVtZSI6IiMzMjNhNDYiLCJsYWJlbCI6IklkZWFsIGNsb3RjaGVzIUgifSwid2VsY29tZVRleHQiOiLQl9C00YDQsNCy0YHRgtCy0YPQudGC0LUsINC80L7Qs9GDINGPINGH0LXQvCDRgtC+INC/0L7QvNC+0YfRjD8ifQ==" async defer></script>
    <style>
      iframe#drift-widget {
          left: 24px !important;
          right: auto !important;
      }
    </style>
</body>
</html>