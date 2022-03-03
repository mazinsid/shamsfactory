<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shams Factory</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{route('welcome')}}">Shams Factory</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="{{route('welcome')}}" class="logo"><img src="{{asset('img/icon.png')}}" alt="" class="img-fluid"></a> --}}

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('welcome')}}">{{__('home.home')}}</a></li>
          <li><a class="nav-link scrollto" href="{{route('welcome')}}">{{__('home.about')}}</a></li>
          <li><a class="nav-link scrollto" href="{{route('welcome')}}">{{__('home.services')}}</a></li>
          <li><a class="nav-link scrollto " href="{{route('welcome')}}">{{__('home.prodcuts')}}</a></li>
          <li><a class="nav-link scrollto " href="{{route('welcome')}}">{{__('home.blog')}}</a></li>
          <li><a class="nav-link scrollto" href="{{route('welcome')}}">{{__('home.contact')}}</a></li>
          <li class="dropdown"><a href="#"><span>{{__('home.languages')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li><a  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{ $properties['native'] }}
                      </a></li>
              @endforeach
          </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <div class="intro intro-single route bg-image" >
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">{{__('home.Portfolio Details')}}</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">{{__('home.home')}}</a>
            </li>
            <li class="breadcrumb-item active">{{__('home.Portfolio Details')}}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main" >

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
                  @foreach ($product_images as $product_image)
                      
                <div class="swiper-slide"  >
                  <img style="width: 60% ; height: 0%"  src="{{ asset('storage/'.$product_image->image)}}" alt="">
                </div>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
        
            <div class="portfolio-description">
                @foreach ($products as $product)
              <h2>{{$product->name}}</h2>
              <p>{{$product->detiles}}</p>
              @endforeach
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Shams Factory</strong>. All Rights Reserved</p>
            <div class="credits">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}" defer></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}" defer></script>
  <script src="{{ asset('vendor/purecounter/purecounter.js')}}" defer></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}" defer></script>
  <script src="{{ asset('vendor/typed.js/typed.min.js')}}" defer></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}" defer></script>

</body>

</html>