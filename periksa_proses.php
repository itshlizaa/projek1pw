<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_berat = $_POST['berat'];
   $_tinggi = $_POST['tinggi'];
   $_tensi = $_POST['tensi'];
   $_keterangan = $_POST['keterangan'];
   $_pasien_id = $_POST['pasien_id'];
   $_dokter_id = $_POST['dokter_id'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal;
   $ar_data[]=$_berat;
   $ar_data[]=$_tinggi;
   $ar_data[]=$_tensi;
   $ar_data[]=$_keterangan;
   $ar_data[]=$_pasien_id;
   $ar_data[]=$_dokter_id;

   if($_proses == "Simpan"){

    $sql = "INSERT INTO periksa (tanggal,berat,tinggi,tensi,keterangan,pasien_id,dokter_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE periksa SET tanggal=?,berat=?,tinggi=?,tensi=?,keterangan=?,pasien_id=?,dokter_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:periksa_index.php');
?>