<?php
include_once "./conn.php";
$penjualanID = $_GET['id'];
$process = mysqli_query($conn, "SELECT * FROM penjualan WHERE PenjualanID = '$penjualanID'");
$process = mysqli_fetch_assoc($process);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./logic/prosesEditPenjualan.php" method="post">
        <table>
            <tr>
                <td><label for="penjualanID">ID Penjualan:</label></td>
                <td><input type="text" id="penjualanID" name="penjualanID" value="<?= $process['PenjualanID'] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="tanggalPenjualan">Tanggal Penjualan:</label></td>
                <td><input type="date" id="tanggalPenjualan" name="tanggalPenjualan" required value="<?= $process['TanggalPenjualan'] ?>"></td>
            </tr>
            <tr>
                <td><label for="totalHarga">Total Harga:</label></td>
                <td><input type="number" step="0.01" id="totalHarga" name="totalHarga" required value="<?= $process['TotalHarga'] ?>"></td>
            </tr>
            <tr>
                <td><label for="pelangganID">Pelanggan ID:</label></td>
                <td><input type="number" id="pelangganID" name="pelangganID" required value="<?= $process['PelangganID'] ?>"></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    <a href="./lihatPenjualan.php"><button>Batal</button></a>
</body>

</html>