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
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <!-- your steps here -->
                                    <div class="step" data-target="#info-awal">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="part-info-awal">
                                            <span class="bs-stepper-circle">1</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#info-kursus">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#info-materi">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#info-deskripsi">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">4</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#info-editor">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">5</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <form action="/admin/modul/updatemodul/<?= $id; ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="<?= $modul['cover']; ?>" name="sampulLama">
                                        <div id="info-awal" class="content" role="tabpanel" aria-labelledby="part-info-awal">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Judul</label>
                                                <input type="judul" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul" name="judul" value="<?php if(old('judul')){ echo old('judul'); }else{echo $modul['judul_modul'];}; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Kategori</label>
                                                <select class="form-control select2" style="width: 100%;" name="kategori">
                                                    <?php foreach($kategori as $dataKategori) : ?>
                                                        <option value="<?= $dataKategori['id_kategori'] ?>" <?php if(old('kategori')){if(old('kategori') == $dataKategori['id_kategori']){ echo "selected"; }}else if($modul['id_kategori'] == $dataKategori['id_kategori']){ echo "selected"; } ?>><?= $dataKategori['nama_kategori'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Level</label>
                                                <select class="form-control select2" style="width: 100%;" name="level">
                                                    <option value="mudah" <?php if(old('level')){if(old('level') == "mudah"){ echo "selected"; }}else if($modul['level'] == "mudah"){ echo "selected"; } ?>>Mudah</option>
                                                    <option value="menengah" <?php if(old('level')){if(old('level') == "menengah"){ echo "selected"; }}else if($modul['level'] == "menengah"){ echo "selected"; } ?>>Menengah</option>
                                                    <option value="sulit" <?php if(old('level')){if(old('level') == "sulit"){ echo "selected"; }}else if($modul['level'] == "sulit"){ echo "selected"; } ?>>Sulit</option>
                                                </select>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                        </div>
                                        <div id="info-kursus" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-target">
                                                    <label for="exampleInputFile">Target Pembelajaran</label>
                                                    <button type="button" class="btn btn-primary col-sm-2" id="tambahTarget" onclick="targetModul.addnew()">Tambah</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-persyaratan">
                                                    <label for="exampleInputFile">Persyaratan</label>
                                                    <button type="button" class="btn btn-primary col-sm-2" id="tambahPersyaratan" onclick="syaratModul.addnew()">Tambah</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-saran">
                                                    <label for="exampleInputFile">Disarankan Untuk</label>
                                                    <button type="button" class="btn btn-primary col-sm-2" id="tambahSaran" onclick="saranModul.addnew()">Tambah</button>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                                            <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                        </div>
                                        <div id="info-materi" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group" >
                                                <div class="card card-default" style="padding: 10px" id="wadah-modul">
                                                    <label for="exampleInputFile">Masukkan Sub Modul dan Materi</label>
                                                    <?php if(old('subModul')) : ?>
                                                        <script>
                                                            sessionStorage.setItem('subModulOld', <?php echo json_encode(old('subModul'));?>);
                                                        </script>
                                                    <?php endif; ?>
                                                    <button type="button" class="btn btn-primary col-sm-2" id="tambahModul" onclick="modul.addnew()" style="margin-top: 10px">Tambah</button>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                                            <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                        </div>
                                        <div id="info-deskripsi" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group" >
                                                <div class="card card-default" style="padding: 10px" id="wadah-modul">
                                                    <label for="exampleInputFile">Deskripsi</label>
                                                    <div class="card card-default">
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Deskripsi Modul</label>
                                                                        <textarea class="summernote" name="deskripsi"><?php if(old('deskripsi')){ echo old('deskripsi'); }else{echo $modul['deskripsi'];} ?></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Cover Modul</label>
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="customFile" name="fileCover">
                                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                                            <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                        </div>
                                        <div id="info-editor" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-target">
                                                    <label for="exampleInputFile">Tambahkan Editor</label>
                                                    <select class="form-control select2" style="width: 100%;" name="editor[]" multiple="multiple">
                                                        <?php $indeksEditor = 0; ?>
                                                        <?php foreach($admin as $data) : ?>
                                                        <option value="<?= $data['email']; ?>" <?php if(old('editor')){ if(isset(old('editor')[$indeksEditor])){if($data['email'] == old('editor')[$indeksEditor]) { echo "selected"; }}}else{if(isset($editor[$indeksEditor])){if($editor[$indeksEditor]['email'] == $data['email']){echo "selected";}}} ?>><?= $data['email']; ?></option>
                                                        <?php $indeksEditor++; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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