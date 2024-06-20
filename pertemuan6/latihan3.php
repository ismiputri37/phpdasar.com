<?php
// Array Assossiatif untuk buku

$books = [
    [
        "gambar" => "utama.jpg",
        "judul" => "Little Women", 
        "pengarang" => "Louis A Maycott", 
        "penerbit" => "Dashwood",
        "halaman" => "350"
    ],
    [
        "gambar" => "logo.png",
        "judul" => "Bumi Manusia", 
        "pengarang" => "Pramoedya A Toer", 
        "penerbit" => "Blora",
        "halaman" => "370"
    ], 
    [
        "gambar" => "fatim.JPG",
        "judul" => "Demian", 
        "pengarang" => "Herman Hesse", 
        "penerbit" => "Jerman",
        "halaman" => "410"
    ],
    [
        "gambar" => "qam.JPG",
        "judul" => "Qira'ah Mubadalah", 
        "pengarang" => "Faqihudiin", 
        "penerbit" => "Indonesia",
        "halaman" => "500"
    ], 
    [
        "gambar" => "lilik.JPG",
        "judul" => "Gadis Kretek", 
        "pengarang" => "Ratih Kumala", 
        "penerbit" => "Indonesia",
        "halaman" => "430"
    ],
    [
        "gambar" => "yuni.JPG",
        "judul" => "Cantik itu Luka", 
        "pengarang" => "Eka Kurniawan", 
        "penerbit" => "Indonesia",
        "halaman" => "1000"
    ]
    ];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar buku</title>
    </head>
    <body>
        <h3>Daftar Buku</h3>
        <?php  foreach($books as $book) : ?>
        <ul>
            <li>
                <img src="img/<?= $book["gambar"] ?>" alt="" width="100%">
            </li>
            <li>Judul : <?= $book["judul"]; ?></li>
            <li>Pengarang : <?= $book["pengarang"]; ?></li>
            <li>Penerbit : <?= $book["penerbit"]; ?></li>
            <li>Halaman : <?= $book["halaman"]; ?></li>
        </ul>
        <?php  endforeach;?>
    </body>
</html>
