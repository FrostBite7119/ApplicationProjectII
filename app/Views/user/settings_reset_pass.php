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
                            <li><a href="/settings_profile">Profile</a></li>
                            <li><a class="active" href="/settings_reset_pass">Reset Password</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->
                    <?php if (session()->has('errors')) : ?>
                    <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <form action="/change_pass" method="post">
                        <div class="row">
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box dashboard-settings__info">

                                    <h4 class="dashboard-settings__title">Reset Password</h4>

                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Current Password</label>
                                                <input type="password" class="form-control" name="opwd" value="<?= old('opwd');?>">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">New Password</label>
                                                <input type="password" class="form-control" name="npwd">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Confirm New Password</label>
                                                <input type="password" class="form-control" name="cnpwd">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Dashboard Settings Info End -->

                            </div>
                        </div>

                        <div class="dashboard-settings__btn">
                            <button type="submit" name="update" class="btn btn-primary btn-hover-secondary">Reset Password</button>
                        </div>
                    </form>

                </div>
                <!-- Dashboard Settings End -->
            </div>


        </div>
        <!-- Dashboard Content End -->
<?= $this->endSection(); ?>