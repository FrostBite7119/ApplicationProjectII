<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
<?php
    $potongan = [];
    if($isFirstTime){    
        $potongan[] = [
            'namaPotongan' => "Pembelian Pertama",
            'jumlah' => -50000
        ];
    }
?>
<!-- Page Banner Section Start -->
<div class="page-banner bg-color-05">
    <div class="page-banner__wrapper">
        <div class="container">
            <div class="page-banner__caption text-center">
                <h2 class="page-banner__main-title">Pembayaran Untuk Paket Langganan</h2>
            </div>
        </div>
    </div>
</div>
<div class="checkout-section section-padding-01">
    <div class="container custom-container">
        <div class="col-lg-12">
            <!-- Checkout Form Start -->
            <div class="checkout-form">
                <!-- Checkout Form Info Start -->
                <?php if(!session()->get('role') || session()->get('role') == 'admin') :?>
                    <div class="checkout-form__info">
                        <p>Masuk Terlebih Dahulu Untuk Menyelesaikan Pembayaran <button class="info-toggle" data-bs-toggle="modal" data-bs-target="#loginModal">Klik Untuk Masuk</button></p>
                    </div>
                <?php endif; ?>
                <!-- Checkout Form Start -->
                <div class="checkout-order">
                    <form action="/bayar_langganan/<?= session()->get('email') ?>/<?= $langganan['id_langganan'] ?>" method="post" enctype="multipart/form-data">
                        <h4 class="checkout-order__title">Harga Langganan</h4>
                        <div class="d-flex justify-content-between">
                            <div>
                            <?php if($langganan['waktu_diskon'] != null) : ?>
                                <?php if(date('d/m/Y') >= explode(' - ', $langganan['waktu_diskon'])[0] && date('d/m/Y') <= explode(' - ', $langganan['waktu_diskon'])[1]): ?>
                                    <?php
                                        $potongan[] = [
                                            'namaPotongan' => "Diskon",
                                            'jumlah' => -$langganan['diskon']
                                        ];
                                    ?>
                                    <div class="text-green-500 mb-2" style="color: #10b981">Diskon Rp<?= number_format($langganan['diskon']); ?></div>    
                                <?php endif; ?>
                            <?php endif; ?>
                                <div class="text-green-500 mb-2"><?= $langganan['lama']." ".lcfirst($langganan['rentang']) ?> <?php if($langganan['rentang'] == "Tahun"){echo "(".(365 * $langganan['lama'])." Hari)";}else if($langganan['rentang'] == "Bulan"){echo "(".(30 * $langganan['lama'])." Hari)";} ?></div>
                            </div>
                            <div class="text-lg text-gray-600 text-right">
                                <?php if($langganan['waktu_diskon'] != null) : ?>
                                    <?php if(date('d/m/Y') >= explode(' - ', $langganan['waktu_diskon'])[0] && date('d/m/Y') <= explode(' - ', $langganan['waktu_diskon'])[1]): ?>
                                        <div class="text-green-500 mb-2"><s>Rp<?= number_format($langganan['biaya_langganan']); ?></s></div>
                                        <div class="text-green-500 mb-2">Rp<?= number_format($langganan['biaya_langganan'] - $langganan['diskon']); ?></div>
                                        <?php else: ?>
                                            <div class="text-green-500 mb-2">Rp<?= number_format($langganan['biaya_langganan']); ?></div>
                                    <?php endif; ?>
                                <?php else: ?>
                                        <div class="text-green-500 mb-2">Rp<?= number_format($langganan['biaya_langganan']); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr>
                        <?php if(session()->get('role') == 'user') : ?>
                            <?php if(!$isPending) : ?>
                                <?php if($user['expired_date'] == null): ?>
                                    <div>
                                        <label class="mb-0 font-weight-bold align-text-bottom" for="promo-code">Upload Bukti Bayar</label>
                                        <!-- @review  Lebih baik kalau popover bisa muncul juga ketika di klik di versi mobile -->
                                        <span class="ml-1 text-gray-500 align-text-bottom" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Kode promo bisa Anda dapatkan dari penawaran melalui email, sosial media, dsb." data-original-title="" title="">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 11C10 10.4477 10.4477 10 11 10H12C12.5523 10 13 10.4477 13 11V15C13.5523 15 14 15.4477 14 16C14 16.5523 13.5523 17 13 17H12C11.4477 17 11 16.5523 11 16V12C10.4477 12 10 11.5523 10 11Z" fill="#3F3F46"></path>
                                                <path d="M12 9C12.5523 9 13 8.55229 13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8C11 8.55229 11.4477 9 12 9Z" fill="#3F3F46"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z" fill="#3F3F46"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="d-md-flex">
                                        <!-- <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile">
                                            <input id="dashboard-photo-dialogue-box" class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" name="bukti_pembayaran" style="display: block;">
                                            <div id="dashboard-cover-area" class="dashboard-settings-profile__cover" data-fallback="/assets/images/payment.png" style="background-image:url(/assets/images/payment.png)">
                                                <span class="cover-deleter">
                                                    <i class="far fa-trash-alt"></i>
                                                </span>
                                                <div class="overlay">
                                                    <button class="cover-uploader" type="button">
                                                        <i class="far fa-camera"></i>&nbsp;
                                                        <span>Upload Bukti Disini</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="photo-meta-area" class="dashboard-settings-profile__photo-meta">
                                                <img src="/assets/images/info-icon.svg" alt="icon" />
                                                <span>Format .jpeg, .jpg, .png,</span>
                                            </div>                                
                                        </div> -->
                                        <div class="mb-3">
                                            <input class="form-control" type="file" id="formFile" style="padding: .375rem .75rem; height: auto" name="bukti_pembayaran">
                                        </div>
                                    </div>
                                    <?php if(session()->getFlashdata('errors')): ?>
                                        <ul>
                                            <?php foreach(session()->getFlashdata('errors') as $error) : ?>
                                                <li style="color: red;"><?= $error ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif;?>
                                    <hr>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="d-flex justify-content-between">
                            <div>
                                <?php if(isset($potongan)) : ?>
                                    <?php foreach($potongan as $dataPotongan) : ?>
                                        <div class="text-green-500 mb-2"><?= $dataPotongan['namaPotongan']; ?></div>    
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <p style="font-weight: bold;">Jumlah Tagihan</p>
                            </div>
                            <div class="text-lg text-gray-600 text-right">
                                <?php if(isset($potongan)) : ?>
                                    <?php foreach($potongan as $dataPotongan) : ?>
                                        <div class="text-total">Rp<?= number_format(-$dataPotongan['jumlah']); ?></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <?php
                                    $totalBiaya = $langganan['biaya_langganan'];
                                    if(isset($potongan)){
                                        foreach($potongan as $dataPotongan){
                                            $totalBiaya -= $dataPotongan['jumlah'];
                                        }
                                    }
                                ?>
                                <div class="text-total">Rp<?= number_format($totalBiaya); ?></div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <?php if(session()->get('role') == 'user') : ?>
                                <?php if(!$isPending) : ?>
                                    <?php if($user['expired_date'] == null) : ?>
                                        <?php if(count($potongan) > 0) : ?>
                                            <?php $i = 0; ?>
                                            <?php foreach($potongan as $dataPotongan) : ?>
                                                <input type="hidden" value="<?= $dataPotongan['namaPotongan'] ?>" name="potongan[<?= $i ?>][namaPotongan]">
                                                <input type="hidden" value="<?= $dataPotongan['jumlah'] ?>" name="potongan[<?= $i ?>][jumlah]">                                    
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <input type="hidden" value="<?= $langganan['biaya_langganan']; ?>" name="biayaLangganan">
                                        <button type="submit" class="btn btn-primary btn-hover-secondary" >
                                            Bayar
                                        </button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>