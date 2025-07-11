<?php
include 'koneksi.php';

$id = $_POST['id'];
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

$query = "UPDATE laptop SET 
    SN='$SN',
    merk='$merk',
    computer_name='$computer_name',
    ex='$ex',
    status='$status',
    kondisi ='$kondisi',
    tanggal_masuk='$tanggal_masuk',
    tanggal_keluar='$tanggal_keluar',
    dipakai='$dipakai',
    keterangan='$keterangan'
WHERE id='$id'";

mysqli_query($conn, $query);

header("Location: index.php?pesan=update");
