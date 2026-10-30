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
    ```html
<!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">
    <div class="container">
      <div class="section-title text-center">
        <h2 style="margin-bottom:1rem">My Projects</h2>
        <p>
          Real-world applications built with PHP, Laravel, MySQL, and modern frontend technologies.
          Each project demonstrates full-stack development skills, including REST APIs,
          authentication, database management, payment integration, and responsive design.
        </p>
      </div>

      <div class="row gy-4">

        <!-- Project 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-item card shadow-sm h-100">
            <img src="assets/img/portfolio/b-kitchen.png"
                class="card-img-top"
                alt="B-Kitchen Restaurant Ordering Application">

            <div class="card-body">
              <h5 class="card-title">B-Kitchen – Restaurant Ordering System (Laravel)</h5>
              <p class="card-text">
                A restaurant ordering application built with Laravel 12, PHP, MySQL, and Tailwind CSS.
                Features menu and product management, shopping cart functionality, order processing,
                and an administrative dashboard for managing customer orders. Implements a reusable
                CartService for handling cart operations and supports order status management and
                WhatsApp-based customer notifications.
              </p>

              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-success" target="_blank">
                  <i class="bi bi-box-arrow-up-right"></i> Live Demo
                </a>
                <a href="https://github.com/Uwemski/food-app-updated" class="btn btn-sm btn-dark" target="_blank">
                  <i class="bi bi-github"></i> Code
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-item card shadow-sm h-100">
            <img src="assets/img/portfolio/locator-app.webp"
                class="card-img-top"
                alt="RCCG Parish Locator Screenshot">

            <div class="card-body">
              <h5 class="card-title">RCCG Parish Locator (Laravel)</h5>
              <p class="card-text">
                A geolocation-based Laravel application that helps RCCG members discover nearby parishes.
                Features parish registration, verification workflows, role-based administration,
                automated email notifications, and interactive maps using Leaflet.js and OpenStreetMap.
                Built to help users locate verified parishes based on proximity.
              </p>

              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-success" target="_blank">
                  <i class="bi bi-box-arrow-up-right"></i> Live Demo
                </a>
                <a href="https://github.com/Uwemski/locator" class="btn btn-sm btn-dark" target="_blank">
                  <i class="bi bi-github"></i> Code
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-item card shadow-sm h-100">
            <img src="assets/img/portfolio/donpas.png"
                class="card-img-top"
                alt="DONPAS Engineering Company Website">

            <div class="card-body">
              <h5 class="card-title">DONPAS Engineering – Company Website (Laravel)</h5>
              <p class="card-text">
                A full-stack web application developed for a mechanical and metallurgical engineering
                company. Built with Laravel, PHP, MySQL, Blade, and Tailwind CSS. Features dynamic
                product management, Cloudinary-based image handling, product detail pages, and
                quotation request functionality. Designed to provide the company with a digital
                presence and a platform for showcasing its engineering products and services.
              </p>

              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-success" target="_blank">
                  <i class="bi bi-box-arrow-up-right"></i> Live Demo
                </a>
                <a href="https://github.com/Uwemski/engineering_app" class="btn btn-sm btn-dark" target="_blank">
                  <i class="bi bi-github"></i> Code
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 4 -->
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-item card shadow-sm h-100">
            <img src="assets/img/portfolio/dispose.png"
                class="card-img-top"
                alt="Waste Management App Screenshot">

            <div class="card-body">
              <h5 class="card-title">Waste Management System (PHP OOP)</h5>
              <p class="card-text">
                A community waste management platform with role-based access for users and administrators.
                Users report waste disposal needs while administrators manage requests, verify submissions,
                and process payments through Paystack integration. Includes authentication, an admin dashboard,
                analytics, and a responsive Bootstrap interface built using PHP OOP principles.
              </p>

              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-success" target="_blank">
                  <i class="bi bi-box-arrow-up-right"></i> Live Demo
                </a>
                <a href="https://github.com/uwemski/waste_app" class="btn btn-sm btn-dark" target="_blank">
                  <i class="bi bi-github"></i> Code
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /Portfolio Section -->


  </main>

  <!-- this should be  acomponent, since it's reusable across pages -->
  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Portfolio</h3>
      <p>Learning every day, building with passion. From frontend structure to backend logic, one line at a time.</p>
      <div class="social-links d-flex justify-content-center">
        <a href="https://twitter.com/uwemski"><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href="https://intagram.com/uwemskii"><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href="https://linkedin.com/in/uffort-uwem"><i class="bi bi-linkedin"></i></a>
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