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
                        <div class="row row-cols-xl-5 gy-6">
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Sort by</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio1" checked name="sort-by">
                                                    <label for="radio1">Latest</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio2" name="sort-by">
                                                    <label for="radio2">Oldest</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio3" name="sort-by">
                                                    <label for="radio3">Course Title (a-z)</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio4" name="sort-by">
                                                    <label for="radio4">Course Title (z-a)</label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Categories</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories1" name="sort-by">
                                                    <label for="categories1">Art & Design <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories2" name="sort-by">
                                                    <label for="categories2">Business <span>(12)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories3" name="sort-by">
                                                    <label for="categories3">Data Science <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories4" name="sort-by">
                                                    <label for="categories4">Development <span>(10)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories5" name="sort-by">
                                                    <label for="categories5">Finance <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories6" name="sort-by">
                                                    <label for="categories6">Health & Fitness <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories7" name="sort-by">
                                                    <label for="categories7">Lifestyle <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories8" name="sort-by">
                                                    <label for="categories8">Marketing <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories9" name="sort-by">
                                                    <label for="categories9">Music <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories10" name="sort-by">
                                                    <label for="categories10">Personal Development <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories11" name="sort-by">
                                                    <label for="categories11">Photography <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories12" name="sort-by">
                                                    <label for="categories12">Teaching & Academics <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Instructor</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor1" name="sort-by">
                                                    <label for="instructor1">Donald Logan <span>(11)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor2" name="sort-by">
                                                    <label for="instructor2">Emilee Logan <span>(12)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor3" name="sort-by">
                                                    <label for="instructor3">Nahla Jones <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor4" name="sort-by">
                                                    <label for="instructor4">Oliver Porter <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor5" name="sort-by">
                                                    <label for="instructor5">Foley Patrik <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor6" name="sort-by">
                                                    <label for="instructor6">Tomi Hensley <span>(5)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor7" name="sort-by">
                                                    <label for="instructor7">Alex Itzel <span>(5)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor8" name="sort-by">
                                                    <label for="instructor8">parra <span>(6)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Price</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio5" checked name="price">
                                                    <label for="radio5">All <span>(101)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio6" name="price">
                                                    <label for="radio6">Free <span>(6)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio7" name="price">
                                                    <label for="radio7">Paid <span>(95)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Rating</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating1" name="sort-by">
                                                    <label for="rating1">
                                                        <span class="star-line">
                                                        <span class="star" style="width: 100%;"></span>
                                                        </span>

                                                        <span>(07)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating2" name="sort-by">
                                                    <label for="rating2">
                                                        <span class="star-line">
                                                        <span class="star" style="width: 80%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating3" name="sort-by">
                                                    <label for="rating3">
                                                        <span class="star-line">
                                                        <span class="star" style="width: 60%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating4" name="sort-by">
                                                    <label for="rating4">
                                                        <span class="star-line">
                                                        <span class="star" style="width: 40%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating5" name="sort-by">
                                                    <label for="rating5">
                                                        <span class="star-line">
                                                        <span class="star" style="width: 20%;"></span>
                                                        </span>

                                                        <span>(0)</span>
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
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Language</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language1" name="sort-by">
                                                    <label for="language1">English <span>(21)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language2" name="sort-by">
                                                    <label for="language2">French <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language3" name="sort-by">
                                                    <label for="language3">German <span>(5)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language4" name="sort-by">
                                                    <label for="language4">Italian <span>(6)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language5" name="sort-by">
                                                    <label for="language5">Finance <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language6" name="sort-by">
                                                    <label for="language6">Japanese <span>(1)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language7" name="sort-by">
                                                    <label for="language7">Korean <span>(5)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language8" name="sort-by">
                                                    <label for="language8">Russian <span>(6)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language9" name="sort-by">
                                                    <label for="language9">Spanish <span>(5)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Level</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level1" name="sort-by">
                                                    <label for="level1">All Levels <span>(50)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level2" name="sort-by">
                                                    <label for="level2">Beginner <span>(32)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level3" name="sort-by">
                                                    <label for="level3">Intermediate <span>(17)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level4" name="sort-by">
                                                    <label for="level4">Expert <span>(2)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Filter by duration</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper widgetScroll">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration1" name="sort-by">
                                                    <label for="duration1">Less than 2 hours <span>(57)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration2" name="sort-by">
                                                    <label for="duration2">3 - 6 hours <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration3" name="sort-by">
                                                    <label for="duration3">7 - 16 hours <span>(10)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration4" name="sort-by">
                                                    <label for="duration4">17+ Hours <span>(27)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filter Collapse End -->

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid">

                        <div class="row gy-6">
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Communications</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Negotiation is a skill well worth mastering – by putting …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Productivity</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                        <div class="course-info-02__description">
                                            <p>If you’re someone who has a LOT on their plate …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$39.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Programming Languages</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                        <div class="course-info-02__description">
                                            <p>From Setup to Deployment, this course covers it all! You’ll learn all …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$39.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Management</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Do you feel that you already know all possible frameworks of business …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Strategy & Analytics</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2022</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Our program is different than the rest of the materials …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Communications</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Negotiation is a skill well worth mastering – by putting …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Productivity</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Do you feel that you already know all possible frameworks of business …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$39.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Programming Languages</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                        <div class="course-info-02__description">
                                            <p>From Setup to Deployment, this course covers it all! You’ll learn all …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$39.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-9.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Teacher Training</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Essential Digital Tools for Student Engagement</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Engaging and motivating students are always very challenging task faced …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-10.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Photography Tools</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Adobe Lightroom For Beginners : Complete Photo/Image Editing</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Adobe Lightroom is designed for photographers. It provides you the …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-11.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Photography Fundamentals</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">The Ultimate Photography Course – Beginner to Advanced</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Do you feel that you already know all possible frameworks of business …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$55.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-12.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Programming Languages</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Internationally Accredited Diploma in Weight Loss</a></h3>
                                        <div class="course-info-02__description">
                                            <p>If you’re struggling to lose weight or stick to a …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$9.<small class="separator">99</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-32.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Photography Fundamentals</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Photography Masterclass: A Complete Guide to Photography</a></h3>
                                        <div class="course-info-02__description">
                                            <p>This online photography course will teach you how to take …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$49.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-33.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Productivity</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Boost Your Productivity: Adapt, Improve, Do!</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Listening Skills are the quiet soft skills sauce that can …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="free">Free</span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-34.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Leadership</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Succeed, Influence and Inspire as a Woman in Leadership</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Most importantly your body language has a tremendous impact on …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$75.<small class="separator">00</small></span>
                                        </div>
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
                            <div class="col-xl-3 col-lg-4 col-sm-6">

                                <!-- Course Start -->
                                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-header">
                                        <div class="course-header__thumbnail rounded-0">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-35.jpg" alt="courses" width="330" height="221"></a>
                                        </div>
                                    </div>
                                    <div class="course-info-02">
                                        <span class="course-info-02__badge-text badge-all">All Levels</span>
                                        <div class="course-info-02__category">
                                            <a href="#">Career Development</a>
                                        </div>
                                        <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Building Influence at Work</a></h3>
                                        <div class="course-info-02__description">
                                            <p>Listening Skills are the quiet soft skills sauce that can …</p>
                                        </div>
                                        <div class="course-info-02__price">
                                            <span class="sale-price">$42.<small class="separator">00</small></span>
                                        </div>
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

                <!-- Page Pagination Start -->
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
                <!-- Page Pagination End -->

            </div>
        </div>
        <!-- Courses End -->

        <!-- Courses Hover End -->
        <div id="course-hover">
            <div class="course-item-hover">
                <div class="course-item-hover__category">
                    <a href="#">Communications</a>
                </div>
                <h2 class="course-item-hover__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h2>
                <div class="course-item-hover__rating">

                    <div class="rating-star">
                        <div class="rating-label" style="width: 100%;"></div>
                    </div>

                    <div class="rating-average">
                        <span class="rating-average__average">5.0</span>
                        <span class="rating-average__total">/5</span>
                    </div>

                    <p class="course-item-hover__rating-count">(2 ratings)</p>
                </div>
                <div class="course-item-hover__meta">
                    <span>5 Lessons</span>
                    <span>2.3 hours</span>
                    <span>All Levels</span>
                </div>
                <div class="course-item-hover__benefits">
                    <h6 class="course-item-hover__benefits-title">What you'll learn</h6>
                    <ul class="course-item-hover__benefits-list">
                        <li>Negotiate effectively and fairly to make 1000s more than they would otherwise</li>
                        <li>Be confident in starting and finishing a negotiation</li>
                        <li>Use smart tactics to increase their bargaining power</li>
                        <li>Develop mental and emotional strength to keep pushing until they get a great price</li>
                        <li>Use negotiating skills in both personal and professional situations</li>
                    </ul>
                </div>
                <div class="course-item-hover__btn">
                    <a class="btn btn-primary btn-hover-secondary w-100" href="#">Add to cart</a>
                    <a class="btn-link" href="#"><i class="far fa-heart"></i> Add to wishlist</a>
                </div>
            </div>
        </div>
        <!-- Courses Hover End -->

        <!-- Courses List Hover End -->
        <div id="course-list-hover">
            <div class="course-item-hover">
                <div class="course-item-hover__category">
                    <a href="#">Communications</a>
                </div>
                <h2 class="course-item-hover__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h2>
                <div class="course-item-hover__rating">

                    <div class="rating-star">
                        <div class="rating-label" style="width: 100%;"></div>
                    </div>

                    <div class="rating-average">
                        <span class="rating-average__average">5.0</span>
                        <span class="rating-average__total">/5</span>
                    </div>

                    <p class="course-item-hover__rating-count">(2 ratings)</p>
                </div>
                <div class="course-item-hover__meta">
                    <span>5 Lessons</span>
                    <span>2.3 hours</span>
                    <span>All Levels</span>
                </div>
                <div class="course-item-hover__benefits">
                    <h6 class="course-item-hover__benefits-title">What you'll learn</h6>
                    <ul class="course-item-hover__benefits-list">
                        <li>Negotiate effectively and fairly to make 1000s more than they would otherwise</li>
                        <li>Be confident in starting and finishing a negotiation</li>
                        <li>Use smart tactics to increase their bargaining power</li>
                        <li>Develop mental and emotional strength to keep pushing until they get a great price</li>
                        <li>Use negotiating skills in both personal and professional situations</li>
                    </ul>
                </div>
                <div class="course-item-hover__btn">
                    <a class="btn btn-primary btn-hover-secondary w-100" href="#">Add to cart</a>
                    <a class="btn-link" href="#"><i class="far fa-heart"></i> Add to wishlist</a>
                </div>
            </div>
        </div>
        <!-- Courses List Hover End -->

<?= $this->endSection(); ?>