<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health insurance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="hometemplate/boot/assets/img/favicon.png" rel="icon">
  <link href="hometemplate/boot/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="hometemplate/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="hometemplate/boot/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="hometemplate/boot/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="hometemplate/boot/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="hometemplate/boot/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="hometemplate/boot/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="hometemplate/boot/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="hometemplate/boot/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily - v4.7.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: rgb(7, 23, 68);">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html" style="color: white;">Health Insurance Agency Adama Branch</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="index.html" style="color: white;">Home</a></li>
            <li><a href="{{ url('/contact') }}" style="color: white;">Contact</a></li>
            <li><a href="type.html" style="color: white;">Help</a></li>
            <li><a href="{{ url('/feedback') }}" style="color: white;">Feedback</a></li>
            <li><a href="feedback.html" style="color: white;">About</a></li>
            @if (Route::has('login'))
            @auth
            <li>
            <x-app-layout>
            </x-app-layout>
            </li>
            @else
            <li><a href="{{ route('login') }}" style="color: white;">login</a></li>
            <li><a href="{{ route('register') }}" style="color: white;">register</a></li>
            @endauth
            @endif
          <!-- <li><a href="test.html" style="color: white;">Login</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background-color: rgb(231, 235, 238);">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      
                
                
          </div>
      
      </div>
  </section><!-- End Hero -->
  <main id="main">
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Health Insurance Agency Adama Branch</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Health Insurance Agency Adama Branch</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by Fifth Year Computer Science and Engineering Students 2014 E C<a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="hometemplate/boot/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="hometemplate/boot/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="hometemplate/boot/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="hometemplateboot/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="hometemplate/boot/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="boot/assets/js/main.js"></script>

</body>

</html>
