<?php  
// membuat array
$fruits = ["mango", "banana", "watermelon"];
// $fruits = array("mango", "banana", "watermelon");

//menambahkan isi array
$fruits[3] = "apple";
$fruits[] = "pear";
$fruits[3] = "papaya";

//menampilkan isi array
// echo $fruits[0];
// echo $fruits[3];

// foreach($fruits as $fruit) {
//     echo $fruit . "<br>";
// }

// var_dump($fruits);
// print_r($fruits);

//menghapus isi array 
// unset($fruits[0]);
// var_dump($fruits);
// echo $fruits[0];

// Array Asosiatif
$tasks = [
    "laundry" => "Baekhyun", 
    "dusting" => "Jaemin", 
    "cooking" => "Joko", 
    "washing" => "Brewok"
];

$tasks["cooking"] = "V";

sort($tasks);

// var_dump($tasks);
// echo $tasks["cooking"];
// echo $tasks["dusting"];

// foreach ($tasks as $task) {
//     echo $task . "<br>";
// }



// $books = [
//     "judul" => "Laskar Pelangi", 
//     "penulis" => "Andrea Hirata", 
//     "penerbit" => "Bentang Pustaka", 
//     "tahun_terbit" => 2011
// ];


// ARRAY MULTIDIMENSIONAL
$fruits = [
    ["mango", "papaya", "avocado"], 
    "banana", 
    "watermelon"
];

// echo $fruits[0][0];
// echo $fruits[0][2];

// Array Asosiatif
$books = [
    [
        "judul" => "Little Women", 
        "pengarang" => "Louis A Maycott", 
        "penerbit" => "Dashwood",
        "halaman" => "350"
    ],
    [
        "judul" => "Gadis Kretek", 
        "pengarang" => "Ratih Kumala", 
        "penerbit" => "Indonesia",
        "halaman" => "430"
    ],
    // tambahkan array sesuai kebutuhan
    ];

    // echo $books[0]["penerbit"];
    // echo $books[1]["halaman"];
    // echo $books[1]["judul"];

    // foreach ($books as $book) {
    //     echo $book["judul"] . "<br>";
    //     echo $book["pengarang"] . "<br>";
    //     echo $book["penerbit"] . "<br>";
    //     echo $book["halaman"] . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  foreach($books as $book) : ?>
        <ul>
            <li>Judul: <?= $book["judul"]; ?></li>
            <li>Pengarang: <?= $book["pengarang"]; ?></li>
            <li>Penerbit: <?= $book["penerbit"]; ?></li>
            <li>Halaman: <?= $book["halaman"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>