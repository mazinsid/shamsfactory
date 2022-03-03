<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{__('home.company name')}}</title>
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
  {{-- @if (App::getLocale() == 'en') --}}
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  {{-- movie image --}}
  {{-- <style> 
 img:hover {
  
  animation: shake 0.5s;

  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
.example {
  height: 250px;
  width: 250px;
  margin: 0 auto;
 
  animation-name: stretch;
  animation-duration: 4.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-fill-mode: none;
  animation-play-state: running;
}

@keyframes stretch {
  0% {
    transform: scale(.3);
 
    border-radius: 100%;
  }
 
}

}
    </style> --}}
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{route('home')}}">{{__('home.company name')}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="{{route('welcome')}}" class="logo"><img src="{{asset('img/icon2.png')}}" alt="" class="img-fluid"></a> --}}

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">{{__('home.home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{__('home.about')}}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{__('home.services')}}</a></li>
          <li><a class="nav-link scrollto " href="#work">{{__('home.prodcuts')}}</a></li>
          <li><a class="nav-link scrollto " href="#blog">{{__('home.blog')}}</a></li>
          <li><a class="nav-link scrollto" href="#contact">{{__('home.contact')}}</a></li>
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

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url({{asset('video/backlast.gif')}})">
    <div></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="containerimag">
          {{-- <h1 class="hero-title mb-4">{{__('home.company name')}}</h1> --}}
          {{-- <img src="{{asset('video/last2.gif')}}" alt="" class=""> --}}
          {{-- <p class="hero-subtitle"><span class="typed" data-typed-items="{{__('home.cat1')}}, {{__('home.cat2')}}, {{__('home.cat3')}}, {{__('home.cat4')}}"></span></p> --}}
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
              
                <div class="col-md-12">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h2 class="d-flex justify-content-center text-center">
                        {{__('home.about')}}
                      </h2>
                    </div>
                    <p class="lead justify-content-center text-center">
                     {{__('home.about1')}}
                    </p>
                    <p class="lead justify-content-center text-center">
                        {{__('home.about2')}}
                    </p>
                    <p class="lead justify-content-center text-center">
                        {{__('home.about3')}}
                    </p>
                    <p class="lead justify-content-center text-center">
                        {{__('home.about4')}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                {{__('home.services')}}
              </h3>
              <p class="subtitle-a">
                {{-- {{}} --}}
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{__('home.cat1')}}</h2>
                {{-- <p class="s-description text-center">
                 
                </p> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{__('home.cat2')}}</h2>
                {{-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{__('home.cat3')}}</h2>
                {{-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> --}}
              </div>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{__('home.cat1')}}/h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url({{ asset('img/counters-bg.jpg')}}">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="{{$counts->team_work}}" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">{{__('home.team work')}}</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="{{$counts->experience}}" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">{{__('home.Experience')}}</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="{{$counts->clients}}" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">{{__('home.TOTAL CLIENTS')}}</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="{{$counts->award_won}}" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">{{__('home.AWARD WON')}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                {{__('home.prodcuts')}}
              </h3>
              <p class="subtitle-a">
               
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($products as $product )
            
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ asset('storage/'.$product->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{ asset('storage/'.$product->image)}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{$product->name}}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">{{$product->category}}</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{route('details',$product->id)}}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">{{__('home.aromatic library')}}</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                       {{__('home.desc library')}}
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">{{__('home.Perfume composition')}}</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                    {{__('home.desc composition')}}
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                {{__('home.blog')}}
              </h3>
              <p class="subtitle-a">
               {{__('home.news')}}
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ( $newss as $news)
            
      
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{ asset('storage/'.$news->image)}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{__('home.news')}}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">{{$news->title}}</a></h3>
                <p class="card-description">
                  {{$news->detiles}}
                </p>
              </div>
              
          </div>
        </div>
          @endforeach
        
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                
                  <div class="col-md-12">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="d-flex justify-content-center title-a">
                        {{__('home.contact')}}
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead justify-content-center text-center">
                      {{__('home.contact info')}}
                      </p>
                      <ul class="list-ico justify-content-center text-center">
                        <li><a href="https://www.google.com/maps?q=24.1798116,55.7672365&z=17&hl=en" target="_blank"><span class="bi bi-geo-alt"></span> {{__('home.address')}}</a></li>
                        <li><a href="tel:+97137666362" target="_blank" ><span class="bi bi-phone"></span> 0097137666362</a></li>
                        <li><a  href="mailto:info@shamsfactory.com" target="_blank"> <span class="bi bi-envelope"></span> info@shamsfactory.com</a></li>
                      </ul>
                    </div>
                    <div class="socials justify-content-center text-center">
                      <ul>
                        <li><a href="https://www.facebook.com/مصنع-شمس-للعطور-2384133001908611"  target="_blank"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href="https://www.instagram.com/shams_perfume_factory/"  target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=00971564080504" target="_blank"><span class="ico-circle"><i class="bi bi-whatsapp"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

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