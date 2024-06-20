<?php  
// cek apakah tidak ada data di $_GET
// isset untuk mengecek apakah sebuah variabel sudah 
// pernah dibikin atau belum
if (!isset($_GET["judul"]) || 
    !isset($_GET["pengarang"]) ||
    !isset($_GET["penerbit"]) ||
    !isset($_GET["halaman"])) {
    // redirect: memindahkan user dari sebuah halaman ke halaman lain
    header("Location: latihan1.php");
    //agar script dibawahnya tidak tereksekusi
    exit;  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="" width="100px" height="100px"></li>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["pengarang"]; ?></li>
        <li><?= $_GET["penerbit"]; ?></li>
        <li><?= $_GET["halaman"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar buku</a>
</body>
</html>
