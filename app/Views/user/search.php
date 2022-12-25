<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>

<!-- Page Banner Section Start -->
<div class="page-banner bg-color-05">
            <div class="page-banner__wrapper">
                <div class="container">
                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center" style="padding-top: 65px">
                        <h2 class="page-banner__main-title">Modul</h2>
                    </div>
                    <!-- Page Banner Caption End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(assets/images/mobile-bg.jpg);">
            <div class="offcanvas-header bg-white">
                <div class="offcanvas-logo">
                    <a class="offcanvas-logo__logo" href="#"><img src="assets/images/dark-logo.png" alt="Logo"></a>
                </div>
                <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i class="fal fa-times"></i></button>
            </div>

            <div class="offcanvas-body">
                <nav class="canvas-menu">
                    <ul class="offcanvas-menu">
                        <li><a class="active" href="#"><span>Home</span></a>

                            <ul class="mega-menu">
                                <li>
                                    <!-- Mega Menu Content Start -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="menu-content-list">
                                                    <a href="index-main.html" class="menu-content-list__link">Main Demo <span class="badge hot">Hot</span></a>
                                                    <a href="index-course-hub.html" class="menu-content-list__link">Course Hub</a>
                                                    <a href="index-online-academy.html" class="menu-content-list__link">Online Academy <span class="badge hot">Hot</span></a>
                                                    <a href="index-university.html" class="menu-content-list__link">University</a>
                                                    <a href="index-education-center.html" class="menu-content-list__link">Education Center <span class="badge hot">Hot</span></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="menu-content-list">
                                                    <a href="index-language-academic.html" class="menu-content-list__link">Language Academic</a>
                                                    <a href="index-single-instructor.html" class="menu-content-list__link">Single Instructor</a>
                                                    <a href="index-dev.html" class="menu-content-list__link">Dev <span class="badge new">New</span></a>
                                                    <a href="index-online-art.html" class="menu-content-list__link">Online Art <span class="badge new">New</span></a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="menu-content-banner" style="background-image: url(assets/images/home-megamenu-bg.jpg);">
                                                    <h4 class="menu-content-banner__title">Achieve Your Goals With EduMall</h4>
                                                    <a href="#" class="menu-content-banner__btn btn btn-primary btn-hover-secondary">Purchase now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Mega Menu Content Start -->
                                </li>
                            </ul>




                        </li>
                        <li>
                            <a href="#"><span>Courses</span></a>
                            <ul class="sub-menu">
                                <li><a href="course-grid-01.html"><span>Grid Basic Layout</span></a></li>
                                <li><a href="course-grid-02.html"><span>Grid Modern Layout</span></a></li>
                                <li><a href="course-grid-left-sidebar.html"><span>Grid Left Sidebar</span></a></li>
                                <li><a href="course-grid-right-sidebar.html"><span>Grid Right Sidebar</span></a></li>
                                <li><a href="course-list.html"><span>List Basic Layout</span></a></li>
                                <li><a href="course-list-left-sidebar.html"><span>List Left Sidebar</span></a></li>
                                <li><a href="course-list-right-sidebar.html"><span>List Right Sidebar</span></a></li>
                                <li><a href="course-category.html"><span>Category Page</span></a></li>
                                <li>
                                    <a href="#"><span>Single Layout</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="course-single-layout-01.html"><span>Layout 01</span></a></li>
                                        <li><a href="course-single-layout-02.html"><span>Layout 02</span></a></li>
                                        <li><a href="course-single-layout-03.html"><span>Layout 03</span></a></li>
                                        <li><a href="course-single-layout-04.html"><span>Layout 04</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blog</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid-01.html"><span>Grid Basic Layout</span></a></li>
                                <li><a href="blog-grid-02.html"><span>Grid Wide</span></a></li>
                                <li><a href="blog-grid-left-sidebar.html"><span>Grid Left Sidebar</span></a></li>
                                <li><a href="blog-grid-right-sidebar.html"><span>Grid Right Sidebar</span></a></li>
                                <li><a href="blog-list-style-01.html"><span>List Layout 01</span></a></li>
                                <li><a href="blog-list-style-02.html"><span>List Layout 02</span></a></li>
                                <li>
                                    <a href="#"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details-left-sidebar.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-details-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-details.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="become-an-instructor.html"><span>Become an Instructor</span></a></li>
                                <li>
                                    <a href="instructors.html"><span>Instructor</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="dashboard-my-courses.html"><span>My Courses</span></a></li>
                                        <li><a href="dashboard-announcement.html"><span>Announcements</span></a></li>
                                        <li><a href="dashboard-withdraw.html"><span>Withdrawals</span></a></li>
                                        <li><a href="dashboard-quiz-attempts.html"><span>Quiz Attempts</span></a></li>
                                        <li><a href="dashboard-question-answer.html"><span>Question & Answer</span></a></li>
                                        <li><a href="dashboard-assignments.html"><span>Assignments</span></a></li>
                                        <li><a href="dashboard-students.html"><span>My Students</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html"><span>About us</span></a></li>
                                <li><a href="about-02.html"><span>About us 02</span></a></li>
                                <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                <li><a href="contact-us-02.html"><span>Contact us 02</span></a></li>
                                <li><a href="membership-plans.html"><span>Membership plans</span></a></li>
                                <li><a href="faqs.html"><span>FAQs</span></a></li>
                                <li><a href="404-page.html"><span>404 Page</span></a></li>
                                <li>
                                    <a href="#"><span>Dashboard</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="dashboard-index.html"><span>Dashboard</span></a></li>
                                        <li><a href="dashboard-student-index.html"><span>Dashboard Student</span></a></li>
                                        <li><a href="dashboard-profile.html"><span>My Profile</span></a></li>
                                        <li><a href="dashboard-all-course.html"><span>Enrolled Courses</span></a></li>
                                        <li><a href="dashboard-wishlist.html"><span>Wishlist</span></a></li>
                                        <li><a href="dashboard-reviews.html"><span>Reviews</span></a></li>
                                        <li><a href="dashboard-my-quiz-attempts.html"><span>My Quiz Attempts</span></a></li>
                                        <li><a href="dashboard-purchase-history.html"><span>Purchase History</span></a></li>
                                        <li><a href="dashboard-settings.html"><span>Settings</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Features</span></a>
                            <ul class="sub-menu">
                                <li><a href="#"><span>Events</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="event-grid-sidebar.html"><span>Event Listing 01</span></a></li>
                                        <li><a href="event-grid.html"><span>Event Listing 02</span></a></li>
                                        <li><a href="event-list.html"><span>Event Listing 03</span></a></li>
                                        <li><a href="event-list-sidebar.html"><span>Event Listing 04</span></a></li>
                                        <li>
                                            <a href="#"><span>Single Layouts</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="event-details-layout-01.html"><span>Layout 01</span></a></li>
                                                <li><a href="event-details-layout-02.html"><span>Layout 02</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><span>Shop</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-default.html"><span>Shop – Default</span></a></li>
                                        <li><a href="shop-left-sidebar.html"><span>Shop – Left Sidebar</span></a></li>
                                        <li><a href="shop-right-sidebar.html"><span>Shop – Right Sidebar</span></a></li>
                                        <li><a href="my-account.html"><span>My account</span></a></li>
                                        <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                                        <li><a href="cart.html"><span>Cart</span></a></li>
                                        <li><a href="cart-empty.html"><span>Cart Empty</span></a></li>
                                        <li><a href="checkout.html"><span>Checkout</span></a></li>
                                        <li>
                                            <a href="#"><span>Single Layouts</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-single-list-left-sidebar.html"><span>List – Left Sidebar</span></a></li>
                                                <li><a href="shop-single-list-right-sidebar.html"><span>List – Right Sidebar</span></a></li>
                                                <li><a href="shop-single-list-no-sidebar.html"><span>List – No Sidebar</span></a></li>
                                                <li><a href="shop-single-tab-left-sidebar.html"><span>Tabs – Left Sidebar</span></a></li>
                                                <li><a href="shop-single-tab-right-sidebar.html"><span>Tabs – Right Sidebar</span></a></li>
                                                <li><a href="shop-single-tab-no-sidebar.html"><span>Tabs – No Sidebar</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="zoom-meetings.html"><span>Zoom Meetings</span></a></li>
                                <li><a href="zoom-meetings-single.html"><span>Zoom Meeting Single</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header User Button Start -->
            <div class="offcanvas-user d-lg-none">
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__login btn btn-secondary btn-hover-secondarys" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
                </div>
                <div class="offcanvas-user__button">
                    <button class="offcanvas-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
                </div>
            </div>
            <!-- Header User Button End -->

        </div>
        <!-- Offcanvas End -->

        <!-- Courses Start -->
        <div class="courses-section section-padding-01">
            <div class="container">

                <!-- Archive Filter Bars Start -->
                <div class="archive-filter-bars">

                    <div class="archive-filter-bar">
                        <p>We found <span>101</span> courses available for you</p>
                    </div>

                    <div class="archive-filter-bar">

                        <div class="filter-bar-wrapper">
                            <span>See</span>
                            <ul class="nav">
                                <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i class="fas fa-th"></i></button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#list"><i class="fas fa-bars"></i></button></li>
                            </ul>
                            <button class="btn btn-light btn-hover-primary collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilter">
                                <i class="fal fa-filter"></i>
                                Filters
                            </button>
                        </div>

                    </div>

                </div>
                <!-- Archive Filter Bars End -->

                <!-- Filter Collapse Start -->
                <div class="filter-collapse collapse" id="collapseFilter">
                    <div class="card card-body">
                        <form action="/search" method="get">
                            <input type="hidden" id="cariData" name="cari" value="<?php if(isset($_GET['cari'])){echo $_GET['cari']; }?>">                        
                            <div class="row row-cols-xl-5 gy-6">
                                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                                    <!-- Widget Filter Start -->
                                    <div class="widget-filter">
                                        <h4 class="widget-filter__title">Kategori</h4>
                                        <select class="form-select" aria-label="Default select example" name="kategori">
                                            <option selected value="">Pilih Kategori</option>
                                            <option value="Android">Android</option>
                                            <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                                            <option value="Web">Web</option>
                                        </select>                                 
                                    </div>
                                    <!-- Widget Filter End -->
                                </div>
                                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                                    <!-- Widget Filter Start -->
                                    <div class="widget-filter">
                                        <h4 class="widget-filter__title">Rating</h4>

                                        <!-- Widget Filter Wrapper Start -->
                                        <div class="widget-filter__wrapper widgetScroll">
                                            <ul class="widget-filter__list">
                                                <li>
                                                    <!-- Widget Filter Item Start -->
                                                    <div class="widget-filter__item">
                                                        <input type="radio" id="rating1" name="sort-by" value="5">
                                                        <label for="rating1">
                                                            <span class="star-line">
                                                            <span class="star" style="width: 100%;"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- Widget Filter Item End -->
                                                </li>
                                                <li>
                                                    <!-- Widget Filter Item Start -->
                                                    <div class="widget-filter__item">
                                                        <input type="radio" id="rating2" name="sort-by" value="4">
                                                        <label for="rating2">
                                                            <span class="star-line">
                                                                <span class="star" style="width: 80%;"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- Widget Filter Item End -->
                                                </li>
                                                <li>
                                                    <!-- Widget Filter Item Start -->
                                                    <div class="widget-filter__item">
                                                        <input type="radio" id="rating3" name="sort-by" value="3">
                                                        <label for="rating3">
                                                            <span class="star-line">
                                                                <span class="star" style="width: 60%;"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- Widget Filter Item End -->
                                                </li>
                                                <li>
                                                    <!-- Widget Filter Item Start -->
                                                    <div class="widget-filter__item">
                                                        <input type="radio" id="rating4" name="sort-by" value="2">
                                                        <label for="rating4">
                                                            <span class="star-line">
                                                                <span class="star" style="width: 40%;"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- Widget Filter Item End -->
                                                </li>
                                                <li>
                                                    <!-- Widget Filter Item Start -->
                                                    <div class="widget-filter__item">
                                                        <input type="radio" id="rating5" name="sort-by" value="1">
                                                        <label for="rating5">
                                                            <span class="star-line">
                                                                <span class="star" style="width: 20%;"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- Widget Filter Item End -->
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Widget Filter Wrapper End -->
                                    </div>
                                    <!-- Widget Filter End -->

                                </div>
                                <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">

                                    <!-- Widget Filter Start -->
                                    <div class="widget-filter">
                                        <h4 class="widget-filter__title">Tingkat Kesulitan</h4>
                                        <select class="form-select" aria-label="Default select example" name="level">
                                            <option selected value="">Pilih Tingkat Kesulitan</option>
                                            <option value="mudah">Mudah</option>
                                            <option value="menengah">Menengah</option>
                                            <option value="sulit">Sulit</option>
                                        </select>                                 
                                    </div>
                                    <!-- Widget Filter End -->

                                </div>
                                <div class="col-xl-12 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-end">

                                    <button type="submit" class="header-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Filter</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Filter Collapse End -->

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid">

                        <div class="row gy-6">
                            <?php foreach($modul as $dataModul): ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="/cover/<?= $dataModul['cover'] ?>" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <?php if($dataModul['level'] == "mudah") :?>
                                            <span class="course-info__badge-text badge-beginner">Mudah</span>
                                        <?php elseif($dataModul['level'] == "menengah") : ?>
                                            <span class="course-info__badge-text badge-intermediate">Menengah</span>
                                        <?php elseif($dataModul['level'] == "sulit") : ?>
                                            <span class="course-info__badge-text badge-hard">Sulit</span>
                                        <?php endif; ?>                                    
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html"><?= $dataModul['judul_modul'] ?></a></h3>
                                        <?php if($dataModul['kategori'] == "Android") :?>
                                            <span class="badge rounded-pill bg-success">Android</span>
                                        <?php elseif($dataModul['kategori'] == "Web") : ?>
                                            <span class="badge rounded-pill bg-info">Web</span>
                                        <?php elseif($dataModul['kategori'] == "Pemrograman Dasar") : ?>
                                            <span class="badge rounded-pill bg-warning">Pemrograman Dasar</span>
                                        <?php endif; ?>
                                        <div class="course-info-02__rating">

                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 100%;"></div>
                                            </div>

                                            <span>(2)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course End -->
                            </div>
                            <?php endforeach; ?>                                                  
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list">

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 5 Lessons</span>
                                    <span><i class="far fa-clock"></i> 2.3 hours</span>
                                    <span><i class="far fa-sliders-h"></i> All Levels</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>Negotiation is a skill well worth mastering – by putting …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="sale-price">$42.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-list-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <div class="rating-average">
                                            <span class="rating-average__average">5.0</span>
                                            <span class="rating-average__total">/5</span>
                                        </div>

                                        <p class="course-list-info__rating-count">(2 ratings)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 7 Lessons</span>
                                    <span><i class="far fa-clock"></i> 3.5 hours</span>
                                    <span><i class="far fa-sliders-h"></i> All Levels</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>If you’re someone who has a LOT on their plate …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="sale-price">$29.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 5 Lessons</span>
                                    <span><i class="far fa-clock"></i> 2.3 hours</span>
                                    <span><i class="far fa-sliders-h"></i> All Levels</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>From Setup to Deployment, this course covers it all! You’ll learn all about Components, Directives, Services, Forms, Http Access, Authentication, …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="sale-price">$49.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-list-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <div class="rating-average">
                                            <span class="rating-average__average">5.0</span>
                                            <span class="rating-average__total">/5</span>
                                        </div>

                                        <p class="course-list-info__rating-count">(2 ratings)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                                <div class="course-header__badge">
                                    <span class="free">Free</span>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 5 Lessons</span>
                                    <span><i class="far fa-clock"></i> 2.3 hours</span>
                                    <span><i class="far fa-sliders-h"></i> All Levels</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>Consulting Approach to Problem Solving</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-list-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <div class="rating-average">
                                            <span class="rating-average__average">5.0</span>
                                            <span class="rating-average__total">/5</span>
                                        </div>

                                        <p class="course-list-info__rating-count">(1 ratings)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-5.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                                <div class="course-header__badge">
                                    <span class="free">Free</span>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2020</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 7 Lessons</span>
                                    <span><i class="far fa-clock"></i> 22.5 hours</span>
                                    <span><i class="far fa-sliders-h"></i> Beginner</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>Our program is different than the rest of the materials …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-6.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                                <div class="course-header__badge">
                                    <span class="free">Free</span>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Become a Product Manager | Learn the Skills & Get the Job</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 6 Lessons</span>
                                    <span><i class="far fa-clock"></i> 22.5 hours</span>
                                    <span><i class="far fa-sliders-h"></i> All Levels</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>Negotiation is a skill well worth mastering – by putting …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-list-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <div class="rating-average">
                                            <span class="rating-average__average">5.0</span>
                                            <span class="rating-average__total">/5</span>
                                        </div>

                                        <p class="course-list-info__rating-count">(1 ratings)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Mechanical Engineering and Electrical Engineering Explained</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 5 Lessons</span>
                                    <span><i class="far fa-clock"></i> 9.9 hours</span>
                                    <span><i class="far fa-sliders-h"></i> Beginner</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>Electronics has become important to many fields; communications, automotive, security, …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="sale-price">$84.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                        <!-- Course List Start -->
                        <div class="course-list-item">
                            <div class="course-list-header">
                                <div class="course-list-header__thumbnail ">
                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="270" height="181"></a>
                                </div>
                            </div>
                            <div class="course-list-info">
                                <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Learn Algebra The Easy Way!</a></h3>
                                <div class="course-list-info__meta">
                                    <span><i class="far fa-play-circle"></i> 5 Lessons</span>
                                    <span><i class="far fa-clock"></i> 8.5 hours</span>
                                    <span><i class="far fa-sliders-h"></i> Beginner</span>
                                </div>
                                <div class="course-list-info__description">
                                    <p>This course will begin with an overview of data types …</p>
                                </div>
                                <div class="course-list-info__action">
                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                </div>
                                <div class="course-list-info__footer">
                                    <div class="course-list-info__price">
                                        <span class="sale-price">$42.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-list-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <div class="rating-average">
                                            <span class="rating-average__average">5.0</span>
                                            <span class="rating-average__total">/5</span>
                                        </div>

                                        <p class="course-list-info__rating-count">(2 ratings)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course List End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->
<?= $this->endSection(); ?>