<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>

        h1{
            color: brown;
        }
    </style>
</head>
<body>
    <h1>
    Selamat Datang <?php echo $_POST["nama"] ?>
    Beralamatkan di <?php echo $_POST["alamat"] ?>
    </h1>
</body>
</html>