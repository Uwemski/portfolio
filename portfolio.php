<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 05 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Personal</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php" class="active">Portfolio</a></li>
         
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Portfolio</h1>
              <p class="mb-0">Take a look at some of the work I've done with HTML, CSS, PHP, and MySQL. Whether it's a personal site, form handling, or backend logic, I love building things that work and solve real problems.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
  <div class="container">
    <div class="section-title text-center">
      <h2>My Projects</h2>
      <p>Here are some of the real-world apps I've built using PHP, Laravel, MySQL, and Bootstrap. Each project highlights my ability to solve problems and write maintainable code.</p>
    </div>

    <div class="row gy-4">

      <!-- Project 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card shadow-sm h-100">
          <img src="assets/img/portfolio/dispose.png" class="card-img-top" alt="Waste Management App Screenshot">
          <div class="card-body">
            <h5 class="card-title">Waste Management System (PHP OOP)</h5>
            <p class="card-text">A web app that allows users to report waste, and admins to track, pay, and manage reports. Built with PHP OOP, MySQL, and Bootstrap. Includes user auth, admin dashboard, and Paystack integration.</p>
            <div class="d-flex justify-content-between">
              <a href="https://your-live-link.com" class="btn btn-sm btn-success" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Live Demo</a>
              <a href="https://github.com/uwemski/waste_app" class="btn btn-sm btn-dark" target="_blank"><i class="bi bi-github"></i> Code</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card shadow-sm h-100">
          <img src="assets/img/portfolio/locator-app.webp" class="card-img-top" alt="RCCG Locator Screenshot">
          <div class="card-body">
            <h5 class="card-title">RCCG Parish Locator (Laravel)</h5>
            <p class="card-text">A Laravel app to help users find nearby RCCG parishes with features like parish registration, events, and service listings. Utilizes Laravel blade templates, routing, Eloquent, and form validation.</p>
            <div class="d-flex justify-content-between">
              <a href="https://your-live-link.com" class="btn btn-sm btn-success" target="_blank"><i class="bi bi-box-arrow-up-right"></i> Live Demo</a>
              <a href="https://github.com/yourusername/rccg-locator" class="btn btn-sm btn-dark" target="_blank"><i class="bi bi-github"></i> Code</a>
            </div>
          </div>
        </div>
      </div>

      <!-- More projects as needed... -->

    </div>
  </div>
</section>
<!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Portfolio</h3>
      <p>Learning every day, building with passion. From frontend structure to backend logic, one line at a time.</p>
      <div class="social-links d-flex justify-content-center">
        <a href="https://twitter.com/uwemski"><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href="https://intagram.com/uwemski_mk"><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span></span> <strong class="px-1 sitename">Portfolio</strong> <span>Made with inspriation from BootstrapMade</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>