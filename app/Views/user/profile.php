<?= $this->extend('templates/user/indexProfil'); ?>

<?= $this->section('content'); ?>

<!-- Dashboard Content Start -->
<div class="dashboard-content">

    <div class="container">
        <h4 class="dashboard-title">My Profile</h4>

        <!-- Dashboard Profile Start -->
        <div class="dashboard-profile">
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Nama</div>
                <div class="dashboard-profile__content">
                    <p><?= $user['nama']; ?></p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Email</div>
                <div class="dashboard-profile__content">
                    <p><?= $user['email']; ?></p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Alamat</div>
                <div class="dashboard-profile__content">
                    <p><?= $user['alamat']; ?></p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">No Telepon</div>
                <div class="dashboard-profile__content">
                    <p><?= $user['no_telepon']; ?></p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Level Akun</div>
                <div class="dashboard-profile__content">
                    <?php if($user['level'] == 1) : ?>
                        <p>Basic</p>
                    <?php elseif($user['level'] == 2) : ?>
                        <p>Berlangganan sampai <?= $user['expired_date']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Dashboard Profile End -->
    </div>
</div>
<!-- Dashboard Content End -->
<?= $this->endSection(); ?>