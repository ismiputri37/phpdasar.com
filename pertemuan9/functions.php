<?php  
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


//analogi: untuk menunjukkan baju ke teman yang minta
// coba pakai alternatif lain, yaitu taruh bajunya di wadah, 
// kemudian diambil satu per satu disimpan ke wadah, 
// ulangi, kemudian bawa wadahnya ke teman

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = []; //siapkan wadah kosong
    while ( $row = mysqli_fetch_assoc($result) ) {  //$row baju yang diambil tiap loopingnya
        $rows[] = $row;  //menambahkan tiap elemen baru di akhir array, baju dimasukkan ke kotak
    }
    return $rows;  //bentuknya sudah array asosiatif
}
?>