<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>

<!-- Page Banner Section Start -->
    <div class="page-banner bg-color-05">
        <div class="page-banner__wrapper">
                <div class="container">

                    <!-- Page Breadcrumb Start -->
                    <!-- Page Breadcrumb End -->

                    <!-- Page Banner Caption Start -->
                <div class="page-banner__caption text-center">
                    <h2 class="page-banner__main-title">Pembayaran Untuk Paket Langganan</h2>
                </div>
                    <!-- Page Banner Caption End -->

            </div>
        </div>
    </div>
    <div class="checkout-section section-padding-01">
            <div class="container custom-container">
            
                    <div class="col-lg-11">
                        <!-- Checkout Form Start -->
                        <div class="checkout-form">

                            <!-- Checkout Form Info Start -->
                            <div class="checkout-form__info">
                                <p>Masuk Terlebih Dahulu Untuk Menyelesaikan Pembayaran <button class="info-toggle" data-bs-toggle="modal" data-bs-target="#loginModal">Klik Untuk Masuk</button></p>
                            </div>
                            <!-- Checkout Form Info End -->

                            <!-- Checkout Form Info Start -->
                            <!-- Checkout Form Info End -->

                            <!-- Checkout Form Start -->
                            <div class="checkout-order">
                                <h4 class="checkout-order__title">Harga Langganan</h4>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="text-green-500 mb-2">6 bulan (180 hari)</div>
                                        
                                    </div>
                                    <div class="text-lg text-gray-600 text-right">
                                        <div class="text-green-500 mb-2">Rp 8,100,000</div>
                                         
                                    </div>
                                </div>
                                <hr>
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
                                    <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile">
                                        <input id="dashboard-photo-dialogue-box" class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" />

                                        <div id="dashboard-cover-area" class="dashboard-settings-profile__cover" data-fallback="assets/images/avatar-placeholder.jpg" style="background-image:url(assets/images/avatar-placeholder.jpg)">
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
                                            <img src="assets/images/info-icon.svg" alt="icon" />
                                            <span>Format .jpeg, .jpg, .png,</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="checkout-form__info">
                                    <p>Apakah anda memiliki kode promo? <button class="info-toggle" data-bs-toggle="collapse" data-bs-target="#collapseExample">Klik disini untuk masukan kode promo</button></p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="checkout-form__item">
                                            <input type="text" class="form-control" placeholder="Kode Promo">
                                            <button class="coupon-btn"><i class="fal fa-gift"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="text-green-500 mb-2">Jumlah Tagihan</div>
                                    </div>
                                    <div class="text-lg text-gray-600 text-right">
                                        <div class="text-total">Rp 9,000,000</div>
                                        <button type="submit" class="btn btn-primary btn-hover-secondary" onclick="fbq('track', 'Initial Checkout', {subscriber_id: '2763555',product: '6 bulan (180 hari)', currency: 'IDR', value: document.getElementById('price-to-charge').innerHTML.replace(/[^\d.]/g,'')});">
                                            Bayar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Form End -->

                            
                        <!-- Checkout Form End -->
                    </div>
                    


            </div>
        </div>

<?= $this->endSection(); ?>