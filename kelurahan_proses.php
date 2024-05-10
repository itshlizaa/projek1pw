<?php 
require_once 'dbkoneksi.php';

try {
    $_nama = $_POST['nama'];
    $_kec_id = $_POST['kec_id'];
    $_proses = $_POST['proses'];

    // Validasi input, misalnya $_nama dan $_kec_id

    // array data
    $ar_data[] = $_nama;
    $ar_data[] = $_kec_id;

    if ($_proses == "Simpan") {
        $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?, ?)";
    } else if ($_proses == "Update") {
        $ar_data[] = $_POST['idedit'];
        $sql = "UPDATE kelurahan SET nama=?, kec_id=? WHERE id=?";
    }

    if (isset($sql)) {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);
    }

    header('location:kelurahan_index.php');
} catch (PDOException $e) {
    // Tangani kesalahan database
    echo "Error: " . $e->getMessage();
}
?>
