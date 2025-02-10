<?php
include_once "../conn.php";
$penjualanID = $_GET['id'];

$process = mysqli_multi_query($conn, "DELETE FROM detailpenjualan WHERE PenjualanID = '$penjualanID'; DELETE From penjualan WHERE PenjualanID = '$penjualanID'");
if ($process) {
    header("Location: ../lihatPenjualan.php");
}
