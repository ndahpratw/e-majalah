<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="templateArsha/img/favicon.png" rel="icon">
  <link href="templateArsha/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="templateArsha/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="templateArsha/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="templateArsha/vendor/aos/aos.css" rel="stylesheet">
  <link href="templateArsha/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="templateArsha/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="templateArsha/css/main.css" rel="stylesheet">

  <title> Daftar Isi </title>

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main class="main container-fluid">

    <div class="row">
        <div class="d-flex justify-content-center align-items-center">
        <div class="col-8 mt-4">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @elseif (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <i class="bi bi-exclamation-octagon me-1"></i>
                {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
        </div>
      </div>
    </div>

  @yield('konten')

  </main>

  <main>

  @yield('konten2')

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="templateArsha/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="templateArsha/vendor/php-email-form/validate.js"></script>
  <script src="templateArsha/vendor/aos/aos.js"></script>
  <script src="templateArsha/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="templateArsha/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="templateArsha/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="templateArsha/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="templateArsha/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="templateArsha/js/daftarisi.js"></script>

</body>

</html>