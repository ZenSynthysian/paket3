<?php
include_once "../conn.php";
$produkID = $_GET['id'];

$process = mysqli_query($conn, "DELETE FROM produk WHERE ProdukID = '$produkID'");
if ($process) {
    header("Location: ../lihatProduk.php");
}
