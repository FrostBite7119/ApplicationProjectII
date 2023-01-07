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
            <div class="row justify-content-end">
                <div class="col-4 d-flex flex-row-reverse" style="margin-right: 15px; margin-bottom: 10px">
                    <a href="/admin/kategori/addkategori" type="button" class="btn btn-primary">Tambah Kategori</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($kategori as $dataKategori) : ?>
                              <tr>
                                <td><?= $dataKategori['id_kategori']; ?></td>
                                <td><?= $dataKategori['nama_kategori']; ?></td>
                                <td>
                                  <a href="/admin/kategori/editkategori/<?= $dataKategori['id_kategori']; ?>" class="btn btn-sm btn-warning" style="margin-right: 10px">Edit</a>
                                  <form action="/admin/kategori/delete/<?= $dataKategori['id_kategori']; ?>" method="post" style="display: inline">
                                    <button type="submit" class="btn btn-sm btn-danger " onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                  </form>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID Kategori</th>
                                <th>Nama Kategori</th>
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