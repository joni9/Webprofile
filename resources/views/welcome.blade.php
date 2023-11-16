@php
  //bantual helper
    $site_name= get_setting_value('_site_name');
    $jumbotron= get_section_value('jumbotron');
    $about = get_section_value('about');
    $projects=get_project();
    $services=get_service();
    $location= get_setting_value('_location');
    $site_description= get_setting_value('_site_description');
    $youtube= get_setting_value('_youtube');
    $instagram= get_setting_value('_instagram');
    $twitter= get_setting_value('_twitter');
    $facebook= get_setting_value('_facebook');

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $site_name }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Ninestars</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('assets') }}/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a>
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>{{ $jumbotron->title }}</h1>
          <h2>{!! $jumbotron->content !!}</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto mb-4">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ Storage::url($jumbotron->thumbnail) }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="{{ Storage::url($about->thumbnail) }}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-up">
            <h3>{{ $about->title }}</h3>
            <p>
              {!! $about->content !!}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Layanan hebat yang kami tawarkan</p>
        </div>
        <div class="row">
          @foreach ($services as $service) 
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon">
                    <img src="{{ Storage::url($service->thumbnail) }}" class="img-fluid" alt="" data-aos="zoom-in">
                  </div>
                  <h4 class="title mt-2">{{ $service->title }}</h4>
                  <p class="description">{!! $service->content !!}</p>
                </div>
              </div> 
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Projects</h2>
          <p>Lihatlah proyek indah kami</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ Storage::url($project->thumbnail) }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ Storage::url($project->thumbnail) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{!! $project->content !!}"><i class="bi bi-plus"></i></a>
                  <a href="{{ $project->link }}" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>{{ Str::limit($project->title, str_word_count($project->title) > 100 ? 50 : 50) }}</h4>
                  <p>{!! Str::limit($project->content, str_word_count($project->content) > 100 ? 50 : 50) !!}</p>
                </div>
              </div>
            </div> 
          @endforeach
          


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="footer-top border-top-1px contact" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>About US</h4>
            <p>
              {!! $site_description !!}
            </p>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Contact Us</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i><strong>Lokasi  :</strong>&nbsp;{{ $location }}</li>
                <li><i class="bx bx-chevron-right"></i><strong>WA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong>&nbsp;082133222914</li>
                <li><i class="bx bx-chevron-right"></i><strong>Phone   :</strong>&nbsp;+1 5589 55488 55</li>
                <li><i class="bx bx-chevron-right"></i><strong>Email   &nbsp;:</strong>&nbsp;info@example.com</li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              @foreach ($services as $service)
                  <li><i class="bx bx-chevron-right"></i>{{ $service->title }}</li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              @if ($twitter)
                <a href="{{ $twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>    
              @endif
              @if ($facebook)
                  <a href="{{ $facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              @endif
              @if ($instagram )
                  <a href="{{ $instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
              @endif
              @if ($youtube)
                  <a href="{{ $youtube }}" class="youtube"><i class="bx bxl-youtube"></i></a>
              @endif
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        Developer by <strong><span>Joniors</span></strong>. All Rights Reserved
      </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>