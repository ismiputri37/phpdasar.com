<?php

// array asosiatif
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [

        "nama" => "Ismi Kams",
        "nim" => "030304",
        "email" => "ismy@gmail.com",
        "jurusan" => "informatika",
        // "gambar" => "utama.jpg"
    ],
    [

        "nama" => "Izah Nur",
        "nim" => "030305",
        "email" => "izah@gmail.com",
        "jurusan" => "elektro",
        // "gambar" => "logo.png"
    ]
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Array asosiatif</title>
</head>

<body>
    <h3>Daftar Mahasiswa </h3>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <!-- <l
            i>
                <img src="img/<?= $mhs["gambar"]; ?>" width="100px">
            </li> -->
            <li>Nama : <?= $mhs["nama"] ?> </li>
            <li>nim : <?= $mhs["nim"] ?></li>
            <li>email : <?= $mhs["email"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>



</body>

</html>