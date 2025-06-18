<?php

function sayHello($name){
    // global $name;
    $greet = "Hello $name, Welcome to My Website";
    if (empty($name)){
        echo "Welcome to My Website";
    }

    else {
        echo str_replace("Website", "Application", $greet);
    }
} 

function luasPersegiPanjang($panjang, $lebar){
    return $panjang * $lebar;
}

// references
function changeName(&$name){
    $name = "Hendri";
}

function _doubleing(&$number){
    $number = $number * 2;
}

$name = "Andre";

sayHello($name);
echo "<br>";
changeName($name);

sayHello($name);

echo "<br> Luas Persegi Panjang = " . luasPersegiPanjang(8.0, 2.5);

$x = 8;

for ($i = 1; $i <= 5; $i++){
    _doubleing($x);
    echo "<br> $x";
}

?>