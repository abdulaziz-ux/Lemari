<?php
$host = "localhost";
$user = "root";     // sesuaikan dengan username database Anda
$pass = "";         // sesuaikan jika ada password
$db   = "lemari";   // sesuaikan dengan nama database

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
