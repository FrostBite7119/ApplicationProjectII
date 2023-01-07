<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="/adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
  <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="/adminlte/plugins/moment/moment.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Edumall</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == ""){echo "active"; }?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/user" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "user"){echo "active"; }?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/modul" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "modul"){echo "active"; }?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Modul
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/langganan" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "langganan"){echo "active"; }?>">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Langganan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/testimoni" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "testimoni"){echo "active"; }?>">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Testimoni
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/pembayaran" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "pembayaran"){echo "active"; }?>">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/kategori" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "kategori"){echo "active"; }?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/login/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?= $this->renderSection('content'); ?>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022-2023 Edumall.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- date-range-picker -->
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Page specific script -->
<script>
  //Date range picker

  <?php if(isset($dataLangganan)): ?>
    <?php if($dataLangganan['waktu_diskon'] != null) : ?>
      <?php $tgl = explode(' - ', $dataLangganan['waktu_diskon']); ?>
      
      let startDate = moment('<?= $tgl[0]; ?>', 'DD/MM/YYYY');
      let endDate = moment('<?= $tgl[1]; ?>', 'DD/MM/YYYY');

      // Initialize the date range picker with the start date
      $('#reservation').daterangepicker({
        startDate: startDate,
        endDate: endDate,
        locale: {
          format: 'DD/MM/YYYY'
        }
      });
    <?php else: ?>
      $('#reservation').daterangepicker({
        locale: {
          format: 'DD/MM/YYYY'
        }
      });
    <?php endif; ?>
  <?php else: ?>
    $('#reservation').daterangepicker({
      locale: {
        format: 'DD/MM/YYYY'
      }
    });
  <?php endif; ?>

  let inputDiskon = document.getElementById('inputDiskon');

  if(document.getElementById('inputDiskon').value.length == 0 || document.getElementById('inputDiskon').value == 0){
    document.getElementById('wadahRentangWaktu').style.display = 'none';
  }
  
  inputDiskon.addEventListener('input', function(){
    const jumlahKarakter = document.getElementById('inputDiskon').value.length;
    const nilaiDiskon = document.getElementById('inputDiskon').value;
    if(jumlahKarakter > 0 || nilaiDiskon != 0){
      document.getElementById('wadahRentangWaktu').style.display = 'block';
    }else{
      document.getElementById('wadahRentangWaktu').style.display = 'none';
    }
  });
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<!-- BS-Stepper -->
<script src="/adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>

<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>
<!-- Select2 -->
<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
<script>
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
</script>

<!-- Summernote -->
<script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('.summernote').summernote()
  })
</script>

<!-- bs-custom-file-input -->
<script src="/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>


<!-- Input Modul -->
<script>

    // Input Target
    let targetModul = {
      btnTambahTarget: document.getElementById('tambahTarget'),
      wadahTarget: document.getElementById('wadah-target'),
      addnew: function(value=""){
        let newTarget = document.createElement('div');
        newTarget.classList.add('card');
        newTarget.classList.add('card-default');

        newTarget.innerHTML = `
            <div class="card-header"> 
              <h3 class="card-title">Input Target</h3> 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" onclick="targetModul.moveUp(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-up"></i>
                </button>
                <button type="button" class="btn btn-tool" onclick="targetModul.moveDown(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-down"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" onclick="this.parentNode.parentNode.parentNode.remove()">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Target</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Target" name="target[]" value="${value}">
                  </div>
                </div>
              </div>
            </div>`;

        targetModul.wadahTarget.insertBefore(newTarget, targetModul.btnTambahTarget);
      },
      moveUp: function(element){
        let e = $(element);
        
        if(element.previousElementSibling.tagName == 'DIV'){
          e.prev().insertAfter(e);
        }
      },
      moveDown: function(element){
        let e = $(element);

        if(element.nextElementSibling.tagName == 'DIV'){
          e.next().insertBefore(e);
        }
      }
    }

    <?php if(old('target')) :?>
      <?php for($i = 0; $i < count(old('target')); $i++) : ?>
        targetModul.addnew("<?= old('target')[$i]; ?>");
      <?php endfor; ?>
    <?php elseif(isset($target)): ?>
      <?php for($i = 0; $i < count($target); $i++) : ?>
        targetModul.addnew("<?= $target[$i]['target']; ?>");
      <?php endfor; ?>
    <?php endif; ?>

    // Input Persyaratan
    let syaratModul = {
      btnTambahPersyaratan: document.getElementById('tambahPersyaratan'),
      wadahPersyaratan: document.getElementById('wadah-persyaratan'),
      addnew: function(value=""){
        let newSyarat = document.createElement('div');
        newSyarat.classList.add('card');
        newSyarat.classList.add('card-default');

        newSyarat.innerHTML = `
            <div class="card-header"> 
              <h3 class="card-title">Input Persyaratan</h3> 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" onclick="syaratModul.moveUp(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-up"></i>
                </button>
                <button type="button" class="btn btn-tool" onclick="syaratModul.moveDown(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-down"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" onclick="this.parentNode.parentNode.parentNode.remove()">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Persyaratan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Persyaratan" name="syarat[]" value="${value}">
                  </div>
                </div>
              </div>
            </div>`;

        syaratModul.wadahPersyaratan.insertBefore(newSyarat, syaratModul.btnTambahPersyaratan);
      },
      moveUp: function(element){
        let e = $(element);
        
        if(element.previousElementSibling.tagName == 'DIV'){
          e.prev().insertAfter(e);
        }
      },
      moveDown: function(element){
        let e = $(element);

        if(element.nextElementSibling.tagName == 'DIV'){
          e.next().insertBefore(e);
        }
      }
    }

    <?php if(old('syarat')) :?>
      <?php for($i = 0; $i < count(old('syarat')); $i++) : ?>
        syaratModul.addnew("<?= old('syarat')[$i]; ?>");
      <?php endfor; ?>
    <?php elseif(isset($syarat)): ?>
      <?php for($i = 0; $i < count($syarat); $i++) : ?>
        syaratModul.addnew("<?= $syarat[$i]['persyaratan']; ?>");
      <?php endfor; ?>
    <?php endif; ?>

    // Input Saran
    let saranModul = {
      btnTambahSaran: document.getElementById('tambahSaran'),
      wadahSaran: document.getElementById('wadah-saran'),
      addnew: function(value=""){
        let newSaran = document.createElement('div');
        newSaran.classList.add('card');
        newSaran.classList.add('card-default');

        newSaran.innerHTML = `
            <div class="card-header"> 
              <h3 class="card-title">Input Saran</h3> 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" onclick="saranModul.moveUp(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-up"></i>
                </button>
                <button type="button" class="btn btn-tool" onclick="saranModul.moveDown(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-down"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" onclick="this.parentNode.parentNode.parentNode.remove()">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Saran</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Saran" name="saran[]" value="${value}">
                  </div>
                </div>
              </div>
            </div>`;

        saranModul.wadahSaran.insertBefore(newSaran, saranModul.btnTambahSaran);
      },
      moveUp: function(element){
        let e = $(element);
        
        if(element.previousElementSibling.tagName == 'DIV'){
          e.prev().insertAfter(e);
        }
      },
      moveDown: function(element){
        let e = $(element);

        if(element.nextElementSibling.tagName == 'DIV'){
          e.next().insertBefore(e);
        }
      }
    }

    <?php if(old('saran')) :?>
      <?php for($i = 0; $i < count(old('saran')); $i++) : ?>
        saranModul.addnew("<?= old('saran')[$i]; ?>");
      <?php endfor; ?>
      <?php elseif(isset($saran)): ?>
    <?php for($i = 0; $i < count($saran); $i++) : ?>
        saranModul.addnew("<?= $saran[$i]['disarankan']; ?>");
      <?php endfor; ?>
    <?php endif; ?>

    // Input Modul
    let modul = {
      totalInput: 0,
      addnew: function(){
        let btnTambahModul = document.getElementById('tambahModul');

        let newModul = document.createElement('div');
        newModul.classList.add('card');
        newModul.classList.add('card-default');

        let wadahModul = document.getElementById('wadah-modul');

        newModul.innerHTML = `
        <div class="card-header">
          <h3 class="card-title">Input Sub Modul</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" onclick="modul.moveUp(this.parentNode.parentNode.parentNode)">
              <i class="fas fa-arrow-up"></i>
            </button>
            <button type="button" class="btn btn-tool" onclick="modul.moveDown(this.parentNode.parentNode.parentNode)">
              <i class="fas fa-arrow-down"></i>
            </button>
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
              <div class="form-group wadah-materi">
                <label>Sub Modul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Sub Modul" name="subModul[${modul.totalInput}][subModul]">
                <button type="button" class="btn btn-primary col-sm-2 tambahMateri" onclick="materi.addMateri(this, this.parentNode, ${modul.totalInput})" style="margin-top: 10px">Tambah</button>
              </div>
            </div>
          </div>
        </div>`;

        wadahModul.insertBefore(newModul, btnTambahModul);
        modul.totalInput++;
      },
      moveUp: function(element){
        let e = $(element);
        
        if(element.previousElementSibling.tagName == 'DIV'){
          e.prev().insertAfter(e);
        }
      },
      moveDown: function(element){
        let e = $(element);

        if(element.nextElementSibling.tagName == 'DIV'){
          e.next().insertBefore(e);
        }
      }
    }

    let materi = {
      inputMateri: 0,
      addMateri: function(btnTambahMateri, wadahMateri, indexModul){
        let newMateri = document.createElement('div');
        newMateri.classList.add('card');
        newMateri.classList.add('card-default');
        newMateri.style.marginTop='20px';

        newMateri.innerHTML = `
        <div class="card-header">
          <h3 class="card-title">Input Materi</h3>
          <div class="card-tools">
              <a type="button" class="btn btn-tool" onclick="materi.moveUp(this.parentNode.parentNode.parentNode)">
                <i class="fas fa-arrow-up"></i>
              </a>
              <a type="button" class="btn btn-tool" onclick="materi.moveDown(this.parentNode.parentNode.parentNode)">
                <i class="fas fa-arrow-down"></i>
              </a>
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
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[${indexModul}][materi][${materi.inputMateri}][judulMateri]">
                </div>
                <div class="form-group">
                    <label>Isi Materi</label>
                    <textarea class="summernote" name="subModul[${indexModul}][materi][${materi.inputMateri}][isiMateri]"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Visibilitas Untuk</label>
                    <select class="form-control select2" style="width: 100%;" name="subModul[${indexModul}][materi][${materi.inputMateri}][visibilitas]">
                    <option value="0" >Guest</option>
                    <option value="1" >User Tidak Berlangganan</option>
                    <option value="2" >User Berlangganan</option>
                    </select>
                </div>
              </div>
          </div>
        </div>`;

        wadahMateri.insertBefore(newMateri, btnTambahMateri);

        materi.inputMateri++;

        $(function () {
          // Summernote
          $('.summernote').summernote()
        })
      },
      moveUp: function(element){
        let e = $(element);
        
        if(element.previousElementSibling.tagName == 'DIV'){
          e.prev().insertAfter(e);
        }
      },
      moveDown: function(element){
        let e = $(element);

        if(element.nextElementSibling.tagName == 'DIV'){
          e.next().insertBefore(e);
        }
      }
    }

    
    <?php if(old('subModul')) : ?>
      let btnTambahModul = document.getElementById('tambahModul');
      let wadahModul = document.getElementById('wadah-modul');
      let newModul = null;
      let newMateri = null;
      <?php $i = 0;  ?>
      <?php $j = 0; ?>
      <?php foreach(old('subModul') as $data) :  ?>
        newModul = document.createElement('div');
        newModul.classList.add('card');
        newModul.classList.add('card-default');

        newModul.innerHTML = `
        <div class="card-header">
          <h3 class="card-title">Input Sub Modul</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" onclick="modul.moveUp(this.parentNode.parentNode.parentNode)">
              <i class="fas fa-arrow-up"></i>
            </button>
            <button type="button" class="btn btn-tool" onclick="modul.moveDown(this.parentNode.parentNode.parentNode)">
              <i class="fas fa-arrow-down"></i>
            </button>
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
              <div class="form-group wadah-materi">
                <label>Sub Modul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Sub Modul" name="subModul[<?= $i; ?>][subModul]" value="<?= $data['subModul']; ?>">
                <button type="button" class="btn btn-primary col-sm-2 tambahMateri" onclick="materi.addMateri(this, this.parentNode, <?= $i; ?>)" style="margin-top: 10px">Tambah</button>
              </div>
            </div>
          </div>
        </div>`;

        <?php if(isset($data['materi'])) : ?>
          <?php foreach($data['materi'] as $dataMateri) : ?>
            newMateri = document.createElement('div');
            newMateri.classList.add('card');
            newMateri.classList.add('card-default');
            newMateri.style.marginTop='20px';

            newMateri.innerHTML = `
            <div class="card-header">
              <h3 class="card-title">Input Materi</h3>
              <div class="card-tools">
                <a type="button" class="btn btn-tool" onclick="materi.moveUp(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-up"></i>
                </a>
                <a type="button" class="btn btn-tool" onclick="materi.moveDown(this.parentNode.parentNode.parentNode)">
                  <i class="fas fa-arrow-down"></i>
                </a>
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
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][judulMateri]" value="<?= $dataMateri['judulMateri']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Isi Materi</label>
                    <textarea class="summernote" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][isiMateri]"><?= $dataMateri['isiMateri']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Visibilitas Untuk</label>
                    <select class="form-control select2" style="width: 100%;" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][visibilitas]">
                      <option value="0" <?php if($dataMateri['visibilitas'] == 1){echo "selected"; }?>>Guest</option>
                      <option value="1" <?php if($dataMateri['visibilitas'] == 2){echo "selected"; }?>>User Tidak Berlangganan</option>
                      <option value="2" <?php if($dataMateri['visibilitas'] == 3){echo "selected"; }?>>User Berlangganan</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>`;

          newModul.querySelector('.wadah-materi').insertBefore(newMateri, newModul.querySelector('.tambahMateri'));
          materi.inputMateri++;
          <?php $j++; ?>
          <?php endforeach; ?>  
        <?php endif;?>

        wadahModul.insertBefore(newModul, btnTambahModul);
        modul.totalInput++;
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php elseif(isset($subModul)): ?>
      let btnTambahModul = document.getElementById('tambahModul');
      let wadahModul = document.getElementById('wadah-modul');
      let newModul = null;
      let newMateri = null;
      <?php $i = 0;  ?>
      <?php $j = 0; ?>

      <?php foreach($subModul as $data) :  ?>
        newModul = document.createElement('div');
        newModul.classList.add('card');
        newModul.classList.add('card-default');

        newModul.innerHTML = `
        <div class="card-header">
          <h3 class="card-title">Input Sub Modul</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" onclick="modul.moveUp(this.parentNode.parentNode.parentNode)">
              <i class="fas fa-arrow-up"></i>
            </button>
            <button type="button" class="btn btn-tool" onclick="modul.moveDown(this.parentNode.parentNode.parentNode)">
              <i class="fas fa-arrow-down"></i>
            </button>
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
              <div class="form-group wadah-materi">
                <label>Sub Modul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Sub Modul" name="subModul[<?= $i; ?>][subModul]" value="<?= $data['sub_modul']; ?>">
                <button type="button" class="btn btn-primary col-sm-2 tambahMateri" onclick="materi.addMateri(this, this.parentNode, <?= $i; ?>)" style="margin-top: 10px">Tambah</button>
              </div>
            </div>
          </div>
        </div>`;

        <?php if(isset($materi)) : ?>
          <?php foreach($materi as $dataMateri) : ?>
            <?php if($dataMateri['id_sub_modul'] == $data['id_sub_modul']): ?>
              newMateri = document.createElement('div');
              newMateri.classList.add('card');
              newMateri.classList.add('card-default');
              newMateri.style.marginTop='20px';

              newMateri.innerHTML = `
              <div class="card-header">
                <h3 class="card-title">Input Materi</h3>
                <div class="card-tools">
                  <a type="button" class="btn btn-tool" onclick="materi.moveUp(this.parentNode.parentNode.parentNode)">
                    <i class="fas fa-arrow-up"></i>
                  </a>
                  <a type="button" class="btn btn-tool" onclick="materi.moveDown(this.parentNode.parentNode.parentNode)">
                    <i class="fas fa-arrow-down"></i>
                  </a>
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
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Materi" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][judulMateri]" value="<?= $dataMateri['judul_materi']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Isi Materi</label>
                      <textarea class="summernote" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][isiMateri]"><?= $dataMateri['isi_materi']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Visibilitas Untuk</label>
                      <select class="form-control select2" style="width: 100%;" name="subModul[<?= $i; ?>][materi][<?= $j; ?>][visibilitas]">
                        <option value="0" <?php if($dataMateri['level'] == 1){echo "selected"; }?>>Guest</option>
                        <option value="1" <?php if($dataMateri['level'] == 2){echo "selected"; }?>>User Tidak Berlangganan</option>
                        <option value="2" <?php if($dataMateri['level'] == 3){echo "selected"; }?>>User Berlangganan</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>`;
              newModul.querySelector('.wadah-materi').insertBefore(newMateri, newModul.querySelector('.tambahMateri'));
              materi.inputMateri++;
              <?php $j++; ?>
            <?php endif; ?>
          <?php endforeach; ?>  
        <?php endif;?>

        wadahModul.insertBefore(newModul, btnTambahModul);
        modul.totalInput++;
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
    
</script>

</body>
</html>
