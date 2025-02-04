<?php
include_once "./conn.php";
$pelangganID = $_GET['id'];
$process = mysqli_query($conn, "SELECT * FROM pelanggan WHERE PelangganID = '$pelangganID'");
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
    <form action="./logic/prosesEditPelanggan.php" method="post">
        <table>
            <tr>
                <td><label for="idPelanggan">Pelanggan ID:</label></td>
                <td><input type="text" id="idPelanggan" name="idPelanggan" value="<?= $process['PelangganID'] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="namaPelanggan">Nama Pelanggan:</label></td>
                <td><input type="text" id="namaPelanggan" name="namaPelanggan" required value="<?= $process['NamaPelanggan'] ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="text" id="alamat" name="alamat" required value="<?= $process['Alamat'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nomorTelepon">Nomor Telepon:</label></td>
                <td><input type="text" id="nomorTelepon" name="nomorTelepon" required value="<?= $process['NomorTelepon'] ?>"></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    <a href="./lihatPelanggan.php"><button>Batal</button></a>
</body>

</html>