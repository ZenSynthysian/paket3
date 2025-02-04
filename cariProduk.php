<?php
include_once "./conn.php";
$cari = $_POST['cari'];
$process = mysqli_query($conn, "SELECT * FROM produk where NamaProduk like '%$cari%' or Harga like '%$cari%' or Stok like '%$cari%' or ProdukID like '%$cari%'");
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
    <h2>Daftar Produk</h2>
    <table>
        <tr>
            <form action="./cariProduk.php" method="post">
                <td><input type="text" name="cari"></td>
                <td><button type="submit">Cari</button></td>
            </form>
        </tr>
    </table>
    <table border="1" cellpadding="4" cellspacing="0">
        <tr>
            <th>Produk ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="2">Tools</th>
        </tr>
        <?php foreach ($process as $produk): ?>
            <tr>
                <td><?= $produk['ProdukID'] ?></td>
                <td><?= $produk['NamaProduk'] ?></td>
                <td><?= $produk['Harga'] ?></td>
                <td><?= $produk['Stok'] ?></td>
                <td><a href="editProduk.php?id=<?= $produk['ProdukID'] ?>"><button>Edit</button></a></td>
                <td><a href="logic/prosesDeleteProduk.php?id=<?= $produk['ProdukID'] ?>"><button>Delete</button></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="formProduk.php"><button>Tambah Produk</button></a>
    <a href="./index.php"><button>Kembali</button></a>
</body>

</html>