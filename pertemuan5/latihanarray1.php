<?php 
$makanan = ["Nasi goreng", "Bubur ayam", "Bakso", "Soto"];
$makanan[1] = ["Gado-gado"];
$makanan[0] = ["Pisang goreng"];

$books = ["Andrea Hirata", "Sang Pemimpi", 2009, "Bentang Pustaka", "Best Seller", 134];


// foreach($books as $book) {
//     echo $book;
// }

// unset($books[0]);

// $books[0] = "Ariel Noah";
// echo $books[0];
// unset($books[4]);
// echo $books[4];


$books[5] = 100000;
// $books[] = 76000;
foreach($books as $book) {
    echo $book."<br>";
}
?>