<?php
//PENGULANGAN
// for 
// while
// do.. while
// foreach : pengulangan khusus array


// for ($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

// $i = 0;
// while ($i < 5) {
//     echo "Hello World! <br>";
//     $i++;
// }

// lakukan hal ini selama kondisi bernilai true
//jalankan dulu lalu cek kondisinya
//ketika kondisi bernilai false bloknya akan dijalankan dulu 1 kali

// $i = 0;
// do {
//     echo "Hello World! <br>";
//     $i++;
// } while ($i < 5);

//

// $sekolah = "Makn Ende";
// $kamad = "Abdul Wahab";

// echo "Saya sekolah di " . $sekolah;
// echo "<br>";

// echo "Nama kepala " . $sekolah 
// . "pada tahun 2020 adalah " . $kamad;
// echo "<br>";
// $kamad = "Saefudin Ahmad";
// echo "Nama kepala " . $sekolah 
// . "pada tahun 2025 adalah " . $kamad;

// $x = 10;
// $y = 5;
// echo "nilai pertama " .$x;
// echo "<br>";
// $jumlah = $x + $y;
// echo $jumlah;
// echo "<br>";
// $x = 11;
// echo "nilai kedua " . $x;
// echo "<br>";
// echo "jumlah kedua " . $jumlah;

//Buatlah variabel nama, sekolah, kelas
//output : Nama saya $nama. Saya bersekolah di $sekolah dan 
//duduk di kelas $kelas
// echo "<br>";
// $cars = ["Toyota", "BMW", "Nissan"];
// // echo $cars[0];
// echo "Nama mobil saya ".$cars[1];
// echo "<br>";
// echo "Nama mobil saya ".$cars[2];


// STRINGS
// strlen (string length): menghitung jumlah karakter 

// $kalimat = "Hari ini kelas XI RPL 1 belajar PHP"; //4,3,5,2,3,1,7,3 + 7spasi
// echo strlen($kalimat);
// echo "<br>";
// // str_word_count : menghitung jumlah kata
// echo str_word_count($kalimat);
// echo "<br>";
// //strrev : membalik string
// echo strrev($kalimat);
// echo "<br>";
// //str_replace : memfilter dan mengganti string
// // echo str_replace("yang ingin diganti", "pengganti", $kalimat);
// echo str_replace("PHP", "Javascript", $kalimat);


//STRUKTUR KENDALI 
// if (kondisi) {
//     //kode yang akan dieksekusi;
// }

// if (kondisi) {
//     //jika kondisi terpenuhi;
// } else {
//     //jika kondisi tidak terpenuhi;
// }

//STUDI KASUS
//buatlah variabel $teman = "Mahrus",
//cek kondisi apakah mahrus adalah temanmu, 
//kalau benar cetak "dia adalah teman saya"
//kalau tidak terpenuhi cetak sebaliknya

//if elseif else

// if (kondisi1) {
//     //kode jika terpenuhi 
// } elseif (kondisi2) {
//     //kode jika terpenuhi kondisi2
// } elseif (kondisi3){

// } else {
//     //kondisi terakhir
// }

// $time = 13;

// echo "<br>";
// if ($time < 10) {
//     echo "Selamat pagi";
// } elseif ($time < 15 ) {
//     echo "Selamat siang";
// } else {
//     echo "Selamat malam";
// }

//Program untuk menghitung grade siswa 
// grade: 100-90 : A
// grade 71-89 : B;
// grade 61-70 : C;
// grade 30-60 : D;
// grade <29 : E;
// $nilai : 70
// $nilai : untuk menyimpan nilai/skor siswa, 70, 80-100
// $grade : A, B, C, D
// $nilai = 85 ;
// if ($nilai <= 100 && $nilai >= 90){  100 - 90  
//     echo "A";
// }
// elseif ($nilai <= 89 && $nilai >=71){
//     echo "B";
// }
// elseif($nilai <= 70 && $nilai >=61){
//     echo "C";
// }
// elseif($nilai <= 60 && $nilai >=30){
//     echo "D";
// }
// else{
//     echo "E";
// }

$nilai = 81;

if ($nilai >=90) {
    $grade = "A";
} elseif ($nilai >= 71) {
    $grade = "B";
} elseif ($nilai >= 61) {
    $grade = "C";
} elseif ($nilai >= 30) {
    $grade ="D";
} else {
    $grade = "E";
}
echo "Nilai anda : $nilai <br>" ;
echo "Grade anda : $grade" ;
?>