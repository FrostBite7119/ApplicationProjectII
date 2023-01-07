<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/edumall/edumall/become-an-instructor.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 03:45:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduMall - LMS & e-Learning Platform Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/edumall-icon.css">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="/assets/css/plugins/aos.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/select2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet"
    />

    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <div class="header-section header-sticky">
            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">
                    <!-- Header Main Wrapper Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a class="header-logo__logo" href="/"><img src="/assets/images/dark-logo.png" width="296" height="64" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Inner Start -->
                        <div class="header-inner">

                            <!-- Header Search Start -->
                            <div class="header-serach">
                                <form action="/search" method="get">
                                    <input type="text" class="header-serach__input" id="kolomSearch" placeholder="Ingin belajar apa hari ini?" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari']; }?>">
                                    <button class="header-serach__btn"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Header Search End -->

                            <!-- Header Navigation Start -->
                            <div class="header-navigation d-none d-xl-block">
                                <nav class="menu-primary">
                                    <ul class="menu-primary__container">
                                        <li><a href="/home"><span>Beranda</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Modul</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Navigation End -->

                            <!-- Header Mini Cart Start -->
                            <?php if(session()->get('role') == "user") :?>
                            <div class="header-action">
                                <a href="/kursus_saya" class="header-action__btn">
                                    <i class="far fa-heart"></i>
                                    <!-- <span class="header-action__number">3</span> -->
                                </a>                
                            </div>
                            <?php endif; ?>
                            <!-- Header Mini Cart End -->

                            <!-- Header User Button Start -->
                            <div class="header-user d-none d-lg-flex">
                                <?php if(session()->get('role') && session()->get('role') != "admin"): ?>
                                    <div class="header-action">
                                        <a href="#" class="header-action__btn" >
                                            <div class="account-profile__avatar">
                                                <img src="/user_profile/<?= session()->get('profile'); ?>">
                                            </div>
                                        </a>
                                        <!-- Header Mini Cart Start -->
                                        <div class="sub-menu-wrap"   id="subMenu">
                                            <!-- Header Mini Cart Product List Start -->
                                             <div class="sub-menu-p">
                                                <div class="user-info">
                                                    <img src="/user_profile/<?= session()->get('profile'); ?>">
                                                    <h3><?php echo $_SESSION['nama']?></h3>
                                                </div>
                                                <hr>
                                                <a href="/profile" class="sub-item">
                                                <span class="material-icons-outlined"> manage_accounts </span>
                                                <p>Profile</p>
                                                </li>
                                                <a href="/login/logoutUser" class="sub-item">
                                                <span class="material-icons-outlined"> logout </span>
                                                <p>Logout</p>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Header Mini Cart End -->
                                    </div>
                                
                                <?php  else :  ?>
                                    <div class="header-user__button">
                                        <button class="header-user__login" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</button>
                                    </div>
                                    <div class="header-user__button">
                                        <button class="header-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
                                    </div>    
                                <?php  endif; ?>
                            </div>
                            <!-- Header User Button End -->

                            <!-- Header Mobile Toggle Start -->
                            <div class="header-toggle">
                                <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                                <button class="header-toggle__btn search-open d-flex d-md-none">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </button>
                            </div>
                            <!-- Header Mobile Toggle End -->

                        </div>
                        <!-- Header Inner End -->

                    </div>
                    <!-- Header Main Wrapper End -->
                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(assets/images/mobile-bg.jpg);">
            

        </div>
        <!-- Offcanvas End -->

        <?= $this->renderSection('content'); ?>

        <!-- Footer Start -->
        <div class="footer-section footer-bg-1">

            <!-- Footer Widget Area Start -->
            <div class="footer-widget-area section-padding-01">
                <div class="container">
                    <div class="row gy-6">
                        <div class="col-lg-12">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget text-center">
                                <a href="#" class="footer-widget__logo"><img src="/assets/images/dark-logo.png" alt="Logo" width="150" height="32"></a>
                                <div class="footer-widget__social">
                                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa"></i></a>
                                </div>
                                <p class="footer-widget__copyright">&copy; 2022 <span> EduMall </span></p>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widget Area End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

        <!-- Log In Modal Start -->
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog modal-dialog-centered modal-login">
                <!-- Modal Wrapper Start -->
                <div class="modal-wrapper">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="fal fa-times"></i></button>    
                    <!-- Modal Content Start -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Login</h5>
                            <p class="modal-description">Belum punya akun? <button type="button" data-bs-toggle="modal" data-bs-target="#registerModal"> Daftar sekarang</button></p>
                        </div>
                        <div class="modal-body">
                            <?php if(session()->getFlashData('info')): ?>
                            <div class="alert alert-primary" role="alert">
                                <?= session()->getFlashData('info'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if(session()->getFlashData('errorLogin')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashData('errorLogin'); ?>
                            </div>
                            <?php endif; ?>
                            <form action="/login" method="post">
                                <div class="modal-form">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Your username or email" name="email" value="<?= old('email'); ?>">
                                </div>
                                <div class="modal-form">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?= old('password'); ?>">
                                </div>
                                <div class="modal-form">
                                    <button type="submit" class="btn btn-primary btn-hover-secondary w-100">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal Content End -->
    
                </div>
                <!-- Modal Wrapper End -->
    
            </div>
        </div>
        <!-- Log In Modal End -->

    <!-- Log In Modal Start -->
    <div class="modal fade" id="registerModal">
        <div class="modal-dialog modal-dialog-centered modal-register">

            <!-- Modal Wrapper Start -->
            <div class="modal-wrapper">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fal fa-times"></i></button>

                <!-- Modal Content Start -->
                <form action="/register" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Daftar</h5>
                            <p class="modal-description">Sudah punya akun? <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></p>
                        </div>
                        <div class="modal-body">
                            <?php if(session()->getFlashData('error')) : ?>
                                <?= session()->getFlashData('error'); ?>
                            <?php endif; ?>
                            <div class="row gy-5">
                                <div class="col-md-6">
                                    <div class="modal-form">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= old('nama'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="number" class="form-control" placeholder="Nomor Telepon" name="nomor-telepon" value="<?= old('nomor-telepon'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?= old('email'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= old('alamat'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?= old('password'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modal-form">
                                        <label class="form-label">Masukkan Kembali Password</label>
                                        <input type="password" class="form-control" placeholder="Masukkan Kembali Password" id="password_conf" name="password_conf" value="<?= old('password_conf'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-form">
                                        <button type="submit" class="btn btn-primary btn-hover-secondary w-100">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Modal Content End -->

            </div>
            <!-- Modal Wrapper End -->

        </div>
    </div>
    <!-- Log In Modal End -->
    <div class="modal fade" id="modalInfo">
        <div class="modal-dialog modal-dialog-centered modal-register">
            <!-- Modal Wrapper Start -->
            <div class="modal-wrapper">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                <!-- Modal Content Start -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Info</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row gy-5">
                                <div class="col-md-12">
                                    <div class="modal-form">
                                        <?php if(session()->getFlashdata('informasi')) : ?>
                                            <?= session()->getFlashdata('informasi') ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-form">
                                        <button type="submit" class="btn btn-primary btn-hover-secondary w-100" data-bs-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Modal Content End -->
            </div>
            <!-- Modal Wrapper End -->
        </div>
    </div>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="/assets/js/plugins/aos.js"></script>
    <script src="/assets/js/plugins/parallax.js"></script>
    <script src="/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="/assets/js/plugins/nice-select.min.js"></script>
    <script src="/assets/js/plugins/glightbox.min.js"></script>
    <script src="/assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="/assets/js/plugins/flatpickr.js"></script>
    <script src="/assets/js/plugins/range-slider.js"></script>
    <script src="/assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="/assets/js/main.js"></script>

    <script>
        <?php if(session()->getFlashData('error')) : ?>
        $(document).ready(function(){
             $("#registerModal").modal('show');
         });
        <?php endif; ?>

        <?php if(session()->getFlashData('info')) : ?>
        $(document).ready(function(){
             $("#loginModal").modal('show');
         });
        <?php endif; ?>
        <?php if(session()->getFlashData('errorLogin')) : ?>
        $(document).ready(function(){
             $("#loginModal").modal('show');
         });
        <?php endif; ?>
        <?php if(session()->getFlashData('informasi')) : ?>
        $(document).ready(function(){
             $("#modalInfo").modal('show');
         });
        <?php endif; ?>
    </script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <script>
        document.getElementById('kolomSearch').addEventListener('input', function(){
            document.getElementById('cariData').value= document.getElementById('kolomSearch').value;
        });
    </script>
</body>
</html>