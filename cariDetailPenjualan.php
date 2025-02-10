<?php
include_once "./conn.php";
$cari = $_POST['cari'];
$process = mysqli_query($conn, "SELECT * FROM detailpenjualan where DetailID like '%$cari%' or PenjualanID like '%$cari%' or ProdukID like '%$cari%' or JumlahProduk like '%$cari%' or Subtotal like '%$cari%'");
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
    <h2>Daftar Detail Penjualan</h2>
    <table>
        <tr>
            <form action="./CariDetailPenjualan.php" method="post">
                <td><input type="text" name="cari"></td>
                <td><button type="submit">Cari</button></td>
            </form>
        </tr>
    </table>
    <table border="1" cellpadding="4" cellspacing="0">
        <tr>
            <th>Detail ID</th>
            <th>Penjualan ID</th>
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal Penjualan</th>
            <!-- <th colspan="2">Tools</th> -->
        </tr>
        <?php foreach ($process as $detail): ?>
            <?php
            $processNest = mysqli_query($conn, "SELECT * FROM penjualan WHERE PenjualanID = '$detail[PenjualanID]'");
            $processNest = mysqli_fetch_assoc($processNest);
            $processNest2 = mysqli_query($conn, "SELECT * FROM pelanggan WHERE PelangganID = '$processNest[PelangganID]'");
            $processNest2 = mysqli_fetch_assoc($processNest2);
            $processNest3 = mysqli_query($conn, "SELECT * FROM produk WHERE ProdukID = '$detail[ProdukID]'");
            $processNest3 = mysqli_fetch_assoc($processNest3);
            ?>
            <tr>
                <td><?= $detail['DetailID'] ?></td>
                <td><?= $detail['PenjualanID'] ?></td>
                <td><?= $processNest2['NamaPelanggan'] ?></td>
                <td><?= $processNest3['NamaProduk'] ?></td>
                <td><?= $detail['JumlahProduk'] ?></td>
                <td><?= $detail['Subtotal'] ?></td>
                <td><?= $processNest['TanggalPenjualan'] ?></td>
                <!-- <td><a href="editPelanggan.php?id=<?= $detail['PelangganID'] ?>"><button>Edit</button></a></td>
                <td><a href="logic/prosesDeletePelanggan.php?id=<?= $detail['PelangganID'] ?>"><button>Delete</button></a></td> -->
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- <a href="formPelanggan.php"><button>Tambah Pelanggan</button></a> -->
    <a href="./index.php"><button>Kembali</button></a>
</body>

</html>