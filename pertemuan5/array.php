<?php
// array
// array adalah variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0

// membuat array
//cara lama 
$hari = array ("Senin", "Selasa", "Rabu");
//cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false]; 

// Menampilkan array 
// echo tidak bisa menampilkan array 
// caranya : var_dump / print_r()
// var_dump($hari);   // cek isi dari variabel
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// boleh menggunakan echo
// echo "<br>";
// echo $arr1[1];

// menambahkan elemen baru pada array
var_dump($hari);
echo "<br>";
$hari[] = "Kamis";
var_dump($hari);
?>
