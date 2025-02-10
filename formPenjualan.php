<?php
include_once "./conn.php";
$process = mysqli_query($conn, "SELECT * FROM produk");
$processPelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk</title>
</head>

<body>
    <h2>Form Penjualan</h2>
    <form action="./logic/prosesPenjualan.php" method="post">
        <table>
            <tr>
                <td><label for="namaProduk">Nama Produk:</label></td>
                <td>
                    <select name="namaProduk">
                        <?php foreach ($process as $product): ?>
                            <option value="<?php echo $product['ProdukID']; ?>"><?php echo $product['NamaProduk'];
                                                                                echo " - " . $product['Harga'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <!-- <td><input type="text" id="namaProduk" name="namaProduk" required></td> -->
            </tr>
            <tr>
                <td><label for="namaPelanggan">Pelanggan:</label></td>
                <td>
                    <select name="namaPelanggan">
                        <?php foreach ($processPelanggan as $pelanggan): ?>
                            <option value="<?php echo $pelanggan['PelangganID'] ?>"><?php echo $pelanggan['NamaPelanggan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <!-- <td><input type="number" step="0.01" id="harga" name="harga" required></td> -->
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah:</label></td>
                <td><input type="number" id="stok" name="jumlah" required></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    <a href="./lihatProduk.php"><button>Kembali</button></a>
</body>

</html>