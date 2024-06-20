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

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa 
    WHERE 
    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";

    return query($query);
}

// function registrasi 
function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user 
        WHERE username='$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah terdaftar')
        </script>";
        return false;
    }

    // konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                    alert('Konfirmasi password tidak sesuai');
                </script>";
        return false;
    } 
   
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
  
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$password')");
    return mysqli_affected_rows($conn);
}

?>