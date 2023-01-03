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
                            <h3 class="card-title">Input Data Testimoni</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="/admin/testimoni/inserttestimoni" method="post"  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Profile</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="profile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Deskripsi</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="summernote" name="deskripsi"><?php if(old('deskripsi')){ echo old('deskripsi'); } ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nama Testimoni</label>
                                            <input class="form-control" placeholder="Input Nama Testimoni" required name="nama">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Bidang</label>
                                            <input id="inputDiskon" class="form-control" placeholder="Inputkan Bidang" name="bidang">
                                        </div>
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