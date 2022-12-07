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
                    <a href="/admin/modul/addmodul" type="button" class="btn btn-primary">Tambah Modul</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Cover</th>
                                <th>Judul Modul</th>
                                <th>Level</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              
                            <?php $i = 0;?>
                            <?php foreach($modul as $data) : ?>
                              <tr>
                                <td style="text-align: center"><img src="/cover/<?= $data['cover']; ?>" alt="" width="150"></td>
                                <td><?= $data['judul_modul']; ?></td>
                                <td><?= $data['level']; ?></td>
                                <td><?= $data['kategori']; ?></td>
                                <td>
                                  <form action="/admin/modul/editdata/<?= $data['id_modul']; ?>" method="get" style="display: inline">
                                    <button type="submit" class="btn btn-sm btn-warning" style="margin-right: 10px" <?php if(array_search($data['id_modul'], array_column($status, 'id_modul')) === false){ echo "disabled"; }?>>Edit</button>
                                  </form>
                                  <form action="/admin/modul/delete/<?= $data['id_modul']; ?>" method="post" style="display: inline">
                                    <button type="submit" class="btn btn-sm btn-danger " onclick="return confirm('Apakah Anda yakin?')" <?php if(array_search($data['id_modul'], array_column($status, 'id_modul')) === false){ echo "disabled"; }else{ $key = array_search($data['id_modul'], array_column($status, 'id_modul')); if($status[$key]['status'] != "pembuat"){ echo "disabled"; } }?>>Hapus</button>
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