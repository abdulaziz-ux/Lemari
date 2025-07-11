<?php
$host = "localhost";
$user = "root";     //  username database
$pass = "";         // password
$db   = "lemari";   // nama database

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
