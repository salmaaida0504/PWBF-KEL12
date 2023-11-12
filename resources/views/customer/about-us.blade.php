<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Volta - Layanan Jasa Service dan Instalasi Barang Elektronik</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="{{ url('/dashboard') }}" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">Volta</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="{{ url('/dashboard') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Service</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Contact Us</a>

                <!--LOGIN REGISTER NANTI HREF NYA DIGANTI-->
                <li class="login-form"> <a href="" class="nav-item nav-link">Register</a></li>
                <li class="login-form"> <a href="" class="nav-item nav-link">Login</a></li>

                <a href="{{ url('/dashboard') }}" class="nav-item nav-link">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-4">About Us</h1>
                        <p class="mb-4 pb-2">Volta adalah perusahaan terkemuka yang menghadirkan solusi lengkap dalam bidang jasa perbaikan dan pemasangan perangkat elektronik. Dengan tim ahli yang berdedikasi, kami menyediakan layanan service yang handal dan instalasi perangkat elektronik yang canggih. Keamanan, kenyamanan, dan kepuasan pelanggan adalah prioritas utama kami. Percayakan kebutuhan elektronik Anda kepada Volta untuk pengalaman pelayanan terbaik.</p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="img/icon/icon-1.png" alt="Icon">
                                    </div>
                                    <div class="ms-4 align-items-center">
                                        <h2 class="mb-1" data-toggle="counter-up">2556</h2>
                                        <p class="fw-medium text-primary mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">2556</h2>
                                        <p class="fw-medium text-primary mb-0">Service Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary rounded-pill py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-5">Why Choose Us</h1>
                        <p class="mb-4 pb-2">Memilih jasa Volta untuk perbaikan dan instalasi barang elektronik adalah keputusan cerdas karena kami menyajikan solusi handal dan berkualitas. Dengan tim profesional kami, Anda dapat mengandalkan layanan cepat, akurat, dan terpercaya, menjadikan pengalaman pelanggan yang tanpa kesulitan dan memberikan hasil yang memuaskan.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="img/icon/trust.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Layanan</p>
                                        <h5 class="mb-0">Terpercaya</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="img/icon/quality.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="img/icon/customer-service.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">24/7 Hours</p>
                                        <h5 class="mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/why.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Surabaya, Gubeng, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0000 0000 0000</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>volta@center.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Layanan Servis </h5>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Perbaikan Komputer</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">TV</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">AC</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Mesin Cuci</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Microwave dan Oven</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Kulkas</a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Instalasi</h5>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">AC</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Mesin Cuci</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Microwave dan Oven</a>
                        <a class="btn btn-link" href="{{ url('/dashboard') }}">Kulkas</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid py-4" style="background: #000000;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Volta 12</a>, All Right Reserved.
                    </div>
                    {{-- <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>Distributed By <a class="border-bottom" href="https://themewagon.com/" >Themewagon</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>


