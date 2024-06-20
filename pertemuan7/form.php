<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="pwd">Usia : </label>
                <input type="password" name="pwd" id="pwd">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </form>
        <?php
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        echo "Selamat datang  " . $username . "<br>";
        echo "password kamu adalah " . $pwd;

        ?>
    </ul>
</body>

</html>