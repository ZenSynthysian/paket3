<?php
include_once "../conn.php";

// proses penjualan
$produkID = $_POST['namaProduk'];
$pelangganID = $_POST['namaPelanggan'];
$jumlah = $_POST['jumlah'];

$process = mysqli_query($conn, "SELECT * FROM produk WHERE ProdukID = '$produkID'");
$process = mysqli_fetch_assoc($process);

//kalkulasi
$subtotal = $jumlah * $process['Harga'];
$tanggal_hari_ini = date("Y-m-d");

$process = mysqli_query($conn, "INSERT INTO penjualan (TanggalPenjualan, TotalHarga, PelangganID) VALUES ('$tanggal_hari_ini', '$subtotal', '$pelangganID')");

// proses detail penjualan
$penjualanID = mysqli_insert_id($conn);
$process = mysqli_query($conn, "INSERT INTO detailpenjualan (PenjualanID, ProdukID, JumlahProduk, Subtotal) VALUES ('$penjualanID', '$produkID', '$jumlah', '$subtotal')");
