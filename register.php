<?php 
    require_once 'dbkoneksi.php';
    $sql = "SELECT * FROM users";
    $rs = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Pasien</title>
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

<body class="bg-gradient-primary d-flex align-items-center justify-content-center vh-100">
    <div class="card o-hidden border-0 shadow-lg col-sm-6">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-primary mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="POST" action="register_proses.php">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-user" id="email" placeholder="Email Address">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="password" type="password" class="form-control form-control-user" id="password" placeholder="Password">
                        </div>
                        <div class="col-sm-6">
                            <input name="repeat_password" type="password" class="form-control form-control-user" id="repeat_password" placeholder="Repeat Password">
                        </div>
                    </div>
                    <input type="submit" name="proses" value="Register" class="btn btn-user btn-block btn-primary">
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="index.php">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
</body>


</html>