<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM periksa WHERE id=$id");

header('location:periksa_index.php');

?>