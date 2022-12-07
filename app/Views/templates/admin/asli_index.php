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
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
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
            <a href="/admin/modul" class="nav-link <?php $request = \Config\Services::request(); if($request->uri->getSegment(2) == "modul"){echo "active"; }?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Modul
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
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
<!-- Page specific script -->
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

<!-- Input -->
<script>
  // Tambah Target
  let btnTambahTarget = document.getElementById('tambahTarget');
  btnTambahTarget.addEventListener('click', function(){
    let newTarget = document.createElement('div');
    newTarget.innerHTML = "<div class=\"card card-default\"\> <div class=\"card-header\"\> <h3 class=\"card-title\">Input Target</h3\> <div class=\"card-tools\"\> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\> <i class=\"fas fa-minus\"></i\></button\><button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"\ onclick=\"this.parentNode.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i\></button\></div\></div\><!-- /.card-header --\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Target</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Target\" name=\"target[]\"\></div\></div\><!-- /.col --\></div\><!-- /.row --\></div\><!-- /.card-body --\></div\><!-- /.card -->";

    let wadahTarget = document.getElementById('wadah-target');

    wadahTarget.insertBefore(newTarget, btnTambahTarget);
  });

  // Tambah Syarat
  let btnTambahPersyaratan = document.getElementById('tambahPersyaratan');
  btnTambahPersyaratan.addEventListener('click', function(){
    let newSyarat = document.createElement('div');
    newSyarat.innerHTML = "<div class=\"card card-default\"\> <div class=\"card-header\"\> <h3 class=\"card-title\">Input Persyaratan</h3\> <div class=\"card-tools\"\> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\> <i class=\"fas fa-minus\"></i\></button\><button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"\ onclick=\"this.parentNode.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i\></button\></div\></div\><!-- /.card-header --\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Persyaratan</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Persyaratan\" name=\"syarat[]\" \></div\></div\><!-- /.col --\></div\><!-- /.row --\></div\><!-- /.card-body --\></div\><!-- /.card -->";

    let wadahPersyaratan = document.getElementById('wadah-persyaratan');

    wadahPersyaratan.insertBefore(newSyarat, btnTambahPersyaratan);
  });

  // Tambah Saran
  let btnTambahSaran = document.getElementById('tambahSaran');
  btnTambahSaran.addEventListener('click', function(){
    let newSaran = document.createElement('div');
    newSaran.innerHTML = "<div class=\"card card-default\"\> <div class=\"card-header\"\> <h3 class=\"card-title\">Input Saran</h3\> <div class=\"card-tools\"\> <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\> <i class=\"fas fa-minus\"></i\></button\><button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"\ onclick=\"this.parentNode.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i\></button\></div\></div\><!-- /.card-header --\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Saran</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Saran\" name=\"saran[]\" \></div\></div\><!-- /.col --\></div\><!-- /.row --\></div\><!-- /.card-body --\></div\><!-- /.card -->";

    let wadahSaran = document.getElementById('wadah-saran');

    wadahSaran.insertBefore(newSaran, btnTambahSaran);
  });

  //Tambah Materi
  let btnTambahMateri = document.querySelector('.tambahMateri');
  btnTambahMateri.addEventListener('click', function(){
    let newMateri = document.createElement('div');
    newMateri.classList.add('card');
    newMateri.classList.add('card-default');
    newMateri.style.marginTop='20px';

    let wadahMateri = document.querySelector('.wadah-materi');
    let indexMateri = wadahMateri.childElementCount - 4;

    newMateri.innerHTML = "<div class=\"card-header\"\><h3 class=\"card-title\">Input Materi</h3\><div class=\"card-tools\"\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\><i class=\"fas fa-minus\"></i\></a\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" onclick=\"this.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i></a\></div\></div\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Judul Materi</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Judul Materi\" name=\"subModul[0][materi]["+(indexMateri + 1)+"][judulMateri]\" \></div\><div class=\"form-group\"\><label>Isi Materi</label\><textarea class=\"summernote\" name=\"subModul[0][materi]["+(indexMateri + 1)+"][isiMateri]\"></textarea></div\><div class=\"form-group\"><label for=\"exampleInputFile\">Visibilitas Untuk</label><select class=\"form-control select2\" style=\"width: 100%;\" name=\"subModul[0][materi]["+(indexMateri + 1)+"][visibilitas]\"><option value=\"1\">Guest</option><option value=\"2\">User Tidak Berlangganan</option><option value=\"3\">User Berlangganan</option\></select></div></div\></div\></div\>";

    wadahMateri.insertBefore(newMateri, btnTambahMateri);

    $(function () {
      // Summernote
      $('.summernote').summernote()
    })
  });

  //Tambah Modul
  let btnTambahModul = document.getElementById('tambahModul');
    btnTambahModul.addEventListener('click', function(){

      let newModul = document.createElement('div');
      newModul.classList.add('card');
      newModul.classList.add('card-default');

      let wadahModul = document.getElementById('wadah-modul');
      let indexModul = wadahModul.childElementCount - 3;

      newModul.innerHTML = "<div class=\"card-header\"\><h3 class=\"card-title\">Input Sub Modul</h3\><div class=\"card-tools\"\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\><i class=\"fas fa-minus\"></i\></a\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" onclick=\"this.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i></a\></div\></div\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group wadah-materi\"\><label>Sub Modul</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Sub Modul\" name=\"subModul["+(indexModul + 1) +"][subModul]\" \><div class=\"card card-default\" style=\"margin-top: 20px\"\><div class=\"card-header\"\><h3 class=\"card-title\"\>Input Materi</h3\><div class=\"card-tools\"\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\><i class=\"fas fa-minus\"></i\></a\></div\></div\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Judul Materi</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Judul Materi\" name=\"subModul["+ (indexModul + 1) +"][materi][0][judulMateri]\" \></div\><div class=\"form-group\"\><label>Isi Materi</label\><textarea class=\"summernote\" name=\"subModul["+ (indexModul + 1) +"][materi][0][isiMateri]\"></textarea\></div\><div class=\"form-group\"><label for=\"exampleInputFile\">Visibilitas Untuk</label><select class=\"form-control select2\" style=\"width: 100%;\" name=\"subModul["+ (indexModul + 1) +"][materi][0][visibilitas]\"><option value=\"1\" >Guest</option><option value=\"2\" >User Tidak Berlangganan</option><option value=\"3\" >User Berlangganan</option></select></div></div\></div\></div\></div\><a class=\"btn btn-primary col-sm-2 tambahMateri\">Tambah</a\></div\></div\></div\></div\>";

      wadahModul.insertBefore(newModul, btnTambahModul);

      //Tambah Materi 2
      let btnTambahMateri = newModul.querySelector('.tambahMateri');
      btnTambahMateri.addEventListener('click', function(){
        let newMateri = document.createElement('div');
        newMateri.classList.add('card');
        newMateri.classList.add('card-default');
        newMateri.style.marginTop='20px';

        let wadahMateri = newModul.querySelector('.wadah-materi');
        let indexMateri = wadahMateri.childElementCount - 4;

        newMateri.innerHTML = "<div class=\"card-header\"\><h3 class=\"card-title\">Input Materi</h3\><div class=\"card-tools\"\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\><i class=\"fas fa-minus\"></i\></a\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" onclick=\"this.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i></a\></div\></div\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Judul Materi</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Judul Materi\" name=\"subModul["+ (indexModul + 1) +"][materi]["+(indexMateri + 1)+"][judulMateri]\"\></div\><div class=\"form-group\"\><label>Isi Materi</label\><textarea class=\"summernote\" name=\"subModul["+ (indexModul + 1) +"][materi]["+ (indexMateri + 1) +"][isiMateri]\"></textarea\></div\><div class=\"form-group\"><label for=\"exampleInputFile\">Visibilitas Untuk</label><select class=\"form-control select2\" style=\"width: 100%;\" name=\"subModul["+ (indexModul + 1) +"][materi]["+ (indexMateri + 1) +"][visibilitas]\"><option value=\"1\" >Guest</option><option value=\"2\" >User Tidak Berlangganan</option><option value=\"3\" >User Berlangganan</option></select></div></div\></div\></div\>";

        wadahMateri.insertBefore(newMateri, btnTambahMateri);

        $(function () {
          // Summernote
          $('.summernote').summernote()
        })
      });

      $(function () {
        // Summernote
        $('.summernote').summernote()
      })
    });

    function addTambah(parentElement, indexModul){
      let btnTambahMateri = parentElement.querySelector('.tambahMateri');
      btnTambahMateri.addEventListener('click', function(){

        console.log(parentElement);
        let newMateri = document.createElement('div');
        newMateri.classList.add('card');
        newMateri.classList.add('card-default');
        newMateri.style.marginTop='20px';

        let wadahModul = document.getElementById('wadah-modul');
        let indexModul = wadahModul.childElementCount - 4;

        let wadahMateri = parentElement.querySelector('.wadah-materi');
        let indexMateri = wadahMateri.childElementCount - 4;

        newMateri.innerHTML = "<div class=\"card-header\"\><h3 class=\"card-title\">Input Materi</h3\><div class=\"card-tools\"\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\"\><i class=\"fas fa-minus\"></i\></a\><a type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" onclick=\"this.parentNode.parentNode.parentNode.remove()\"><i class=\"fas fa-times\"></i></a\></div\></div\><div class=\"card-body\"\><div class=\"row\"\><div class=\"col-md-12\"\><div class=\"form-group\"\><label>Judul Materi</label\><input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Masukkan Judul Materi\" name=\"subModul["+ (indexModul + 1) +"][materi]["+(indexMateri + 1)+"][judulMateri]\"\></div\><div class=\"form-group\"\><label>Isi Materi</label\><textarea class=\"summernote\" name=\"subModul["+ (indexModul + 1) +"][materi]["+ (indexMateri + 1) +"][isiMateri]\"></textarea\></div\><div class=\"form-group\"><label for=\"exampleInputFile\">Visibilitas Untuk</label><select class=\"form-control select2\" style=\"width: 100%;\" name=\"subModul["+ (indexModul + 1) +"][materi]["+ (indexMateri + 1) +"][visibilitas]\"><option value=\"1\" >Guest</option><option value=\"2\" >User Tidak Berlangganan</option><option value=\"3\" >User Berlangganan</option></select></div></div\></div\></div\>";

        wadahMateri.insertBefore(newMateri, btnTambahMateri);

        $(function () {
          // Summernote
          $('.summernote').summernote()
        })
      });
    }
</script>
</body>
</html>
