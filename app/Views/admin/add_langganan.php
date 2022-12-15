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
            <div class="row">
                <div class="col-12">
                    <?php if (session()->has('errors')) : ?>
                    <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Input Data Langganan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="/admin/langganan/insertlangganan" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Lama</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="number" placeholder="Masukan Durasi" required name="lama">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <select class="custom-select" name="rentang">
                                                <option value="Tahun">Tahun</option>
                                                <option value="Bulan">Bulan</option>
                                                <option value="Hari">Hari</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Biaya Langganan</label>
                                            <input class="form-control" type="number" placeholder="Input Biaya Langganan" required name="biayaLangganan">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Diskon</label>
                                            <input id="inputDiskon" class="form-control" type="number" placeholder="Inputkan Potongan Harga" name="diskon">
                                        </div>
                                    </div>
                                    <div class="col-sm-12" id="wadahRentangWaktu">
                                        <!-- Date range -->
                                        <div class="form-group">
                                            <label>Rentang Waktu Diskon:</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control float-right" id="reservation" name="rentangDiskon">
                                        </div>
                                        <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                        </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
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