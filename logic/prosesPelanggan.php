<?php
include_once "../conn.php";

$namaPelanggan = $_POST['namaPelanggan'];
$alamat = $_POST['alamat'];
$nomorTelepon = $_POST['nomorTelepon'];

$process = mysqli_query($conn, "INSERT INTO pelanggan (NamaPelanggan, Alamat, NomorTelepon) VALUES ('$namaPelanggan', '$alamat', '$nomorTelepon')");
if ($process) {
    header("Location: ../formPelanggan.php");
}
