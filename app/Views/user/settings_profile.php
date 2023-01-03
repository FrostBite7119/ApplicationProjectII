<?= $this->extend('templates/user/indexProfil'); ?>

<?= $this->section('content'); ?>
<div class="dashboard-content">
    <div class="container">
        <h4 class="dashboard-title">Settings</h4>

        <!-- Dashboard Settings Start -->
        <div class="dashboard-settings">

            <!-- Dashboard Tabs Start -->
            <div class="dashboard-tabs-menu">
                <ul>
                    <li><a class="active" href="/settings_profile">Profile</a></li>
                    <li><a href="/settings_reset_pass">Reset Password</a></li>
                </ul>
            </div>
            <!-- Dashboard Tabs End -->

            <form action="/updateprofile" method="post" enctype="multipart/form-data">
                <div class="row gy-6">
                    <div class="col-lg-6">
                        <!-- Dashboard Settings Info Start -->
                        <div class="dashboard-content-box">

                            <h4 class="dashboard-content-box__title">Update Profil</h4>
                            <p>Inputkan data diri Anda untuk meng-update data</p>
                            <input type="hidden" value="<?= $user['email']; ?>" name="emailLama">
                            <input type="hidden" value="<?= $user['profile']; ?>" name="sampulLama">
                            <?php if (session()->getFlashdata('errors')) : ?>
                                <ul>
                                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                        <li><?= $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Nama</label>
                                        <input type="text" class="form-control" value="<?= $user['nama'] ?>" name="nama">
                                    </div>
                                    <!-- Account Account details End -->
                                </div>
                                <div class="col-md-12">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Email</label>
                                        <input type="email" class="form-control" value="<?= $user['email'] ?>" name="email">
                                    </div>
                                    <!-- Account Account details End -->
                                </div>
                                <div class="col-md-12">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Alamat</label>
                                        <input type="text" class="form-control" value="<?= $user['alamat'] ?>" name="alamat">
                                    </div>
                                    <!-- Account Account details End -->
                                </div>
                                <div class="col-md-12">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">No Telepon</label>
                                        <input type="number" class="form-control" value="<?= $user['no_telepon'] ?>" name="no_telepon">
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

                            <h4 class="dashboard-content-box__title">Foto</h4>
                            <p>Upload foto Anda.</p>

                            <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile" style="height: 200px;">
                                <input id="dashboard-photo-dialogue-box" class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" style="display: block" name="fotoProfil" />
                                <div id="profile-photo" class="dashboard-settings-profile__photo" data-fallback="/user_profile/<?= $user['profile'] ?>" style="background-image:url(/user_profile/<?= $user['profile'] ?>); top: 50px; left: 130px">
                                    <!-- <div class="overlay">
                                        <i class="far fa-camera"></i>
                                    </div> -->
                                </div>
                                <!-- <div id="profile-photo-option" class="dashboard-settings-profile__photo-option" style="top: 185px; left: 123px">
                                    <span class="profile-photo-deleter"><i class="far fa-trash-alt"></i> Delete</span>
                                </div> -->
                            </div>
                        </div>
                        <!-- Dashboard Settings Info End -->
                    </div>
                </div>

                <div class="dashboard-settings__btn">
                    <button type="submit" class="btn btn-primary btn-hover-secondary" onclick="return confirm('Apakah Anda yakin?')">Update Profile</button>
                </div>
            </form>

        </div>
        <!-- Dashboard Settings End -->
    </div>


</div>
<!-- Dashboard Content End -->
<?= $this->endSection(); ?>