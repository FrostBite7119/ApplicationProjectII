<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>

        <!-- Page Banner Section Start -->
        <div class="page-banner bg-color-05">
            <div class="page-banner__wrapper">
                <div class="container">

                    <!-- Page Breadcrumb Start -->
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                           
                        </ul>
                    </div>
                    <!-- Page Breadcrumb End -->

                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center">
                        <h2 class="page-banner__main-title">Pilih Langganan Kamu Sekarang</h2>
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

        <!-- Membership plans Section Start -->
        <div class="membership-plans section-padding-01">
            <div class="container custom-container">

                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                    
                    <h2 class="section-title__title-02">Biaya <mark>&</mark> Benefit Langganan</h2>
                    <div class="text-sm mb-1 text-gray-500 font-weight-500">Pilih paket langganan sebagai investasi belajar yang sesuai dengan kebutuhan Anda.</div>
                </div>
                <!-- Section Title End -->

                <!-- Membership plans Tabs Start -->
                <div class="membership-plans-tabs">
                    <ul class="nav justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">

                            <div class="row gy-6">
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Free</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">0</span>
                                            <span class="pricing-plan__period">/mo</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Courses included: 1</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Try for free, forever!</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center plan-active" data-aos="fade-up" data-aos-duration="1000">

                                        <div class="pricing-plan__ribbon">
                                            <span>Popular Choice</span>
                                        </div>

                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Started</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">19</span>
                                            <span class="pricing-plan__period">/mo</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Courses included: 3</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-secondary btn-hover-white" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Team</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">29</span>
                                            <span class="pricing-plan__period">/mo</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Courses included: 10</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Enterprise</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">39</span>
                                            <span class="pricing-plan__period">/mo</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Unlimited Courses</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Enterprise</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">39</span>
                                            <span class="pricing-plan__period">/mo</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Unlimited Courses</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="tab2">

                            <div class="row gy-6">
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Free</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">0</span>
                                            <span class="pricing-plan__period">/yr</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Courses included: 1</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Try for free, forever!</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center plan-active" data-aos="fade-up" data-aos-duration="1000">

                                        <div class="pricing-plan__ribbon">
                                            <span>Popular Choice</span>
                                        </div>

                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Started</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">190</span>
                                            <span class="pricing-plan__period">/yr</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Courses included: 3</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-secondary btn-hover-white" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Team</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">290</span>
                                            <span class="pricing-plan__period">/yr</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Courses included: 10</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                                <div class="col-lg-3 col-sm-6">

                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title">Enterprise</h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">$</span>
                                            <span class="pricing-plan__price">390</span>
                                            <span class="pricing-plan__period">/yr</span>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Unlimited Courses</li>
                                                <li>Individual Course</li>
                                                <li>Full Access to Single Course</li>
                                                <li>Learner Record</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="#">Get started</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Membership plans Tabs End -->

            </div>
        </div>
        <!-- Membership plans Section End -->

        <!-- Membership plans Section End -->
        
        <!-- Membership plans Section End -->

        <!-- Footer Start -->
 <?= $this->endSection(); ?>