<?php
include_once "./../conn.php";

$idPelanggan = $_POST['idPelanggan'];
$namaPelanggan = $_POST['namaPelanggan'];
$alamat = $_POST['alamat'];
$nomorTelepon = $_POST['nomorTelepon'];

$process = mysqli_query($conn, "UPDATE pelanggan SET NamaPelanggan = '$namaPelanggan', Alamat = '$alamat', NomorTelepon = '$nomorTelepon' WHERE PelangganID = '$idPelanggan'");
if ($process) {
    header("Location: ../lihatPelanggan.php");
}
