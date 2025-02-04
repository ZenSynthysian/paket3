<?php
include_once "../conn.php";

$namaProduk = $_POST['namaProduk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$process = mysqli_query($conn, "INSERT INTO produk (NamaProduk, Harga, Stok) VALUES ('$namaProduk', '$harga', '$stok')");
header("Location: ../formProduk.php");
