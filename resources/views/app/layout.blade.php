<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Termly</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@200;400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Termly<span>.</span></h1>
      </a>

      <div class="text-light">
        <form action="#">
            <div>
                <input type="search" name="search" class="form-control" id="search" placeholder="Search">
            </div>
        </form>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/about" class="text-light">About Us</a></li>
        </ul>
      </nav>
      <!-- .navbar -->

      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list text-light"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x "></i>

    </div>
  </header><!-- End Header -->

  <main id="main">
    @yield('content')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer fixed-bottom d-none d-lg-block">
    <div class="container">
      <div class="row gy-3 justify-content-center text-center">

        <div class="col-lg-2 col-md-6 d-flex">
          <div><h4><a href="#" class="text-light">Career</a></h4></div>
        </div>
        <div class="col-lg-2 col-md-6 d-flex">
          <div><h4><a href="/contact-us" class="text-light">Contact Us</a></h4></div>
        </div>
        <div class="col-lg-2 col-md-6 d-flex">
          <div><h4><a href="#" class="text-light">Licensing</a></h4></div>
        </div>
        <div class="col-lg-2 col-md-6 d-flex">
          <div><h4><a href="#" class="text-light">Facebook</a></h4></div>
        </div>
        <div class="col-lg-2 col-md-6 d-flex">
          <div><h4><a href="#" class="text-light">Instagram</a></h4></div>
        </div>
        <div class="col-lg-2 col-md-6 d-flex">
          <div><h4><a href="#" class="text-light">Twitter</a></h4></div>
        </div>

        

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->


  <!-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>