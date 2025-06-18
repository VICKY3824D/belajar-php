<?php

class Student{
    public static $instanceCount = 0;

    public function __construct(){
        self::$instanceCount += 1;
    }
}

class Elementary extends Student{
    public $total = 3;
}

class Junior extends Student {
    public $total = 2;
}

class Senior extends Student{
    public $total = 4;
}

$elementary = new Elementary();
echo "Elementary : {$elementary->total} <br />";

$junior = new Junior();
echo "Elementary : {$junior->total} <br />";

$senior = new Senior();
echo "Senior : {$senior->total} <br />";

$senior = new Senior();

echo "Instance count : " . Student::$instanceCount;

?>