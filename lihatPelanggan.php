<?php
include_once "./conn.php";
$process = mysqli_query($conn, "SELECT * FROM pelanggan");
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
    <h2>Daftar Pelanggan</h2>
    <table>
        <tr>
            <form action="./cariPelanggan.php" method="post">
                <td><input type="text" name="cari"></td>
                <td><button type="submit">Cari</button></td>
            </form>
        </tr>
    </table>
    <table border="1" cellpadding="4" cellspacing="0">
        <tr>
            <th>Pelanggan ID</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th colspan="2">Tools</th>
        </tr>
        <?php foreach ($process as $pelanggan): ?>
            <tr>
                <td><?= $pelanggan['PelangganID'] ?></td>
                <td><?= $pelanggan['NamaPelanggan'] ?></td>
                <td><?= $pelanggan['Alamat'] ?></td>
                <td><?= $pelanggan['NomorTelepon'] ?></td>
                <td><a href="editPelanggan.php?id=<?= $pelanggan['PelangganID'] ?>"><button>Edit</button></a></td>
                <td><a href="logic/prosesDeletePelanggan.php?id=<?= $pelanggan['PelangganID'] ?>"><button>Delete</button></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="formPelanggan.php"><button>Tambah Pelanggan</button></a>
    <a href="./index.php"><button>Kembali</button></a>
</body>

</html>