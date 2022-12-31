<?= $this->extend('templates/admin/index') ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="/user_profile/<?= $user['profile'] ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>

                            <p class="text-muted text-center"><?= $user['email']; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Level Akun</b>
                                    <div class="float-right"><?php if ($user['level'] == 1) {
                                                                    echo "Basic";
                                                                } else if ($user['level'] == 2) {
                                                                    echo "Berlangganan sampai " . $user['expired_date'];
                                                                } ?></div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">History Pembelian</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2">Name</label>
                                        <div class="col-sm-10">
                                            <p><?= $user['nama'] ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2">Email</label>
                                        <div class="col-sm-10">
                                            <p><?= $user['email'] ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2">No Telepon</label>
                                        <div class="col-sm-10">
                                            <p><?= $user['no_telepon'] ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2">Alamat</label>
                                        <div class="col-sm-10">
                                            <p><?= $user['alamat'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <div class="row justify-content-end">
                                        <div class="col-12">
                                            <div class="card">
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Tanggal Pembelian</th>
                                                                <th>Email Pengguna</th>
                                                                <th>Langganan yang Dibeli</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php $i = 0; ?>
                                                            <?php foreach ($pembayaran as $data) : ?>
                                                                <tr>
                                                                    <td><?= $data['tanggal_pembelian']; ?></td>
                                                                    <td><?= $data['email']; ?></td>
                                                                    <td><?= $data['lama']; ?> <?= $data['rentang']; ?></td>
                                                                    <td><?= $data['status']; ?></td>
                                                                    <td>
                                                                        <form action="/admin/pembayaran/detailpembayaran/<?= $data['id_history'] ?>" method="get" style="display: inline">
                                                                            <button type="submit" class="btn btn-sm btn-info" style="margin-right: 10px">Detail</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                <?php $i++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Tanggal Pembelian</th>
                                                                <th>Email Pengguna</th>
                                                                <th>Langganan yang Dibeli</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>