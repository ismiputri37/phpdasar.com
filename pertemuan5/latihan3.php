<?php
// array di dalam array 
$siswa = [
    ["Ismi Kamelia", "040397", "RPL", "ismykamelia@gmail.com"],
    ["Misbah", "0503097", "RPL", "misbah@gmail.com"]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <!-- <ul>
            <?php foreach ($siswa as $ssw) : ?>
                <li><?= $ssw; ?></li>
            <?php endforeach; ?>
        </ul> -->

        <?php foreach($siswa as $ssw) :?>
        <ul>
            <li>Nama : <?= $ssw[0]; ?></li>
            <li>NIS : <?= $ssw[1]; ?></li>
            <li>Jurusan : <?= $ssw[2]; ?></li>
            <li>Email : <?= $ssw[3]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>