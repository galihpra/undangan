<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DWI PUTRA - Tentang Kami</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?= base_url('asset/'); ?>vendor/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('asset/'); ?>vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>vendor/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?= base_url('asset/'); ?>vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('asset/'); ?>vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('asset/'); ?>vendor/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="<?= base_url('user'); ?>" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white">DWI PUTRA</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url('user'); ?>" class="nav-item nav-link">Home</a>
                    <a href="<?= base_url('user/tentang'); ?>" class="nav-item nav-link active">Tentang Kami</a>
                    <a href="<?= base_url('user/produk'); ?>" class="nav-item nav-link">Produk</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url('user/info_pemesanan'); ?>" class="dropdown-item">Pemesanan</a>
                            <a href="<?= base_url('user/infor_pembayaran'); ?>" class="dropdown-item">Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Kami memberikan layanan <span class="text-primary">Terbaik</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Building Construction</h4>
                        <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna elitr amet kasd diam duo</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">House Renovation</h4>
                        <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna elitr amet kasd diam duo</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Architecture Design</h4>
                        <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna elitr amet kasd diam duo</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-4.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-palette text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Interior Design</h4>
                        <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna elitr amet kasd diam duo</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-5.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tools text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Fixing & Support</h4>
                        <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna elitr amet kasd diam duo</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-paint-brush text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Painting</h4>
                        <p>Duo dolore et diam sed ipsum stet amet duo diam. Rebum amet ut amet sed erat sed sed amet magna elitr amet kasd diam duo</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->