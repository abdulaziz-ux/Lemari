<?php
include 'koneksi.php';

$SN = $_POST['SN'];
$merk = $_POST['merk'];
$computer_name = $_POST['computer_name'];
$ex = $_POST['ex'];
$status = $_POST['status'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$keterangan = $_POST['keterangan'];

$query = "INSERT INTO laptop (SN, merk, computer_name, ex, status, tanggal_masuk, tanggal_keluar, keterangan)
VALUES ('$SN', '$merk', '$computer_name', '$ex', '$status', '$tanggal_masuk', '$tanggal_keluar', '$keterangan')";

mysqli_query($conn, $query);

header("Location: index.php?pesan=sukses");
