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
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email Pengguna</th>
                                <th>Langganan yang Dibeli</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              
                            <?php $i = 0;?>
                            <?php foreach($user as $data) : ?>
                              <tr>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['email']; ?></td>
                                <td><?= $data['no_telepon']; ?></td>
                                <td><?php if($data['level'] == 1){echo "Basic"; }else if($data['level'] == "2"){echo "Berlangganan";} ?></td>
                                <td>
                                  <form action="/admin/user/detailuser/<?= $data['email'] ?>" method="get" style="display: inline">
                                    <button type="submit" class="btn btn-sm btn-info" style="margin-right: 10px" >Detail</button>
                                  </form>
                                </td>
                              </tr>
                              <?php $i++; ?>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Cover</th>
                                <th>Judul Modul</th>
                                <th>Level</th>
                                <th>Kategori</th>
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