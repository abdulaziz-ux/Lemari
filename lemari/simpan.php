<?php
include 'koneksi.php';

$SN = $_POST['SN'];
$merk = $_POST['merk'];
$computer_name = $_POST['computer_name'];
$ex = $_POST['ex'];
$status = $_POST['status'];
$kondisi = $_POST['kondisi'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$dipakai = $_POST['dipakai'];
$keterangan = $_POST['keterangan'];

$query = "INSERT INTO laptop (SN, merk, computer_name, ex, status, kondisi, tanggal_masuk, tanggal_keluar, dipakai, keterangan)
VALUES ('$SN', '$merk', '$computer_name', '$ex', '$status', '$kondisi', '$tanggal_masuk', '$tanggal_keluar','$dipakai', '$keterangan')";

mysqli_query($conn, $query);

header("Location: index.php?pesan=sukses");
