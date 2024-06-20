<?php  
// Variabel Scope/ lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();

// var superglobal
// // var yang sudah ada di PHP dan bisa diakses kapan saja
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// semuanaya merupakan array asosiatif
//harus dicetak menggunakan var_dump() atau print_r


// $_GET
// metode pengiriman data melalui URL dan data tsb dapat diambil dan
// ditangkap oleh variabel superglobal $_GET

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
        <ul>
        <?php  foreach($books as $book) : ?>
            <li>
                <a href="latihan2.php?judul=<?= $book["judul"]; ?>
                &pengarang=<?= $book["pengarang"]; ?> 
                &penerbit=<?= $book["penerbit"]; ?>
                &halaman=<?= $book["halaman"]; ?>
                &gambar=<?= $book["gambar"]; ?>">
                <?= $book["judul"]; ?></a>
            </li>
        <?php  endforeach; ?>
        </ul>
    </body>
</html>