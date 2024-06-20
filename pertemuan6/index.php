<?php
$mahasiswa = [
    [
        "nama" => "Ismi Kams",
        "nim" => "030304",
        "email" => "ismy@gmail.com",
        "jurusan" => "informatika"
    ],
    [

        "nama" => "Izah Nur",
        "nim" => "030305",
        "email" => "izah@gmail.com",
        "jurusan" => "elektro"
    ]
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Array asosiatif</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?> </li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php } ?>

</body>

</html>