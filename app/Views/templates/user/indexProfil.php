<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduMall - LMS & e-Learning Platform Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

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

    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body class="dashboard-page">

    <!-- Dashboard Nav Start -->
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

        <!-- Dashboard Nav Wrapper Start -->
        <div class="dashboard-nav__wrapper">
            <!-- Dashboard Nav Header Start -->
            <div class="offcanvas-header dashboard-nav__header dashboard-nav-header">

                <div class="dashboard-nav__toggle d-xl-none">
                    <button class="toggle-close" data-bs-dismiss="offcanvas"><i class="fal fa-times"></i></button>
                </div>

                <div class="dashboard-nav__logo">
                    <a class="logo" href="/"><img src="/assets/images/dark-logo.png" alt="Logo" width="148" height="62"></a>
                </div>

            </div>
            <!-- Dashboard Nav Header End -->

            <!-- Dashboard Nav Content Start -->
            <div class="offcanvas-body dashboard-nav__content navScroll">

                <!-- Dashboard Nav Menu Start -->
                <div class="dashboard-nav__menu">
                    <ul class="dashboard-nav__menu-list">
                        <li>
                            <a href="/user">
                                <i class="edumi edumi-layers"></i>
                                <span class="text">Home</span>
                            </a>
                        </li>
                        <li <?php $request = \Config\Services::request();
                            if ($request->uri->getSegment(1) == "profile") {
                                echo "class=\"active\"";
                            } ?>>
                            <a href="/profile">
                                <i class="edumi edumi-follower"></i>
                                <span class="text">Profil Saya</span>
                            </a>
                        </li>
                        <li <?php $request = \Config\Services::request();
                            if ($request->uri->getSegment(1) == "riwayat_langganan") {
                                echo "class=\"active\"";
                            } ?>>
                            <a href="/riwayat_langganan">
                                <i class="edumi edumi-shopping-cart"></i>
                                <span class="text">Riwayat Langganan</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="dashboard-nav__menu-list">
                        <li <?php $request = \Config\Services::request();
                            if ($request->uri->getSegment(1) == "settings_profile") {
                                echo "class=\"active\"";
                            } ?>>
                            <a href="/settings_profile">
                                <i class="edumi edumi-settings"></i>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="/login/logoutUser">
                                <i class="edumi edumi-sign-out"></i>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dashboard Nav Menu End -->

            </div>
            <!-- Dashboard Nav Content End -->

            <div class="offcanvas-footer"></div>
        </div>
        <!-- Dashboard Nav Wrapper End -->

    </div>
    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <div class="dashboard-header">
            <div class="container">
                <!-- Dashboard Header Wrapper Start -->
                <div class="dashboard-header__wrap">

                    <div class="dashboard-header__toggle-menu d-xl-none">
                        <button class="toggle-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDashboard">
                            <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M18.7179688,2.60581293 L1.28207031,2.60581293 C0.573828125,2.60581293 0,2.02491559 0,1.30798783 C0,0.591060076 0.573828125,0.0101231939 1.28207031,0.0101231939 L18.7179688,0.0101231939 C19.4261719,0.0101231939 20,0.591020532 20,1.30798783 C20,2.02495513 19.4261719,2.60581293 18.7179688,2.60581293 Z"></path>
                                <path d="M11.5384766,10.5957293 L1.28207031,10.5957293 C0.573828125,10.5957293 2.91322522e-13,10.0147924 2.91322522e-13,9.29786464 C2.91322522e-13,8.58093688 0.573828125,8 1.28207031,8 L11.5384766,8 C12.2466797,8 12.8205469,8.58089734 12.8205469,9.29786464 C12.8205469,10.0148319 12.2466797,10.5957293 11.5384766,10.5957293 Z"></path>
                                <path d="M18.7179688,17.6 L1.28207031,17.6 C0.573828125,17.6 0,17.0628683 0,16.4 C0,15.7371317 0.573828125,15.2 1.28207031,15.2 L18.7179688,15.2 C19.4261719,15.2 20,15.7370952 20,16.4 C20,17.0628683 19.4261719,17.6 18.7179688,17.6 Z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="dashboard-header__user">
                        <div class="dashboard-header__user-avatar">
                            <img src="/user_profile/<?= $user['profile'] ?>" alt="Avatar" width="90" height="90">
                        </div>
                        <div class="dashboard-header__user-info">
                            <h4 class="dashboard-header__user-name"><span class="welcome-text"><?= session()->get('nama'); ?></span></h4>
                            <div class="dashboard-header__user-rating">
                                <p><?= session()->get('email'); ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Dashboard Header Wrapper End -->
            </div>
        </div>
        <!-- Dashboard Header End -->


        <?= $this->renderSection('content'); ?>

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
                                        <?php if (session()->getFlashdata('informasi')) : ?>
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
    </main>
    <!-- Dashboard Main Wrapper End -->

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
        <?php if (session()->getFlashData('informasi')) : ?>
            $(document).ready(function() {
                $("#modalInfo").modal('show');
            });
        <?php endif; ?>
    </script>

</body>

</html>