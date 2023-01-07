<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>

<!-- Dashboard Content Start -->
<div class="dashboard-content">

<div class="container" style="padding-top: 150px">
    <h2 class="section-title__title-03" style="padding-bottom: 50px" >Kursus Saya</h2>

    <!-- Dashboard Wishlist Start -->
    <div class="dashboard-wishlist" style="margin-bottom:3%;">
        <div class="row gy-6">
            <?php foreach($kursus as $dataKursus) :?>
            <div class="col-xxl-3 col-lg-4 col-md-6">
                <!-- Course Start -->
                <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                    <div class="course-header">
                        <div class="course-header__thumbnail rounded-0">
                            <a href="/course_detail/<?= $dataKursus['id_modul']; ?>"><img src="/cover/<?= $dataKursus['cover'] ?>" alt="courses" width="330" height="220"></a>
                        </div>
                    </div>
                    <div class="course-info-02">
                        <?php if($dataKursus['level'] == "mudah") :?>
                            <span class="course-info__badge-text badge-beginner">Mudah</span>
                        <?php elseif($dataKursus['level'] == "menengah") : ?>
                            <span class="course-info__badge-text badge-intermediate">Menengah</span>
                        <?php elseif($dataKursus['level'] == "sulit") : ?>
                            <span class="course-info__badge-text badge-hard">Sulit</span>
                        <?php endif; ?>
                        <h3 class="course-info-02__title"><a href="/course_detail/<?= $dataKursus['id_modul']; ?>"><?= $dataKursus['judul_modul'] ?></a></h3>
                        <?php if($dataKursus['kategori'] == "Android") :?>
                            <span class="badge rounded-pill bg-success">Android</span>
                            <i class="fas fa-trash icon-trash"></i>
                        <?php elseif($dataKursus['kategori'] == "Web") : ?>
                            <span class="badge rounded-pill bg-info">Web</span>
                        <?php elseif($dataKursus['kategori'] == "Pemrograman Dasar") : ?>
                            <span class="badge rounded-pill bg-warning">Pemrograman Dasar</span>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Course End -->
            </div>
            <?php endforeach; ?>   
        </div>
        <?= $pager->links('modul', 'custom_pagination'); ?>
    </div>
    <!-- Dashboard Wishlist End -->
</div>


</div>
<!-- Dashboard Content End -->

<?= $this->endSection(); ?>