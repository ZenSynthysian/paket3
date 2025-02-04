<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelanggan</title>
</head>

<body>
    <h2>Form Tambah Pelanggan</h2>
    <form action="./logic/prosesPelanggan.php" method="post">
        <table>
            <tr>
                <td><label for="namaPelanggan">Nama Pelanggan:</label></td>
                <td><input type="text" id="namaPelanggan" name="namaPelanggan" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="text" id="alamat" name="alamat" required></td>
            </tr>
            <tr>
                <td><label for="nomorTelepon">Nomor Telepon:</label></td>
                <td><input type="varchar" id="nomorTelepon" name="nomorTelepon" required></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    <a href="./lihatPelanggan.php"><button>Kembali</button></a>
</body>

</html>