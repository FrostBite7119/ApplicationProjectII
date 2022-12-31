<?= $this->extend('templates/user/indexProfil'); ?>

<?= $this->section('content'); ?>
<div class="dashboard-content">

    <div class="container">
        <h4 class="dashboard-title">Riwayat Pembelian</h4>

        <!-- Dashboard Purchase History Start -->
        <div class="dashboard-purchase-history">
            <div class="dashboard-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="id">Langganan Dibeli</th>
                            <th class="courses">Tanggal Pembelian</th>
                            <th class="amount">Tanggal Berlaku</th>
                            <th class="status">Status</th>
                            <th class="date">Total Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pembelian as $dataPembelian) : ?>
                            <tr>
                                <td>
                                    <div class="dashboard-table__mobile-heading">Dibeli</div>
                                    <div class="dashboard-table__text"><?= $dataPembelian['lama'] ?> <?= $dataPembelian['rentang']; ?></div>
                                </td>
                                <td class="course-info">
                                    <div class="dashboard-table__mobile-heading">Tanggal Pembelian</div>
                                    <div class="dashboard-table__text">
                                        <p><?= $dataPembelian['tanggal_pembelian']; ?></p>
                                    </div>
                                </td>
                                <td class="correct">
                                    <div class="dashboard-table__mobile-heading">Berlaku Pada</div>
                                    <div class="dashboard-table__text">
                                        <p><?= $dataPembelian['tanggal_berlaku']; ?></p>
                                    </div>
                                </td>
                                <td class="incorrect">
                                    <div class="dashboard-table__mobile-heading">Status</div>
                                    <div class="dashboard-table__text <?php if($dataPembelian['status'] == "Berhasil"){ echo "completed"; }else if($dataPembelian['status'] == "Ditolak"){ echo "cancelled"; } ?>"><?= $dataPembelian['status']; ?></div>
                                </td>
                                <td class="earned">
                                    <div class="dashboard-table__mobile-heading">Total</div>
                                    <div class="dashboard-table__text">
                                        <span class="sale-price">Rp<?= $dataPembelian['total']; ?></span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Dashboard Purchase History End -->
    </div>
</div>
<!-- Dashboard Content End -->

<?= $this->endSection(); ?>