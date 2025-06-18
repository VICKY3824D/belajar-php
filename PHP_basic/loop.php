<?php

$names = array("heru", "herman", "andi", "budi", "heru");
// $jumlah_heru = 0;

// foreach ($names as $name => $value){
//     if($value == 'heru'){
//         $jumlah_heru += 1;
//     }
//     echo "$name : $value <br>";
// }

// echo "Jumlah heru : " . $jumlah_heru;

$data = ["heru" => 35, "herman" => 40, "andi" => 30, "budi" => 25];

// foreach ($data as $name => $age){
//     echo "$name berusia $age <br>";
//     if($name == 'herman'){
//         echo "$name ditemukan<br>";
//         break;
//     }
// }

foreach($names as $name){
    if ($name == 'heru'){
        continue;
    }
    echo "$name <br>";
}

?>