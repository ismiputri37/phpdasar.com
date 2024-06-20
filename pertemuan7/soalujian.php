<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Buku</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <h1>Toko Buku Online</h1>
        <div class="book-list">
            <?php
            // Tambahkan 6 Array Asosiatif yang berisi informasi buku disini
            
            ?>

            <!-- Tambahkan Loop melalui array buku dan tampilkan -->
            <?php foreach ($books as $book): ?>
                <div class="book-item">
                    <img src="https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/5/16/7ecdef38-d004-46dd-94a5-a9af298ce379.jpg">
                    <h2>Dasar Jaringan Komputer</h2>
                    <p><strong>Kategori:</strong> Mobile Development</p>
                    <p><strong>Penulis:</strong> Charlie Davis </p>
                    <p><strong>Penerbit:</strong> App Dev House </p>
                    <p><strong>Tahun Terbit:</strong> 2022 </p>
                </div>
            <?php endforeach; ?>
        
        </div>
    </div>
</body>
</html>
