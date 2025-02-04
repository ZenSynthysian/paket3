<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk</title>
</head>

<body>
    <h2>Form Tambah Produk</h2>
    <form action="./logic/prosesProduk.php" method="post">
        <table>
            <tr>
                <td><label for="namaProduk">Nama Produk:</label></td>
                <td><input type="text" id="namaProduk" name="namaProduk" required></td>
            </tr>
            <tr>
                <td><label for="harga">Harga:</label></td>
                <td><input type="number" step="0.01" id="harga" name="harga" required></td>
            </tr>
            <tr>
                <td><label for="stok">Stok:</label></td>
                <td><input type="number" id="stok" name="stok" required></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    <a href="./lihatProduk.php"><button>Kembali</button></a>
</body>

</html>