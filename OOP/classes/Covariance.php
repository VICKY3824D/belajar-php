<?php

use Data\CatShelter;

require_once "AnimalShelter.php";
require_once "Animal.php";

$catShelter = new CatShelter();
$cat = $catShelter->adobt("Marinem");

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adobt("Harno");




?>