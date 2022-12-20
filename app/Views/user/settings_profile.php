<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/edumall/edumall/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 03:47:29 GMT -->
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
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/vendor/edumall-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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
                    <a class="logo" href="index-main.html"><img src="assets/images/dark-logo.png" alt="Logo" width="148" height="62"></a>
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
                        <li>
                            <a href="/profile">
                                <i class="edumi edumi-follower"></i>
                                <span class="text">Profil Saya</span>
                            </a>
                        </li>
                        <li>
                            <a href="/riwayat_langganan">
                                <i class="edumi edumi-shopping-cart"></i>
                                <span class="text">Riwayat Langganan</span>
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="dashboard-nav__menu-list">
                        <li>
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
    <!-- Dashboard Nav End -->

    <!-- Dashboard Menu Start -->
   
    <!-- Dashboard Menu End -->


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
                            <img src="assets/images/avatar-placeholder.jpg" alt="Avatar" width="90" height="90">
                        </div>
                        <div class="dashboard-header__user-info">
                            <h4 class="dashboard-header__user-name"><span class="welcome-text">Howdy,</span> Adeniyi David</h4>
                            <div class="dashboard-header__user-rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4.50 <span>(12 ratings)</span></p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Dashboard Header Wrapper End -->
            </div>
        </div>
        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Settings</h4>

                <!-- Dashboard Settings Start -->
                <div class="dashboard-settings">

                    <!-- Dashboard Tabs Start -->
                    <div class="dashboard-tabs-menu">
                        <ul>
                            <li><a class="active" href="dashboard-settings.html">Profile</a></li>
                            <li><a href="dashboard-settings-reset-password.html">Reset Password</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->

                    <form action="#">
                        <div class="row gy-6">
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box">

                                    <h4 class="dashboard-content-box__title">Contact information</h4>
                                    <p>Provide your details below to create your account profile</p>

                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">First name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Last name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Job Title</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Phone Number</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Bio</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Twitter</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Facebook</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Instagram</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Linkedin</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Pinterest</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Youtube</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Github</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Dashboard Settings Info End -->

                            </div>
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box">

                                    <h4 class="dashboard-content-box__title">Photo</h4>
                                    <p>Upload your profile photo.</p>

                                    <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile">
                                        <input id="dashboard-photo-dialogue-box" class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" />

                                        <div id="dashboard-cover-area" class="dashboard-settings-profile__cover" data-fallback="assets/images/cover-photo.jpg" style="background-image:url(assets/images/cover-photo.jpg)">
                                            <span class="cover-deleter">
                                                <i class="far fa-trash-alt"></i>
                                            </span>
                                            <div class="overlay">
                                                <button class="cover-uploader" type="button">
                                                    <i class="far fa-camera"></i>&nbsp;
                                                    <span>Update Cover Photo</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div id="photo-meta-area" class="dashboard-settings-profile__photo-meta">
                                            <img src="assets/images/info-icon.svg" alt="icon" />
                                            <span>Profile Photo Size: <strong>200x200</strong> pixels,</span>
                                            <span>Cover Photo Size: <strong>700x430</strong> pixels,</span>
                                            <span class="loader-area">Saving&hellip;</span>
                                        </div>

                                        <div id="profile-photo" class="dashboard-settings-profile__photo" data-fallback="assets/images/avatar-placeholder.jpg" style="background-image:url(assets/images/avatar-placeholder.jpg)">
                                            <div class="overlay">
                                                <i class="far fa-camera"></i>
                                            </div>
                                        </div>

                                        <div id="profile-photo-option" class="dashboard-settings-profile__photo-option">
                                            <span class="profile-photo-uploader"><i class="far fa-upload"></i> Upload Photo</span>
                                            <span class="profile-photo-deleter"><i class="far fa-trash-alt"></i> Delete</span>
                                        </div>
                                    </div>

                                    <div class="dashboard-settings-profile-info">
                                        <label class="dashboard-settings-profile-info__display-name">Display name publicly as</label>
                                        <select>
                                            <option>student</option>
                                            <option>Adeniyi</option>
                                            <option>David</option>
                                            <option selected="selected">Adeniyi David</option>
                                            <option>David Adeniyi</option>
                                        </select>
                                        <p class="dashboard-settings-profile-info__description">The display name is shown in all public fields, such as the author name, instructor name, student name, and name that will be printed on the certificate.</p>
                                    </div>

                                </div>
                                <!-- Dashboard Settings Info End -->

                            </div>
                        </div>

                        <div class="dashboard-settings__btn">
                            <button class="btn btn-primary btn-hover-secondary">Update Profile</button>
                        </div>
                    </form>

                </div>
                <!-- Dashboard Settings End -->
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->

    <!-- Edumall Demo Option Start -->
    <div class="edumall-demo-option">

        <div class="edumall-demo-option__toolbar">
            <button class="toolbar-action demo-open" data-bs-tooltip="tooltip" data-bs-placement="left" title="Select Demo"><i class="far fa-ruler-triangle"></i></button>
            <a class="toolbar-action" href="https://hasthemes.com/contact-us/" data-bs-tooltip="tooltip" data-bs-placement="left" title="Support Channel"><i class="far fa-life-ring"></i></a>
            <a class="toolbar-action" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio" data-bs-tooltip="tooltip" data-bs-placement="left" title="Purchase EduMall"><i class="far fa-shopping-cart"></i></a>
        </div>

        <div class="edumall-demo-option__panel">

            <div class="edumall-demo-option__header">
                <h5 class="edumall-demo-option__title">EduMall - Professional LMS Education Center HTML Template</h5>
                <a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio"><i class="far fa-shopping-cart"></i> Buy Now</a>
            </div>

            <div class="edumall-demo-option__body">
                <!-- <div class="edumall-demo-option-item">
                <a href="" data-bs-tooltip="tooltip" data-bs-placement="top" title="Landing Page">
                    <img src="assets/images/demo/landing.jpg" alt="">
                </a>
            </div> -->
                <div class="edumall-demo-option-item">
                    <a href="index-main.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Main Demo">
                        <img src="assets/images/demo/home-01.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Course Hub">
                        <img src="assets/images/demo/home-02.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Academy">
                        <img src="assets/images/demo/home-03.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Education Center">
                        <img src="assets/images/demo/home-04.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="University">
                        <img src="assets/images/demo/home-05.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Language Academic">
                        <img src="assets/images/demo/home-06.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Single Instructor">
                        <img src="assets/images/demo/home-07.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Dev">
                        <img src="assets/images/demo/home-08.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Art">
                        <img src="assets/images/demo/home-09.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
            </div>

        </div>

    </div>
    <!-- Edumall Demo Option End -->



    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/parallax.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="assets/js/plugins/flatpickr.js"></script>
    <script src="assets/js/plugins/range-slider.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from htmldemo.net/edumall/edumall/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 03:47:35 GMT -->
</html>