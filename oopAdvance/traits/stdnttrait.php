<?php

require_once "trait.php";

use oopAdvance\traits\{Intro,IntroStudent, IntroTeacher};

// for non static trait method
// echo (new Intro())->greeting("Rakai");

// for static trait method
echo IntroStudent::greeting("Rakai");
echo "<br>";

$teacher = new Intro();
$teacher->teacherName = "Heru";
echo $teacher->helloClass("A2");

echo "<br>";
$heri = new Intro();
$heri->teacherName = "Heri Dono";
$heri->admin();

?>