<?php
include_once "./conn.php";
$process = mysqli_query($conn, "SELECT * FROM penjualan");
$process = mysqli_fetch_all($process, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Penjualan</h2>
    <table>
        <tr>
            <form action="./cariPenjualan.php" method="post">
                <td><input type="text" name="cari"></td>
                <td><button type="submit">Cari</button></td>
            </form>
        </tr>
    </table>
    <table border="1" cellpadding="4" cellspacing="0">
        <tr>
            <th>Penjualan ID</th>
            <th>Tanggal Penjualan</th>
            <th>Total Harga</th>
            <th>Pelanggan ID</th>
            <th colspan="2">Tools</th>
        </tr>
        <?php foreach ($process as $detail): ?>
            <tr>
                <td><?= $detail['PenjualanID'] ?></td>
                <td><?= $detail['TanggalPenjualan'] ?></td>
                <td><?= $detail['TotalHarga'] ?></td>
                <td><?= $detail['PelangganID'] ?></td>
                <td><a href="editPenjualan.php?id=<?= $detail['PenjualanID'] ?>"><button>Edit</button></a></td>
                <td><a href="logic/prosesDeletePenjualan.php?id=<?= $detail['PenjualanID'] ?>"><button>Delete</button></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="formPenjualan.php"><button>Tambah Penjualan</button></a>
    <a href="./index.php"><button>Kembali</button></a>
</body>

</html>