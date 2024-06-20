<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
<h3>Daftar Mahasiswa</h3>
    
        <ul>
            <li><img src="img/<?= $_GET["gambar"]; ?>" width="60px"></li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["nim"]; ?></li>
            <li><?= $_GET["email"]; ?></li>
            <li><?= $_GET["jurusan"]; ?></li>
        </ul>



    <a href="method.php">Kembali ke Daftar Mahasiwa</a>
</body>
</html>