<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>M Batik</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.css">
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5" data-aos="zoom-in-down">
                <img src="<?= base_url('assets/img/'.$logo['logo']) ?>" width="120px" height="120px">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" data-aos="zoom-in-down">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#produk"> PRODUK</a></li>
                        <li class="nav-item"><a class="nav-link" href="#keunggulan">KEUNGGULAN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">GALLERY</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tentang">TENTANG</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                    </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="header-container" style="background-image: url(<?= base_url('assets/img/') ?>header.jpg);" width="120px" height="120px">

            <!-- Header-->
            <section id="home">
                <div class="container px-5 header-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start" data-aos="zoom-in-down">
                                <h4 class="display-7 fw-bolder text-white"><?= $jumbotron['jumbotron_top'] ?></h4>
                                <h1 class="display-4 fw-bolder text-white me-sm-3"><?= $jumbotron['jumbotron_bottom'] ?>
                                </h1>
                                <p class="lead fw-normal text-white-50 mb-6"></p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-secondary btn-lg px-7 me-sm-3" href="https://www.instagram.com/batikbumien/">Tentang</a>
                                    <a class="btn btn-outline-light btn-lg px-7" href="">Lainnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center" data-aos="zoom-in-down"><img src="<?= base_url('assets/img/'.$jumbotron['logo']) ?>" width="250px" height="250px"></div>
                    </div>
                </div>
        </div>
        </header>
        <div style="background-image: url(<?= base_url('assets/img/') ?>background.jpg);">
            <!-- Blog preview section-->
            <section class="py-5 blog-preview" id="produk">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center" data-aos="zoom-in-down">
                                <span>
                                    <h1 class="fw-bolder" style="color: #FFD800;;">
                                        <hr>Top Produk
                                        <hr>
                                    </h1>
                                    <p class="lead fw-normal text-muted mb-5"> Berbagai macam jenis motif batik ada di M
                                        Batik Yogyakarta</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5" data-aos="zoom-in">
                        <div class="col-lg-4 mb-5">
                            </script>
                            <div class=" card h-100 shadow border-0">
                                <img class="card-img-top" src="<?= base_url('assets/img/').$top_produk1['img'] ?>" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3"><?= $top_produk1['title'] ?></h5>
                                    </a>
                                    <p class="card-text mb-0"><?= $top_produk1['description'] ?></p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?= base_url('assets/img/').$top_produk2['img'] ?>" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3"><?= $top_produk2['title'] ?></h5>
                                    </a>
                                    <p class="card-text mb-0"><?= $top_produk2['description'] ?></p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?= base_url('assets/img/').$top_produk3['img'] ?>" alt="..." />
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="#!">
                                        <h5 class="card-title mb-3"><?= $top_produk3['title'] ?></h5>
                                    </a>
                                    <p class="card-text mb-0"><?= $top_produk3['description'] ?></p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About section-->
                    <div class="about-container keunggulan" id="keunggulan" data-aos="zoom-in-down">
                        <h1>
                            <hr>KEUNGGULAN
                            <hr>
                        </h1>
                        <div class="row">
                            <div class="col-md-12 col4">
                                <div class="row gx-5 justify-content-center">
                                    <div class="text-center">
                                        <p><?= $keunggulan['content'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page Content-->
                    <section class="py-5" id="gallery">
                        <div class="container px-5 my-5">
                            <div class="text-center mb-5" data-aos="zoom-in-down">
                                <h1 class="fw-bolder">
                                    <hr>Gallery
                                    <hr>
                                </h1>
                                <p class="lead fw-normal text-muted mb-0">Company portfolio</p>
                            </div>
                            <div class="row gx-5">
                            
                            <?php foreach($gallery as $glr ): ?>
                            <div class="col-lg-6">
                                    <div class="position-relative mb-5" data-aos="zoom-in-down">
                                        <img class="img-fluid rounded-3 mb-3" src="<?= base_url('assets/img/').$glr->img;?>" alt="..." />
                                        <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="#!">Project name</a>
                                    </div>
                                </div>
                            <?php endforeach   ?>
                                
                            </div>
                        </div>
                    </section>

                    <!-- Tentang section -->
                    <div class="about-container" id="tentang" data-aos="zoom-in-down">
                        <h1>
                            <hr>TENTANG KAMI
                            <hr>
                        </h1>
                        <div class="row">
                            <div class="col-md-12 col4">
                                <div class="row gx-5 justify-content-center">
                                    <div class="text-center" data-aos="zoom-in-down">
                                        <p><?= $tentangKami_content['content'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to action-->
                    <span></span>

                </div>
            </section>
    </main>
    </div>
    <a href="https://wa.me/+62895379132634" class="floating" target="_blank">
        <i class="fab fa-whatsapp fab-icon"></i>
    </a>
    <!-- contact -->
    <!-- <section id="contact-container"></section>
        <div class="container  hubungi-kami contact">
          
            <h1>contact</h1>
            
        </div>
        <br>
        <span>

        </span>
      Contact cards-->



    <!-- </section> -->

    <!-- contact -->
    <div class="contact-container">
        <div class="row">
            <div class="col-md-4 contact-item" data-aos="zoom-in-down">
                <h3>Lokasi</h3>
                <hr>
                <p><?= $footer['alamat']?></p>
            </div>
            <div class="col-md-4 contact-item" data-aos="zoom-in-down">
                <h3>Marketing</h3>
                <hr>
                <a href="#"><i class="fas fa-envelope"></i></a>
                <a href="#">
                    <p><?= $footer['email']?></p>
                </a>

                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#">
                    <p><?= $footer['whatsapp']?></p>
                </a>



            </div>
            <div class="col-md-4 contact-item" data-aos="zoom-in-down">
                <h3>Sosial Media</h3>
                <hr>
                <a href="https://www.facebook.com/bu.mien.73"><img src="<?= base_url('assets/') ?>img/facebook.png" width="100px" height="83px"></a>
                <a href="https://www.instagram.com/batikbumien/"><img src="<?= base_url('assets/') ?>img/instagram.png" width="100px" height="80px"></a>

            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer id="contact">

    </footer>
    <center>
        <div class="copyrightText">
            <p>copyright © 2022 M Batik. All Rights Reserved</p>
        </div>
    </center>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>