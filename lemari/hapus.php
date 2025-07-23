<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM laptop WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php?pesan=hapus");
} else {
    echo "Gagal hapus: " . mysqli_error($conn);
}
