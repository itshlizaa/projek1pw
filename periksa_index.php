<?php 
  require_once 'dbkoneksi.php'; 
  $sql = "SELECT * FROM periksa";
  $rs = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Pemeriksaan</title>
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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #FFA5A5;">
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #FFA5A5;">
    <!-- Brand Logo -->
    <a href="kelurahan_index.php" class="brand-link">
      <img src="dist/img/liza.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text" style="color: #000000;"><strong>dbpuskesmas</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #FFCBCC;">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="kelurahan_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5A5'" onmouseup="this.style.color='#FFA5A5'">
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
            <a href="pasien_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5A5'" onmouseup="this.style.color='#FFA5A5'">
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
            <a href="periksa_index.php" class="nav-link" style="color: #FF7272; text-decoration: none; background-color: #FFFFFF;" id="link1" onclick="changeBackground('link1', '#FFE5E5')">
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
            <a href="paramedik_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5A5'" onmouseup="this.style.color='#FFA5A5'">
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
            <a href="unitkerja_index.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5A5'" onmouseup="this.style.color='#FFA5A5'">
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
            <a href="profile.php" class="nav-link" style="color: #000000; text-decoration: none;" onmousedown="this.style.color='#FFA5C6'" onmouseup="this.style.color='#FFA5C6'">
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
  <div class="content-wrapper" style="background-color: #FFE5E5;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pemeriksaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kelurahan_index.php" style="color: #FF7272;">Home</a></li>
              <li class="breadcrumb-item active">Daftar Pemeriksaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid card-body">
      <table class="table table-bordered" style="border-collapse: collapse; border: 2px solid #FFA5A5;">
        <thead style="background-color: #FFA5A5;">
            <tr>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">No</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Tanggal</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Berat</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Tinggi</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Tensi</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Keterangan</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Pasien ID</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Dokter ID</th>
                <th style="border: 2px solid #FF7272; padding: 8px; text-align: left;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor  =1 ;
            foreach($rs as $row){
            ?>
                <tr>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$nomor?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['tanggal']?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['berat'] . " kg"?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['tinggi'] . " cm"?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['tensi'] . " mmHg"?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['keterangan']?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['pasien_id']?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;"><?=$row['dokter_id']?></td>
                    <td style="border: 2px solid #FFA5A5; padding: 8px; text-align: left;">
                        <a class="btn" style="background-color: #77DD77; color: #000000; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; box-shadow: 2px 2px 4px #555555;" onmouseover="this.style.backgroundColor='#3CB371'" onmouseout="this.style.backgroundColor='#77DD77'" href="periksa_edit.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn" style="background-color: #F08080; color: #000000; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; box-shadow: 2px 2px 4px #555555;" onmouseover="this.style.backgroundColor='#CD5C5C'" onmouseout="this.style.backgroundColor='#F08080'" href="periksa_delete.php?iddel=<?=$row['id']?>"
                        onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Pemeriksaan <?=$row['pasien_id']?>?')) {return false}"
                        >Delete</a>
                    </td>
                </tr>
            <?php 
            $nomor++;   
            } 
            ?>
        </tbody>
    </table>
    <br>
    <div class="container">
        <a class="btn" style="background-color: #FFA5A5; color: #000000; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; box-shadow: 2px 2px 4px #555555;" onmouseover="this.style.backgroundColor='#FF7272'" onmouseout="this.style.backgroundColor='#FFA5A5'" href="periksa_form.php">Create New Data</a>
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: #FFA5A5;">
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
