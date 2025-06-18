<?php

class Student{
    public static $grades = ['SD', 'SMP', 'SMA'];
    private static int $totalStudents = 0;

    public static function motto(){
        return 'Student who learn PHP';
    }

    public static function count(){
        return self::$totalStudents;
    }

    public static function addStudents(){
        return self::$totalStudents += 1;
    }
}

echo Student::$grades[0] . '<br>';
echo Student::motto() . '<br>';

Student::addStudents();
Student::addStudents();

echo Student::count(). '<br>';

?>