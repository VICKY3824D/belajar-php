<?php

/*
STD class berfungsi untuk mengubah array menjadi objek, atau objek menjadi array.
*/

require_once 'object.php';

$array = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

// Mengubah array menjadi objek
$object = (object) $array;

// echo "Name: " . $object->name . "<br>"; 
// echo "Age: " . $object->age . "<br>"; 
// echo "City: " . $object->city . "<br>"; 

// Mengubah objek kembali menjadi array
$arrayFromObject = (array) $object;
var_dump($arrayFromObject); 

$person = new Person("Jane Donald", "Los Iluminados");

$person->setId(10);

$arrayPerson = (array) $person;

echo "<br>Person Object to Array:<br>";
print_r($arrayPerson);





?>