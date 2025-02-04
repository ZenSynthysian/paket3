<?php
$host = "localhost"; // Host database
$username = "root"; // Username database
$password = ""; // Password database
$database = "kasir"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
