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
                                    <form action="/admin/modul/insertmodul" method="post" enctype="multipart/form-data">
                                        <div id="info-awal" class="content" role="tabpanel" aria-labelledby="part-info-awal">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Judul</label>
                                                <input type="judul" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul" name="judul" value="<?= old('judul'); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Kategori</label>
                                                <select class="form-control select2" style="width: 100%;" name="kategori">
                                                    <option selected="selected" value="Android">Android</option>
                                                    <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                                                    <option value="Web">Web</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Level</label>
                                                <select class="form-control select2" style="width: 100%;" name="level">
                                                    <option selected="selected">Mudah</option>
                                                    <option>Menengah</option>
                                                    <option>Sulit</option>
                                                </select>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                        </div>
                                        <div id="info-kursus" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-target">
                                                    <label for="exampleInputFile">Target Pembelajaran</label>
                                                    <div class="card card-default">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Input Target</h3>
                                                            <div class="card-tools">
                                                                <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Target</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Target" name="target[]" value="<?php if(old('target')){ echo old('target')[0]; } ?>">
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                    <?php 
                                                        if(old('target')){
                                                            if(count(old('target')) > 1){
                                                                for($i = 1; $i < count(old('target')); $i++){
                                                                    if(old('target')[$i] !== ""){
                                                                        echo "<div class=\"card card-default\">
                                                                        <div class=\"card-header\">
                                                                            <h3 class=\"card-title\">Input Target</h3>
                                                                            <div class=\"card-tools\">
                                                                                <a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                                                    <i class=\"fas fa-minus\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-header -->
                                                                        <div class=\"card-body\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-12\">
                                                                                    <div class=\"form-group\">
                                                                                        <label>Target</label>
                                                                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Target\" name=\"target[]\" value=\"". old('target')[$i]."\">
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.col -->
                                                                            </div>
                                                                            <!-- /.row -->
                                                                        </div>
                                                                        <!-- /.card-body -->
                                                                    </div>"; 
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <a class="btn btn-primary col-sm-2" id="tambahTarget">Tambah</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-persyaratan">
                                                    <label for="exampleInputFile">Persyaratan</label>
                                                    <div class="card card-default">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Input Persyaratan</h3>
                                                            <div class="card-tools">
                                                                <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Persyaratan</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Persyaratan" name="syarat[]" value="<?php if(old('syarat')){ echo old('syarat')[0]; } ?>">
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                    <?php 
                                                        if(old('syarat')){
                                                            if(count(old('syarat')) > 1){
                                                                for($i = 1; $i < count(old('syarat')); $i++){
                                                                    if(old('syarat')[$i] !== ""){
                                                                        echo "<div class=\"card card-default\">
                                                                        <div class=\"card-header\">
                                                                            <h3 class=\"card-title\">Input Persyaratan</h3>
                                                                            <div class=\"card-tools\">
                                                                                <a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                                                    <i class=\"fas fa-minus\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-header -->
                                                                        <div class=\"card-body\">
                                                                            <div class=\"row\">
                                                                                <div class=\"col-md-12\">
                                                                                    <div class=\"form-group\">
                                                                                        <label>Persyaratan</label>
                                                                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Persyaratan\" name=\"syarat[]\" value=\"".old('syarat')[$i]."\">
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.col -->
                                                                            </div>
                                                                            <!-- /.row -->
                                                                        </div>
                                                                        <!-- /.card-body -->
                                                                    </div>"; 
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <a class="btn btn-primary col-sm-2" id="tambahPersyaratan">Tambah</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="card card-default" style="padding: 10px" id="wadah-saran">
                                                    <label for="exampleInputFile">Disarankan Untuk</label>
                                                    <div class="card card-default">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Input Saran</h3>
                                                            <div class="card-tools">
                                                                <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Saran</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Saran" name="saran[]" value="<?php if(old('syarat')){ echo old('saran')[0]; } ?>">
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                    <?php 
                                                        if(old('saran')){
                                                            if(count(old('saran')) > 1){
                                                                for($i = 1; $i < count(old('saran')); $i++){
                                                                    if(old('saran')[$i] !== ""){
                                                                        echo "<div class=\"card card-default\">
                                                                            <div class=\"card-header\">
                                                                                <h3 class=\"card-title\">Input Saran</h3>
                                                                                <div class=\"card-tools\">
                                                                                    <a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                                                                        <i class=\"fas fa-minus\"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.card-header -->
                                                                            <div class=\"card-body\">
                                                                                <div class=\"row\">
                                                                                    <div class=\"col-md-12\">
                                                                                        <div class=\"form-group\">
                                                                                            <label>Saran</label>
                                                                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Saran\" name=\"saran[]\" value=\"". old('saran')[$i]. "\">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>"; 
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    <a class="btn btn-primary col-sm-2" id="tambahSaran">Tambah</a>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                                            <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                                        </div>
                                        <div id="info-materi" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                            <div class="form-group" >
                                                <div class="card card-default" style="padding: 10px" id="wadah-modul">
                                                    <label for="exampleInputFile">Materi</label>
                                                    <div class="card card-default">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Input Sub Modul</h3>
                                                            <div class="card-tools">
                                                                <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                    <i class="fas fa-minus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group wadah-materi">
                                                                        <label>Sub Modul</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Sub Modul" name="subModul[0][subModul]" value="<?php if(old('subModul')){ echo old('subModul')[0]['subModul']; } ?>">
                                                                        <!-- Untuk Materi -->
                                                                        <div class="card card-default" style="margin-top: 20px">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Input Materi</h3>
                                                                                <div class="card-tools">
                                                                                    <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label>Judul Materi</label>
                                                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[0][materi][0][judulMateri]" value="<?php if(old('subModul')){ echo old('subModul')[0]['materi'][0]['judulMateri']; } ?>">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Isi Materi</label>
                                                                                            <textarea class="summernote" name="subModul[0][materi][0][isiMateri]" ><?php if(old('subModul')){ echo old('subModul')[0]['materi'][0]['isiMateri']; } ?></textarea>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="exampleInputFile">Visibilitas Untuk</label>
                                                                                            <select class="form-control select2" style="width: 100%;" name="subModul[0][materi][0][visibilitas]">
                                                                                                <option value="1" <?php if(old('subModul')){ if(old('subModul')[0]['materi'][0]['visibilitas'] == 1 ){echo "selected"; }; } ?>>Guest</option>
                                                                                                <option value="2" <?php if(old('subModul')){ if(old('subModul')[0]['materi'][0]['visibilitas'] == 2 ){echo "selected"; }; } ?>>User Tidak Berlangganan</option>
                                                                                                <option value="3" <?php if(old('subModul')){ if(old('subModul')[0]['materi'][0]['visibilitas'] == 3 ){echo "selected"; }; } ?>>User Berlangganan</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div>
                                                                        </div>
                                                                        <!-- Akhir Untuk Materi -->                                                                        
                                                                        <?php if(old('subModul')) : ?>
                                                                            <?php if(count(old('subModul')[0]['materi']) > 1) :?>
                                                                                <?php for($i = 1; $i < count(old('subModul')[0]['materi']); $i++) : ?>
                                                                                    <?php if((old('subModul')[0]['materi'][$i]['judulMateri'] !== "") || (old('subModul')[0]['materi'][$i]['isiMateri'] !== "")) : ?>
                                                                                        <div class="card card-default" style="margin-top: 20px">
                                                                                            <div class="card-header">
                                                                                                <h3 class="card-title">Input Materi</h3>
                                                                                                <div class="card-tools">
                                                                                                    <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                                        <i class="fas fa-minus"></i>
                                                                                                    </a>
                                                                                                    <a type="button" class="btn btn-tool" data-card-widget="remove" onclick="this.parentNode.parentNode.parentNode.remove()">
                                                                                                        <i class="fas fa-times"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label>Judul Materi</label>
                                                                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[0][materi][<?= $i ?>][judulMateri]" value="<?= old('subModul')[0]['materi'][$i]['judulMateri']; ?>">
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label>Isi Materi</label>
                                                                                                            <textarea class="summernote" name="subModul[0][materi][<?= $i; ?>][isiMateri]" ><?= old('subModul')[0]['materi'][$i]['isiMateri']; ?></textarea>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label for="exampleInputFile">Visibilitas Untuk</label>
                                                                                                            <select class="form-control select2" style="width: 100%;" name="subModul[0][materi][<?= $i; ?>][visibilitas]">
                                                                                                                <option value="1" <?php if(old('subModul')){ if(old('subModul')[0]['materi'][$i]['visibilitas'] == 1 ){echo "selected"; }; } ?>>Guest</option>
                                                                                                                <option value="2" <?php if(old('subModul')){ if(old('subModul')[0]['materi'][$i]['visibilitas'] == 2 ){echo "selected"; }; } ?>>User Tidak Berlangganan</option>
                                                                                                                <option value="3" <?php if(old('subModul')){ if(old('subModul')[0]['materi'][$i]['visibilitas'] == 3 ){echo "selected"; }; } ?>>User Berlangganan</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- /.col -->
                                                                                                </div>
                                                                                                <!-- /.row -->
                                                                                            </div>
                                                                                        </div> 
                                                                                    <?php endif;?>
                                                                                <?php endfor;?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                        <a class="btn btn-primary col-sm-2 tambahMateri">Tambah</a>
                                                                    </div>
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                    <?php if(old('subModul')) : ?>
                                                        <?php if(count(old('subModul')) > 1) : ?>
                                                            <?php for($i = 1; $i < count(old('subModul')); $i++) :  ?>
                                                                <div class="card card-default">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">Input Sub Modul</h3>
                                                                        <div class="card-tools">
                                                                            <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                <i class="fas fa-minus"></i>
                                                                            </a>
                                                                            <a type="button" class="btn btn-tool" data-card-widget="remove" onclick="this.parentNode.parentNode.parentNode.remove()">
                                                                                <i class="fas fa-times"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.card-header -->
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group wadah-materi">
                                                                                    <label>Sub Modul</label>
                                                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Sub Modul" name="subModul[<?= $i; ?>][subModul]" value="<?php if(old('subModul')){ echo old('subModul')[$i]['subModul']; } ?>">
                                                                                    <!-- Untuk Materi -->
                                                                                    <div class="card card-default" style="margin-top: 20px">
                                                                                        <div class="card-header">
                                                                                            <h3 class="card-title">Input Materi</h3>
                                                                                            <div class="card-tools">
                                                                                                <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                                    <i class="fas fa-minus"></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label>Judul Materi</label>
                                                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[<?= $i; ?>][materi][0][judulMateri]" value="<?php if(old('subModul')){ echo old('subModul')[$i]['materi'][0]['judulMateri']; } ?>">
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                        <label>Isi Materi</label>
                                                                                                        <textarea class="summernote" name="subModul[<?= $i; ?>][materi][0][isiMateri]" ><?php if(old('subModul')){ echo old('subModul')[$i]['materi'][0]['isiMateri']; } ?></textarea>
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                            <label for="exampleInputFile">Visibilitas Untuk</label>
                                                                                                            <select class="form-control select2" style="width: 100%;" name="subModul[<?= $i; ?>][materi][0][visibilitas]">
                                                                                                                <option value="1" <?php if(old('subModul')){ if(old('subModul')[$i]['materi'][0]['visibilitas'] == 1 ){echo "selected"; }; } ?>>Guest</option>
                                                                                                                <option value="2" <?php if(old('subModul')){ if(old('subModul')[$i]['materi'][0]['visibilitas'] == 2 ){echo "selected"; }; } ?>>User Tidak Berlangganan</option>
                                                                                                                <option value="3" <?php if(old('subModul')){ if(old('subModul')[$i]['materi'][0]['visibilitas'] == 3 ){echo "selected"; }; } ?>>User Berlangganan</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                <!-- /.col -->
                                                                                            </div>
                                                                                            <!-- /.row -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Akhir Untuk Materi -->
                                                                                    <?php if(old('subModul')) : ?>
                                                                                        <?php if(count(old('subModul')[$i]['materi']) > 1) : ?>
                                                                                            <?php for($j = 1; $j < count(old('subModul')[$i]['materi']); $j++) :?>
                                                                                                <?php if((old('subModul')[$i]['materi'][$j]['judulMateri'] !== "") || (old('subModul')[$i]['materi'][$j]['isiMateri'] !== "")) : ?>
                                                                                                    <div class="card card-default" style="margin-top: 20px">
                                                                                                        <div class="card-header">
                                                                                                            <h3 class="card-title">Input Materi</h3>
                                                                                                            <div class="card-tools">
                                                                                                                <a type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                                                    <i class="fas fa-minus"></i>
                                                                                                                </a>
                                                                                                                <a type="button" class="btn btn-tool" data-card-widget="remove" onclick="this.parentNode.parentNode.parentNode.remove()">
                                                                                                                    <i class="fas fa-times"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label>Judul Materi</label>
                                                                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][judulMateri]" value="<?= old('subModul')[$i]['materi'][$j]['judulMateri'] ?>">
                                                                                                                    </div>
                                                                                                                    <div class="form-group">
                                                                                                                        <label>Isi Materi</label>
                                                                                                                        <textarea class="summernote" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][isiMateri]" ><?= old('subModul')[$i]['materi'][$j]['isiMateri'] ?></textarea>
                                                                                                                    </div>
                                                                                                                    <div class="form-group">
                                                                                                                            <label for="exampleInputFile">Visibilitas Untuk</label>
                                                                                                                            <select class="form-control select2" style="width: 100%;" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][visibilitas]">
                                                                                                                                <option value="1" <?php if(old('subModul')){ if(old('subModul')[$i]['materi'][$j]['visibilitas'] == 1 ){echo "selected"; }; } ?>>Guest</option>
                                                                                                                                <option value="2" <?php if(old('subModul')){ if(old('subModul')[$i]['materi'][$j]['visibilitas'] == 2 ){echo "selected"; }; } ?>>User Tidak Berlangganan</option>
                                                                                                                                <option value="3" <?php if(old('subModul')){ if(old('subModul')[$i]['materi'][$j]['visibilitas'] == 3 ){echo "selected"; }; } ?>>User Berlangganan</option>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <!-- /.col -->
                                                                                                            </div>
                                                                                                            <!-- /.row -->
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                <?php endif; ?>
                                                                                            <?php endfor; ?>    
                                                                                        <?php endif; ?>
                                                                                    <?php endif; ?>
                                                                                    <a class="btn btn-primary col-sm-2 tambahMateri" onclick="addTambah(this.parentNode.parentNode.parentNode.parentNode)">Tambah</a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.col -->
                                                                        </div>
                                                                        <!-- /.row -->
                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            <?php endfor; ?>
                                                        <?php endif; ?>    
                                                    <?php endif; ?>                                                
                                                    <a class="btn btn-primary col-sm-2" id="tambahModul">Tambah</a>
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
                                                                        <textarea class="summernote" name="deskripsi"><?php if(old('deskripsi')){ echo old('deskripsi'); } ?></textarea>
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
                                                        <option value="<?= $data['email']; ?>" <?php if(old('editor')){ if(isset(old('editor')[$indeksEditor])){if($data['email'] == old('editor')[$indeksEditor]) { echo "selected"; }}} ?>><?= $data['email']; ?></option>
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