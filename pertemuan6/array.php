<?php 
$fruits = [ 
    ["apple","pear"], 
    ["banana", "watermelon"], 
    ["jackfruit", ["mango", "durian"] 
    ]
];
// menampilkan durian
echo $fruits[2][1][1];



// $tests =["makan", "minum"];
// array_splice($fruits, 2, 0, $tests);
// print_r($fruits);
// echo $fruits[2];

// $fruits[]="watermelon";
// var_dump($fruits);

// unset($fruits[1]);
// var_dump($fruits);


// $tasks = [
//     "laundry" => "Baekhyun",
//     "ironing" => "Minho", 
//     "cooking" => "Jungkook",
//     "dusting" => "RapMon"
// ];

// $tasks["ironing"] = "V";


// echo $tasks["cooking"];
// print_r($tasks);

// echo "<br>";

// var_dump($tasks);

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
    ];
// echo $books[0]["judul"];
// echo $books[1]["penerbit"];

// foreach($books as $book) {
//     echo $book["judul"] . "<br>";
//     echo $book["pengarang"] . "<br>";
//     echo $book["penerbit"] . "<br>";
//     echo $book["halaman"] . "<br>";
//     echo "<hr>";
// }

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
            <!-- <li>Judul : <?= $book["judul"]; ?></li>
            <li>Pengarang : <?= $book["pengarang"]; ?></li>
            <li>Penerbit : <?= $book["penerbit"]; ?></li>
            <li>Halaman : <?= $book["halaman"]; ?></li>
        </ul>
        <?php  endforeach; ?> -->

    </body>
</html>