<?php
include_once "../conn.php";
$pelangganId = $_GET['id'];

$process = mysqli_query($conn, "DELETE FROM pelanggan WHERE PelangganID = '$pelangganId'");
if ($process) {
    header("Location: ../lihatPelanggan.php");
}
