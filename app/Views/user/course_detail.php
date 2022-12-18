<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>

        <!-- Tutor Course Main content Start -->
        <div class="tutor-course-main-content section-padding-01 sticky-parent" style="padding-top: 150px">
            <div class="container custom-container">

                <div class="row gy-10">
                    <div class="col-lg-8">

                        <!-- Tutor Course Top Info Start -->
                        <div class="tutor-course-top-info">

                            <!-- Tutor Course Top Info Start -->
                            <div class="tutor-course-top-info__content">
                                <h1 class="tutor-course-top-info__title"><?= $modul['judul_modul'] ?></h1>
                                <div class="tutor-course-top-info__meta">
                                    <div class="tutor-course-top-info__meta-update">Terakhir diperbarui: <?= date("d-m-Y", strtotime($modul['updated_at'])) ?></div>
                                </div>
                                <div class="tutor-course-top-info__meta">
                                    <div class="tutor-course-top-info__meta-action"><i class="meta-icon far fa-user-alt"></i> 0 already enrolled</div>
                                </div>
                            </div>
                            <!-- Tutor Course Top Info End -->
                        </div>
                        <!-- Tutor Course Top Info End -->

                        <!-- Tutor Course tabs Menu Start -->
                        <div class="tutor-course-tabs tutor-course-tabs-02 bg-color-13 mt-6">
                            <ul class="nav justify-content-center">
                                <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Detail</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab2">Kurikulum</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab3">Rating</button></li>
                            </ul>
                        </div>
                        <!-- Tutor Course tabs Menu End -->

                        <div class="tab-content mt-9">
                            <div class="tab-pane fade show active" id="tab1">

                                <!-- Tutor Course Main Segment Start -->
                                <div class="tutor-course-main-segment">
                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment">
                                        <h4 class="tutor-course-segment__title">Deskripsi Kursus</h4>

                                        <!-- Tutor Course Segment Content Wrapper Start -->
                                        <div class="tutor-course-segment__content-wrap">
                                            <?= $modul['deskripsi'] ?>
                                        </div>
                                        <!-- Tutor Course Segment Content Wrapper End -->
                                    </div>
                                    <!-- Tutor Course Segment End -->

                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment benefits-wrap">
                                        <h4 class="tutor-course-segment__title">Target Pembelajaran</h4>

                                        <!-- Tutor Course Segment Benefits Items Start -->
                                        <div class="tutor-course-segment__benefits-items">
                                            <?php foreach($target as $dataTarget) : ?>
                                            <div class="tutor-course-segment__benefit-item">
                                                <div class="tutor-course-segment__benefit-content">
                                                    <i class="far fa-check"></i>
                                                    <span class="benefit-text"><?= $dataTarget['target'] ?></span>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- Tutor Course Segment Benefits Items End -->

                                    </div>
                                    <!-- Tutor Course Segment End -->

                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment">
                                        <h4 class="tutor-course-segment__title">Prasyarat</h4>

                                        <!-- Tutor Course Segment Requirements Items Start -->
                                        <div class="tutor-course-segment__requirements-content">
                                            <ul class="tutor-course-segment__list-style-01">
                                                <?php foreach($syarat as $dataSyarat) : ?>
                                                    <li><?= $dataSyarat['persyaratan'] ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <!-- Tutor Course Segment Requirements Items End -->
                                    </div>
                                    <!-- Tutor Course Segment End -->

                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment audience-wrap">
                                        <h4 class="tutor-course-segment__title">Target Audience</h4>

                                        <!-- Tutor Course Segment Requirements Items Start -->
                                        <div class="tutor-course-segment__audience-content">
                                            <ul class="tutor-course-segment__list-style-02">
                                                <?php foreach($saran as $dataSaran) : ?>
                                                    <li><?= $dataSaran['disarankan'] ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <!-- Tutor Course Segment Requirements Items End -->
                                    </div>
                                    <!-- Tutor Course Segment End -->

                                </div>
                                <!-- Tutor Course Main Segment End -->

                            </div>
                            <div class="tab-pane fade" id="tab2">

                                <!-- Tutor Course Main Segment Start -->
                                <div class="tutor-course-main-segment">

                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment">

                                        <div class="tutor-course-segment__header">
                                            <h4 class="tutor-course-segment__title">Kurikulum</h4>

                                            <div class="tutor-course-segment__lessons-duration">
                                                <span class="tutor-course-segment__lessons"><?= $totalSub ?> Sub Modul</span>                                                
                                            </div>
                                        </div>

                                        <div class="course-curriculum accordion">
                                            <?php foreach($subModul as $dataSubModul) : ?>
                                            <div class="accordion-item">
                                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $dataSubModul['id_sub_modul'] ?>"> <i class="tutor-icon"></i><?= $dataSubModul['sub_modul'] ?></button>
                                                <div id="collapseOne<?= $dataSubModul['id_sub_modul'] ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionCourse">

                                                    <div class="course-curriculum__lessons">
                                                        <?php foreach($materi as $dataMateri) : ?>
                                                            <?php if($dataMateri['id_sub_modul'] == $dataSubModul['id_sub_modul']) : ?>
                                                            <div class="course-curriculum__lesson">
                                                                <span class="course-curriculum__title">
                                                                    <i class="far fa-file-alt"></i>
                                                                    <?php //if(session()->get('')) : ?>
                                                                        <a href=""><?= $dataMateri['judul_materi']; ?></a>
                                                                    <?php //endif; ?>
                                                                </span>
                                                                <span class="course-curriculum__icon">
                                                                    <i class="far fa-lock-alt"></i>
                                                                </span>
                                                            </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>

                                                </div>
                                            </div>     
                                            <?php endforeach; ?>                           
                                        </div>                                            
                                    </div>
                                    <!-- Tutor Course Segment End -->

                                </div>
                                <!-- Tutor Course Main Segment End -->

                            </div>
                            <div class="tab-pane fade" id="tab3">

                                <!-- Tutor Course Main Segment Start -->
                                <div class="tutor-course-main-segment">
                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment">
                                        <h4 class="tutor-course-segment__title">Student Feedback</h4>

                                        <div class="tutor-course-segment__feedback">
                                            <div class="tutor-course-segment__reviews-average">
                                                <div class="count">4.4</div>
                                                <div class="reviews-rating-star">
                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 90%;"></div>
                                                    </div>
                                                </div>
                                                <div class="rating-total">8 Ratings</div>
                                            </div>
                                            <div class="tutor-course-segment__reviews-metar">

                                                <div class="course-rating-metar">
                                                    <div class="rating-metar-star">
                                                        <div class="rating-star">
                                                            <div class="rating-label" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-col">
                                                        <div class="rating-metar-bar">
                                                            <div class="rating-metar-line" style="width: 75%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-text">75%</div>
                                                </div>

                                                <div class="course-rating-metar">
                                                    <div class="rating-metar-star">
                                                        <div class="rating-star">
                                                            <div class="rating-label" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-col">
                                                        <div class="rating-metar-bar">
                                                            <div class="rating-metar-line" style="width: 13%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-text">13%</div>
                                                </div>

                                                <div class="course-rating-metar">
                                                    <div class="rating-metar-star">
                                                        <div class="rating-star">
                                                            <div class="rating-label" style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-col">
                                                        <div class="rating-metar-bar">
                                                            <div class="rating-metar-line" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-text">0%</div>
                                                </div>

                                                <div class="course-rating-metar">
                                                    <div class="rating-metar-star">
                                                        <div class="rating-star">
                                                            <div class="rating-label" style="width: 40%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-col">
                                                        <div class="rating-metar-bar">
                                                            <div class="rating-metar-line" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-text">0%</div>
                                                </div>

                                                <div class="course-rating-metar">
                                                    <div class="rating-metar-star">
                                                        <div class="rating-star">
                                                            <div class="rating-label" style="width: 20%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-col">
                                                        <div class="rating-metar-bar">
                                                            <div class="rating-metar-line" style="width: 13%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rating-metar-text">13%</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tutor Course Segment End -->

                                    <!-- Tutor Course Segment Start -->
                                    <div class="tutor-course-segment">
                                        <h4 class="tutor-course-segment__title">Write a review</h4>

                                        <div class="tutor-course-segment__reviews">
                                            <button class="tutor-course-segment__btn btn btn-primary btn-hover-secondary" data-bs-toggle="collapse" data-bs-target="#collapseForm">Write a review</button>

                                            <div class="collapse" id="collapseForm">
                                                <!-- Comment Form Start -->
                                                <div class="comment-form">
                                                    <form action="#">
                                                        <div class="comment-form__rating">
                                                            <label class="label">Your rating: *</label>
                                                            <ul id="rating" class="rating">
                                                                <li class="star" title='Poor' data-value='1'><i class="far fa-star"></i></li>
                                                                <li class="star" title='Poor' data-value='2'><i class="far fa-star"></i></li>
                                                                <li class="star" title='Poor' data-value='3'><i class="far fa-star"></i></li>
                                                                <li class="star" title='Poor' data-value='4'><i class="far fa-star"></i></li>
                                                                <li class="star" title='Poor' data-value='5'><i class="far fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Comment Form End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tutor Course Segment End -->

                                </div>
                                <!-- Tutor Course Main Segment End -->

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <!-- Tutor Course Sidebar Start -->
                        <div class="tutor-course-sidebar sidebar-label">

                            <!-- Tutor Course Price Preview Start -->
                            <div class="tutor-course-price-preview">
                                <div class="tutor-course-price-preview__meta">
                                    <ul class="tutor-course-meta-list">
                                        <li>
                                            <div class="label"><i class="far fa-sliders-h"></i> Level </div>
                                            <div class="value"><?= ucfirst($modul['level']) ?></div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="far fa-book-open"></i> Lectures </div>
                                            <div class="value"><?= $totalSub; ?></div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="far fa-tag"></i> Kategori </div>
                                            <div class="value"><a href="#"><?= $modul['kategori']; ?></a></div>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="tutor-course-price-preview__btn">
                                    <button class="btn btn-primary btn-hover-secondary w-100"> <i class="far fa-plus"></i> Kursus Saya </button>
                                </div>
                            </div>
                            <!-- Tutor Course Price Preview End -->
                        </div>
                        <!-- Tutor Course Sidebar End -->

                    </div>
                </div>


            </div>
        </div>
        <!-- Tutor Course Main content End -->

<?= $this->endSection(); ?>