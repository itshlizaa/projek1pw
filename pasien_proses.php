<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_gender = $_POST['gender'];
   $_email = $_POST['email'];
   $_alamat = $_POST['alamat'];
   $_kelurahan_id = $_POST['kelurahan_id'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode;
   $ar_data[]=$_nama;
   $ar_data[]=$_tmp_lahir;
   $ar_data[]=$_tgl_lahir;
   $ar_data[]=$_gender;
   $ar_data[]=$_email;
   $ar_data[]=$_alamat;
   $ar_data[]=$_kelurahan_id;

   if($_proses == "Simpan"){

    $sql = "INSERT INTO pasien (kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id) VALUES (?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE pasien SET kode=?,nama=?,tmp_lahir=?,tgl_lahir=?,gender=?,email=?,alamat=?,kelurahan_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:pasien_index.php');
?>