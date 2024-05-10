<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM pasien WHERE id=$id");

header('location:pasien_index.php');

?>