<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Buku</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Toko Buku Online</h1>
        <div class="book-list">
            <?php
            // Array asosiatif dengan data buku
            $books = [
                [
                    "image" => "https://images.tokopedia.net/img/cache/700/hDjmkQ/2023/3/26/28a49d26-041e-43b6-804d-bd55302eee08.jpg",
                    "name" => "Belajar PHP",
                    "category" => "Programming",
                    "author" => "John Doe",
                    "publisher" => "Tech Press",
                    "year" => 2021
                ],
                [
                    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSddkk1PefXE9jbg8FbM4Rpkouk9JX19YEwsw&s",
                    "name" => "Desain Web Modern",
                    "category" => "Design",
                    "author" => "Jane Smith",
                    "publisher" => "Design House",
                    "year" => 2020
                ],
                [
                    "image" => "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//105/MTA-84766218/brd-23087_impodio-dummy-book-buku-palsu-dummy-model-terkini-props-foto_full01.jpg",
                    "name" => "Algoritma dan Struktur Data",
                    "category" => "Computer Science",
                    "author" => "Alice Johnson",
                    "publisher" => "CS Press",
                    "year" => 2019
                ],
                [
                    "image" => "https://down-id.img.susercontent.com/file/97f9772ca08aa5d71b1fb650c6864819",
                    "name" => "Dasar-dasar Jaringan Komputer",
                    "category" => "Networking",
                    "author" => "Bob Brown",
                    "publisher" => "Net Publications",
                    "year" => 2018
                ],
                [
                    "image" => "https://images.tokopedia.net/img/cache/700/VqbcmM/2022/1/28/be96bcbc-ae2b-408c-ad1c-3b931b52dd2f.jpg",
                    "name" => "Pengembangan Aplikasi Mobile",
                    "category" => "Mobile Development",
                    "author" => "Charlie Davis",
                    "publisher" => "App Dev House",
                    "year" => 2022
                ],
                [
                    "image" => "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-51919281/oem_oem_full01.jpg",
                    "name" => "Algoritma dan Struktur Data",
                    "category" => "Computer Science",
                    "author" => "Alice Johnson",
                    "publisher" => "CS Press",
                    "year" => 2019
                ],
           
            ];
            ?>

            <!-- Loop melalui array buku dan tampilkan -->
            <?php foreach ($books as $book): ?>
                <div class="book-item">
                    <img src="<?= htmlspecialchars($book['image']) ?>" alt="<?= htmlspecialchars($book['name']) ?>">
                    <h2><?= htmlspecialchars($book['name']) ?></h2>
                    <p><strong>Kategori:</strong> <?= htmlspecialchars($book['category']) ?></p>
                    <p><strong>Penulis:</strong> <?= htmlspecialchars($book['author']) ?></p>
                    <p><strong>Penerbit:</strong> <?= htmlspecialchars($book['publisher']) ?></p>
                    <p><strong>Tahun Terbit:</strong> <?= htmlspecialchars($book['year']) ?></p>
                </div>
            <?php endforeach; ?>
        
        </div>
    </div>
</body>
</html>
