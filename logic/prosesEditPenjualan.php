<?php
include_once "./../conn.php";

$penjualanID = $_POST['penjualanID'];
$tanggalPenjualan = $_POST['tanggalPenjualan'];
$totalHarga = $_POST['totalHarga'];
$pelangganID = $_POST['pelangganID'];

$process = mysqli_query($conn, "UPDATE penjualan SET PenjualanID = '$penjualanID', TanggalPenjualan = '$tanggalPenjualan', TotalHarga = '$totalHarga', PelangganID = '$pelangganID' WHERE PenjualanID = '$penjualanID'");
if ($process) {
    header("Location: ../lihatPenjualan.php");
}
