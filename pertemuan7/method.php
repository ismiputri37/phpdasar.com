<?php 
// if(isset($_GET["nama"])) {
//     echo "Nama saya adalah " . $_GET["nama"] . "<br>";
//     echo "Email saya adalah " . $_GET["email"] . "<br>";
// }  

$mahasiswa = [
    [

        "nama" => "Ismi Kams",
        "nim" => "030304",
        "email" => "ismy@gmail.com",
        "jurusan" => "informatika",
        "gambar" => "utama.jpg"
    ],
    [

        "nama" => "Izah Nur",
        "nim" => "030305",
        "email" => "izah@gmail.com",
        "jurusan" => "elektro",
        "gambar" => "logo.png"
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
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <!--link untuk menangkap data  -->
        <a href="method2link.php?nama=<?= $mhs["nama"]; ?> &nim=<?= $mhs["nim"]; ?> 
        &email=<?= $mhs["email"]; ?> &jurusan=<?= $mhs["jurusan"]; ?> &gambar=<?= $mhs["gambar"]; ?>">
        
        <!-- penunjuk data -->
        <?= $mhs["nama"]; ?>
    
        </li></a>
    <?php endforeach ?>
    </ul>



</body>

</html>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method</title>
</head>
<body>
    <form method="GET">
        <input type="hidden" name="nama" value="Ismi"> 
        <input type="text" name="nama">
        <input type="text" name="email">
        <button type="submit">PRESS ME!</button>
        <button type="reset">RESET!</button>
    
    </form>
</body>
</html>
 -->


<?php 
// $_GET["nama"] = "Ismi";
// $_GET["nik"] = "327985234621";
// var_dump($_GET);

?>