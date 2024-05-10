<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Pasien</title>
  <link rel="icon" type="image/png" href="dist/img/favicon.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #FFA5C6;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #FFA5C6;">
    <!-- Brand Logo -->
    <a href="kelurahan_index.php" class="brand-link">
      <img src="dist/img/liza.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text" style="color: #000000;"><strong>dbpuskesmas</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #FFCCDF;">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="kelurahan_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5C6'" onmouseup="this.style.color='#FFA5C6'">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Kelurahan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="pasien_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5C6'" onmouseup="this.style.color='#FFA5C6'">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pasien
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="periksa_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5C6'" onmouseup="this.style.color='#FFA5C6'">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Periksa
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="paramedik_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5C6'" onmouseup="this.style.color='#FFA5C6'">
              <i class="nav-icon fas fa-hospital"></i>
              <p>
                Paramedik
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="unitkerja_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5C6'" onmouseup="this.style.color='#FFA5C6'">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Unit Kerja
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="profile.php" class="nav-link"  style="color: #FF72A6; text-decoration: none; background-color: #FFFFFF;" id="link1" onclick="changeBackground('link1', '#FFE5EF')">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Profile Mahasiswa
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #FFE5EF;">
      <div class="card-body">
          <div class="container">
              <h4 class="text-center mt-4">Selamat Datang Di Website Puskesmas<br />Projek Web 1 - Individu</h4>
              <div class="row justify-content-center mt-5">
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-4">
                                      <h5 class="card-title">Informasi Mahasiswa</h5>
                                      <div class="text-center">
                                          <img src="dist/img/photo1.png" class="img-fluid" alt="Profile Image">
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <ul class="list-group list-group-flush">
                                          <li class="list-group-item"><strong>Nama :</strong>Nur Halizah</li>
                                          <li class="list-group-item"><strong>NIM :</strong>0110123306</li>
                                          <li class="list-group-item"><strong>Rombel :</strong> SI09</li>
                                          <li class="list-group-item"><strong>Program Studi :</strong> Sistem Informasi</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: #FFA5C6;">
    <p style="color: #000000;">Copyright &copy; 2024 oleh Mahasiswa STT-NF</p>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script>
  function changeBackground(linkId, color) {
      document.getElementById(linkId).style.backgroundColor = color;
  }
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
