<?php  
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// analogi: untuk menunjukkan baju ke teman yang minta
// coba pakai alternatif lain, yaitu taruh bajunya di wadah, 
// kemudian diambil satu per satu disimpan ke wadah, 
// ulangi, kemudian bawa wadahnya ke teman

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query); //$result adalah lemari
    $rows = []; //siapkan wadah kosong

    while ( $row = mysqli_fetch_assoc($result) ) {  //$row baju yang diambil tiap loopingnya
        $rows[] = $row;  //menambahkan elemen baru di akhir tiap array, baju dimasukkan ke kotak
    }

    return $rows;  //bentuknya sudah array asosiatif
}

function tambah ($data) {
    global $conn;
     // ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query untuk insert data
    $query = "INSERT INTO mahasiswa
                VALUES 
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id) {
    global $conn;
    mysqli_query ($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
     // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query untuk insert data
    $query = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn); 
}
?>