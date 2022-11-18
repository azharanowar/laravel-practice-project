<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HeroBiz Bootstrap Template - Home 1</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontEndAssets') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('frontEndAssets') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontEndAssets') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontEndAssets') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontEndAssets') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('frontEndAssets') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('frontEndAssets') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('frontEndAssets') }}/assets/css/variables.css" rel="stylesheet">
    <!-- <link href="{{ asset('frontEndAssets') }}/assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="{{ asset('frontEndAssets') }}/assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="{{ asset('frontEndAssets') }}/assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="{{ asset('frontEndAssets') }}/assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="{{ asset('frontEndAssets') }}/assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="{{ asset('frontEndAssets') }}/assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontEndAssets') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: HeroBiz - v2.3.1
    * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>

@include('frontEnd.include.header')

<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <img src="{{ asset('frontEndAssets') }}/assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
        <h2>Welcome to <span>HeroBiz</span></h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
    </div>
</section>

<main id="main">

    @yield('content')

</main><!-- End #main -->

@include('frontEnd.include.header')

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('frontEndAssets') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontEndAssets') }}/assets/vendor/aos/aos.js"></script>
<script src="{{ asset('frontEndAssets') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('frontEndAssets') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontEndAssets') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontEndAssets') }}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('frontEndAssets') }}/assets/js/main.js"></script>

</body>

</html>
