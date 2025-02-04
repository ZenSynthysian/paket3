<?php
include_once "./conn.php";
$produkID = $_GET['id'];
$process = mysqli_query($conn, "SELECT * FROM produk WHERE ProdukID = '$produkID'");
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
    <form action="./logic/prosesEditProduk.php" method="post">
        <table>
            <tr>
                <td><label for="namaProduk">ID Produk:</label></td>
                <td><input type="text" id="idProduk" name="idProduk" value="<?= $process['ProdukID'] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="namaProduk">Nama Produk:</label></td>
                <td><input type="text" id="namaProduk" name="namaProduk" required value="<?= $process['NamaProduk'] ?>"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga:</label></td>
                <td><input type="number" step="0.01" id="harga" name="harga" required value="<?= $process['Harga'] ?>"></td>
            </tr>
            <tr>
                <td><label for="stok">Stok:</label></td>
                <td><input type="number" id="stok" name="stok" required value="<?= $process['Stok'] ?>"></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    <a href="./lihatProduk.php"><button>Batal</button></a>
</body>

</html>