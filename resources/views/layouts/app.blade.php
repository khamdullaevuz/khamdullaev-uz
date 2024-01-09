<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Elbek Khamdullaev</title>
    <meta name="title" content="Elbek Khamdullaev">
    <meta name="description" content="Backend Dasturchi">
    <meta content="backend,developer,khamdullaevuz,elbek,khamdullaev" name="keywords">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://khamdullaev.uz/">
    <meta property="og:title" content="Elbek Khamdullaev">
    <meta property="og:description" content="Backend Dasturchi">
    <meta property="og:image" content="https://khamdullaev.uz/img/banner.jpg">
    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://khamdullaev.uz/">
    <meta property="twitter:title" content="Elbek Khamdullaev">
    <meta property="twitter:description" content="Backend dasturchi, tizim administratori va ma'lumotlar tahlilchisi">
    <meta property="twitter:image" content="https://khamdullaev.uz/img/banner.jpg">


    <!-- Favicons -->
    <link href="/favicon.ico" rel="icon">
    <link href="/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>
<!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{url('/')}}">Khamdullaev.uz</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Bosh sahifa</a></li>
                    <li><a class="nav-link scrollto" href="#about">Men haqimda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Xizmatlar</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Narxlar</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Bog'lanish</a></li>
                    <li><a class="getstarted scrollto" href="#contact">Buyurtma berish</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
@yield('content')
<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Elbek Khamdullaev</h3>
                    <p>
                        <strong>Telefon:</strong> <a href="tel:990718525">+998 (99) 071 85 25</a><br>
                        <strong>Elektron pochta:</strong> <a href="mailto:elbek.khamdullaev@gmail.com">elbek.khamdullaev@gmail.com</a><br>
                    <strong>Telegram:</strong> <a href="https://t.me/khamdullaevuz">@khamdullaevuz</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Kerakli havolalar</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://e-soft.uz/category/php">Php
                                darslari</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://e-soft.uz/category/mysql">MySQL
                                darslari</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://e-soft.uz/category/python">Python
                                darslari</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Kerakli</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://e-soft.uz">E-soft.uz da dasturlashni
                                o'rganing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://t.me/ESoftUz">Telegram kanalim</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://github.com/khamdullaevuz">Men githubda</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Men ijtimoiy tarmoqlarda</h4>
                    <p>Ijtimoiy tarmoqlarda menga obuna bo'ling va meni kuzatib boring ;)</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/khamdullaevuz" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://facebook.com/khamdullaevuz" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://instagram.com/khamdullaevuz" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://t.me/khamdullaevuz" class="telegram"><i class="bx bxl-telegram"></i></a>
                        <a href="https://linkedin.com/in/khamdullaevuz" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                     <a href="https://github.com/khamdullaevuz" class="github"><i class="bx bxl-github"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; <strong><span>Elbek Khamdullaev</span></strong>
        </div>
        <div class="credits">
            2020-{{date('Y')}}
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#hero" class="back-to-top d-flex align-items-center justify-content-center scrollto"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

</body>

</html>
