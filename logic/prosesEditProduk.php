<?php
include_once "./../conn.php";

$produkID = $_POST['idProduk'];
$namaProduk = $_POST['namaProduk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$process = mysqli_query($conn, "UPDATE produk SET NamaProduk = '$namaProduk', Harga = '$harga', Stok = '$stok' WHERE ProdukID = '$produkID'");
if ($process) {
    header("Location: ../lihatProduk.php");
}
