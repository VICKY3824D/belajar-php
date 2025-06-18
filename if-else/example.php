<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: brown;
        }
    </style>
</head>
<body>
    <h1>
        <?php 
            $nilai = 80;
            if ($nilai > 70) {
                echo "Lulus";
            } else {
                echo "Tidak Lulus";
            }
        ?>
    </h1>
    <h1>
        <?php
        echo ($nilai > 80) ? "Lulus": "Tidak Lulus";
        ?>
    </h1>
    <h2>
        <?php
        $angka = 4;
        switch ($angka) {
            case 1:
                echo "Senin";
                break;
            case 2:
                echo "Selasa";
                break;
            case 3:
                echo "Rabu";
                break;
            case 4:
                echo "Kamis";
                break; 

            default:
                echo "";
                break;
        }
        ?>
    </h2>

</body>
</html>