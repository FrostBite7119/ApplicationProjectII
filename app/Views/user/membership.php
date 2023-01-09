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
                        <h2 class="page-banner__main-title">Pilih Paket Langganan Kamu Sekarang</h2>
                    </div>
                    <!-- Page Banner Caption End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Membership plans Section Start -->
        <div class="membership-plans section-padding-01">
            <div class="container custom-container">

                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                    
                    <h2 class="section-title__title-02"><mark>Biaya</mark> Berlangganan</h2>
                    <div class="text-sm mb-1 text-gray-500 font-weight-500">Pilih paket langganan sebagai investasi belajar yang sesuai dengan kebutuhan Anda.</div>
                </div>
                <!-- Section Title End -->

                <!-- Membership plans Tabs Start -->
                <div class="membership-plans-tabs">
                    <ul class="nav justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="row gy-6 justify-content-center">
                                <?php foreach($langganan as $dataLangganan): ?>
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Membership plans Tabs Start -->
                                    <div class="pricing-plan text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="pricing-plan__header">
                                            <h4 class="pricing-plan__title" style="font-size: 20px">Langganan <?= $dataLangganan['lama']; ?> <?= $dataLangganan['rentang']; ?></h4>
                                        </div>
                                        <div class="pricing-plan__wrap">
                                            <span class="pricing-plan__currency">Rp</span>
                                            <?php if($dataLangganan['waktu_diskon'] != null) : ?>
                                                <?php if(date('d/m/Y') >= explode(' - ', $dataLangganan['waktu_diskon'])[0] && date('d/m/Y') <= explode(' - ', $dataLangganan['waktu_diskon'])[1]): ?> <s> <?php endif;?>
                                            <?php endif; ?>
                                                <span class="pricing-plan__price"><?= number_format($dataLangganan['biaya_langganan']) ?></span>
                                            <?php if($dataLangganan['waktu_diskon'] != null) : ?>
                                                <?php if(date('d/m/Y') >= explode(' - ', $dataLangganan['waktu_diskon'])[0] && date('d-m-Y') <= explode(' - ', $dataLangganan['waktu_diskon'])[1]): ?></s><?php endif;?>
                                            <?php endif; ?>
                                            <?php if($dataLangganan['waktu_diskon'] != null) : ?>
                                                <?php if(date('d/m/Y') >= explode(' - ', $dataLangganan['waktu_diskon'])[0] && date('d/m/Y') <= explode(' - ', $dataLangganan['waktu_diskon'])[1]): ?>
                                                    <span class="pricing-plan__currency">Rp</span>
                                                    <span class="pricing-plan__price"><?= number_format($dataLangganan['biaya_langganan'] - $dataLangganan['diskon']) ?></span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="pricing-plan__body">
                                            <ul class="pricing-plan__features">
                                                <li>Akses ke semua modul pembelajaran</li>            
                                            </ul>
                                        </div>
                                        <div class="pricing-plan__footer">
                                            <a class="pricing-plan__btn btn btn-primary btn-hover-secondary" href="/langganan_pembayaran/<?= $dataLangganan['id_langganan']; ?>">Berlangganan</a>
                                        </div>
                                    </div>
                                    <!-- Membership plans Tabs End -->
                                </div>  
                                <?php endforeach; ?>                              
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