<?php 
function perkenalan($salam, $nama) {
    echo $salam."<br>";
    echo "Selamat pagi, $nama <br>";
    echo "Senang berkenalan denganmu<hr>";
}

// perkenalan("Hello", "Yumna");
// perkenalan("Assalamualaikum", "Ardi");
// perkenalan("Attention", "Tentara Milea");

// function membuatKopi($nama="User", $gula="satu", $kopi="satu") {
//     echo "Membuat kopi untuk $nama <br>";
//     echo "Masukkan gula $gula sendok <br>";
//     echo "Tambahkan kopi $kopi sendok <br>";
//     echo "Hmmm, nikmat.<hr>";
// }

// membuatKopi("hilman", "dua", "");
// membuatKopi("Hilman", "satu");


function luasSegitiga($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    echo $luas;
}
$l = luasSegitiga(3,4);
var_dump($l);


?>