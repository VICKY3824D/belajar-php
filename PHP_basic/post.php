<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        input{
            width: 200px;
            height: 10px;
            
        }

        #submit{
            max-width: 60px;
            height: 30px;
            background-color: brown;
            border: 0cap;
            color: aliceblue;
            border-radius: 4px;
        }

        #submit:hover{
            background-color: burlywood;
            cursor: grab;
        }
    </style>
</head>
<body>
    <form action="proses.php" method="post">
    Nama:<br><input type="text" name="nama"><br>
    Alamat:<br><input type="text" name="alamat"><br><br>
    <input type="submit" id="submit" value="Submit">
    </form>
</body>
</html>