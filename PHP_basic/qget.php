<?php

    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query string GET</title>
</head>
<body>
    <form>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" required>
        <br>
        <input type="submit" value="" placeholder="Submit">
    </form>
    <h2> Selamat Datang, <?php echo $nama; ?></h2>
    <p>Anda tinggal di <?php echo $alamat; ?></p>
    <p>Selamat belajar pemrograman PHP</p>
</body>
</html>