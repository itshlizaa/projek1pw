<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM kelurahan WHERE id=$id");

header('location:kelurahan_index.php');

?>