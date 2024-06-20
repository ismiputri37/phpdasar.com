<!DOCTYPE html>
<html>
    <head>
        <title>POST</title>
    </head>
    <body>
        <?php if ( isset($_POST["submit"]) ) :  ?>
            <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
        <?php  endif; ?>
        
        <!-- jika action dan method kosong maka akan ada nilai default
        action kosong artintya dikirim ke halaman sendiri 
        method auto get -->
        <form action="" method="post">
            Masukkan nama : 
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>

    </body>
</html>