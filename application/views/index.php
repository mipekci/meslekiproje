<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>İpekçi Sürücü Kursu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Işık caddesi, Merkez, Mardin</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Pazartesi - Cuma : 09.00 - 18.00</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>0482 213 34 74</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php echo base_url('')?>" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>İpekçi Sürücü Kursu</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url('')?>" class="nav-item nav-link active">Ana Sayfa</a>
                <a href="#" class="nav-item nav-link">Kurumsal</a>
                <a href="#" class="nav-item nav-link">Kurslar</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sayfalar</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">Özellikler</a>
                        <a href="#" class="dropdown-item">Randevu</a>
                        <a href="#" class="dropdown-item">Kadromuz</a>
                        <a href="#" class="dropdown-item">Referanslar</a>
                    </div>
                </div>
                <a href="<?php echo base_url("main/contact")?>" class="nav-item nav-link">İletişim</a>
            </div>
            <?php if (!$signed_in) {?>
                <a href="<?php echo base_url('admin/login')?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Admin girişi<i class="fa fa-arrow-right ms-3"></i></a>
            <?php } else {?>
                <a href="<?php echo base_url('/panel')?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Yönetici paneli<i class="fa fa-arrow-right ms-3"></i></a>
            <?php }?>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Uzman Eğitmenlerle Sürüş Deneyiminizi Geliştirin.</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Daha fazla bilgi edin</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Kurslarımız</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Güvenli Yarınlar İçin Şimdi Öğrenin.</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Daha fazla bilgi edin</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Kurslarımız</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Önceki</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sonraki</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Tecrübeli Ekip</h5>
                                <span>Tecrübeli eğitimcilerimiz samimi bir ortamda beraber akılda kalıcı, sınava yönelik eğitim vermektedir.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Uygulamalı Eğitim</h5>
                                <span>Sembolik araç motoru, şasesi ve daha fazlası ile görerek dokunarak öğretme prensibimiz vardır.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Son Model Araçlar</h5>
                                <span>Son model, manuel ve otomatik vitesli araçlarımızla en kaliteli şekilde eğitim vermekteyiz.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.png" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Hakkımızda</h6>
                        <h1 class="display-6 mb-4">Öğrencilerin İlk Denemede Testi Geçmelerine ve Lisans Almalarına Yardımcı Oluyoruz</h1>
                        <p>İpekçi Sürücü Kursu, sürüş eğitimi ve güvenli sürüş konularında uzmanlaşmış öncü bir kuruluştur. Misyonumuz, her bireye güvenli sürüş becerilerini kazandırmak ve trafikte daha bilinçli, sorumlu ve yetkin sürücüler olmalarını sağlamaktır.</p>
                        <p class="mb-4">İpekçi Sürücü Kursu, tüm özel kurslar gibi Milli Eğitim Bakanlığı’nın denetim ve gözetimi altında hizmet vermektedir. Kursumuz B (otomobil), B(Engelli), B (Otomatik)- A1,A2,A (motosiklet), D (Otobüs), D1(Minibüs),  C (Kamyon) CE (Tır, Çekici), G (İş makinesi) sınıflarında sürücü belgesi verilmektedir. Eğitimlerimiz 28 kişilik ferah sınıflarda genç, profesyonel ve uzman bir kadro tarafından verilmektedir.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>A Sınıfı Ehliyet
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>B Sınıfı Ehliyet
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>C Sınıfı Ehliyet
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>D Sınıfı Ehliyet
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Devamını oku</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:0482 213 34 74">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">0482 213 34 74</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

        
    </body>