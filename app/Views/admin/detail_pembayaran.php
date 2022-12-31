<?= $this->extend('templates/admin/index') ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php if (session()->getFlashdata('info')) : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('info'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Pembeli
                                <address>
                                    <strong><?= $pembayaran['nama'] ?></strong><br>
                                    No. Telp: <?= $pembayaran['no_telepon'] ?><br>
                                    Email: <?= $pembayaran['email'] ?>
                                </address>
                            </div>                        
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID Pembelian</th>
                                            <th>Paket yang Dibeli</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $pembayaran['id_history']; ?></td>
                                            <td><?= $pembayaran['lama']; ?> <?= $pembayaran['rentang']; ?></td>
                                            <td><?= $pembayaran['tanggal_pembelian']; ?></td>
                                            <td><?= $pembayaran['status']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row invoice-info">
                            <div class="col-sm-6 invoice-col">
                                Bukti Pembayaran
                                <div class="card-body">
                                    <div>
                                        <div class="filter-container p-0 row">
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a target="_blank" rel="noopener noreferrer" href="/assets/images/dark-logo.png" data-toggle="lightbox" data-title="sample 1 - white">
                                                    <img src="/assets/images/dark-logo.png"  alt="white sample" height="50">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- /.col -->
                            <div class="col-12">
                                <p class="lead">Detail Transaksi</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <?php $totalBayar = 0; ?>
                                        <?php foreach($detail_pembayaran as $dataPembayaran) :?>
                                            <tr>
                                                <td><?= $dataPembayaran['nama_transaksi'] ?></td>
                                                <td>Rp<?= number_format($dataPembayaran['jumlah_transaksi']) ?></td>
                                                <?php $totalBayar+= $dataPembayaran['jumlah_transaksi']; ?>
                                            </tr>
                                        <?php endforeach; ?>                            
                                        <tr>
                                            <th>Total:</th>
                                            <td>Rp<?= $totalBayar; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <?php if($pembayaran['status'] == "Ditinjau") : ?>
                                    <form action="/admin/pembayaran/updatePembayaran/<?= $pembayaran['id_history']; ?>/1" method="post">
                                        <button type="submit" class="btn btn-success float-right" onclick="return confirm('Apakah Anda yakin?')">
                                            Terima Pembayaran
                                        </button>
                                    </form>
                                    <form action="/admin/pembayaran/updatePembayaran/<?= $pembayaran['id_history']; ?>/0" method="post">
                                        <button type="submit" class="btn btn-danger float-right" style="margin-right: 5px;" onclick="return confirm('Apakah Anda yakin?')">
                                            Tolak Pembayaran
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<?= $this->endSection(); ?>