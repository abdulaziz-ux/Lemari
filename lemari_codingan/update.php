<?php
include 'koneksi.php';

$id = $_POST['id'];
$SN = $_POST['SN'];
$merk = $_POST['merk'];
$computer_name = $_POST['computer_name'];
$ex = $_POST['ex'];
$status = $_POST['status'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE laptop SET 
    SN='$SN',
    merk='$merk',
    computer_name='$computer_name',
    ex='$ex',
    status='$status',
    tanggal_masuk='$tanggal_masuk',
    tanggal_keluar='$tanggal_keluar',
    keterangan='$keterangan'
WHERE id='$id'";

mysqli_query($conn, $query);

header("Location: index.php?pesan=update");
