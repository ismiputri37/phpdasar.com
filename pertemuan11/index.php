<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
// print_r($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

       
        <?php  $i = 1;?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td>
                <?= $i++.'.'; ?>
            </td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Update</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
            </td>
            <td><img src="img/<?= $row['gambar']; ?>" width="60px"alt=""></td>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['jurusan'];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>