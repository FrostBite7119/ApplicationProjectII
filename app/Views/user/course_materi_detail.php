<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="dashboard-nav" style="margin-top: 150px; z-index: 1; height: 550px" id="offcanvasDashboard">
                <!-- Dashboard Nav Wrapper Start -->
                <div class="dashboard-nav__wrapper">
                    <span class="dashboard-nav__title">Daftar Materi</span>
                    <!-- Dashboard Nav Content Start -->
                    <div class="offcanvas-body dashboard-nav__content navScroll">
                        <!-- Dashboard Nav Menu Start -->
                        <div class="dashboard-nav__menu">
                            <?php foreach ($subModul as $dataSubModul) : ?>                                
                                <div class="accordion-item">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $dataSubModul['id_sub_modul'] ?>"> <i class="tutor-icon"></i><?= $dataSubModul['sub_modul'] ?></button>
                                    <div id="collapseOne<?= $dataSubModul['id_sub_modul'] ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionCourse">

                                        <div class="course-curriculum__lessons">
                                            <?php foreach ($materiLain as $dataMateri) : ?>
                                                <?php if ($dataMateri['id_sub_modul'] == $dataSubModul['id_sub_modul']) : ?>
                                                    <div class="course-curriculum__lesson">
                                                        <span class="course-curriculum__title">
                                                            <i class="far fa-file-alt"></i>                                                            
                                                            <a href="/course_materi_detail/<?= $dataMateri['id_materi'] ?>" <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == $dataMateri['id_materi'] ){echo 'style="font-weight: bold;"'; }?>><?= $dataMateri['judul_materi']; ?></a>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Dashboard Nav Menu End -->

                    </div>
                    <!-- Dashboard Nav Content End -->

                    <div class="offcanvas-footer"></div>
                </div>
                <!-- Dashboard Nav Wrapper End -->
            </div>
        </div>
        <!-- Dashboard Nav End -->
        <!-- Dashboard Main Wrapper Start -->
        <main class="dashboard-main-wrapper col-8" style="margin-top: 118.396px">
            <div class="dashboard-content">

                <div class="container">

                    <!-- Dashboard Profile Start -->
                    <div class="dashboard-profile">

                        <div class="mb-5 fr-view academy-tutorial-content content--prettify-light js-content-prettify">
                            <h1 dir="ltr"><?= $materi['judul_materi'] ?></h1>
                            <br>
                            <?= $materi['isi_materi']; ?>
                        </div>
                        <div class="col-2 col-md-12 d-flex justify-content-end align-items-center">
                            <div class="tutor-course-segment__reviews">
                                <button class="tutor-course-segment__btn btn btn-primary btn-hover-secondary" data-bs-toggle="collapse" data-bs-target="#collapseForm">Beri Rating</button>

                                <div class="collapse" id="collapseForm">
                                    <!-- Comment Form Start -->
                                    <div class="comment-form">
                                        <form action="/admin">
                                            <div class="comment-form__rating">
                                                <label class="label">Rating Anda: *</label>
                                                <ul id="rating" class="rating">
                                                    <li><i class="far fa-star <?php if($rating){if($rating[0]['rating'] >= 1){ echo "hover";}} ?>" onclick="window.location.href ='<?= base_url('rating/1/'.$id_modul.'/'.$idMateri); ?>'"></i></li>
                                                    <li><i class="far fa-star <?php if($rating){if($rating[0]['rating'] >= 2){ echo "hover";}} ?>" onclick="window.location.href ='<?= base_url('rating/2/'.$id_modul.'/'.$idMateri); ?>'"></i></li>
                                                    <li><i class="far fa-star <?php if($rating){if($rating[0]['rating'] >= 3){ echo "hover";}} ?>" onclick="window.location.href ='<?= base_url('rating/3/'.$id_modul.'/'.$idMateri); ?>'"></i></li>
                                                    <li><i class="far fa-star <?php if($rating){if($rating[0]['rating'] >= 4){ echo "hover";}} ?>" onclick="window.location.href ='<?= base_url('rating/4/'.$id_modul.'/'.$idMateri); ?>'"></i></li>
                                                    <li><i class="far fa-star <?php if($rating){if($rating[0]['rating'] >= 5){ echo "hover";}} ?>" onclick="window.location.href ='<?= base_url('rating/5/'.$id_modul.'/'.$idMateri); ?>'"></i></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Comment Form End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Profile End -->
                </div>
            </div>
        </main>
        <!-- Dashboard Main Wrapper End -->
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


<?= $this->endSection(); ?>