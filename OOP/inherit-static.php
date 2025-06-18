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

    public static function getSchoolName(){
        return "Alpha School";
    }

    public function schoolName(){
        return "Animal School";
    }
}

class PartTimeStudent extends Student{
    public $schoolname;
    public function __construct(){
        $this->schoolname = parent::getSchoolName();
    }

}

// show Student grades with index 0 
echo Student::$grades[0] . '<br>';
echo Student::motto() . '<br>';

Student::addStudents();
Student::addStudents();

echo Student::count(). '<br>';

// show grades with index 0 from child class (PartTimeStudent)
echo '<br>' . PartTimeStudent::$grades[0]. '<br>';

//can access directly static method 
echo PartTimeStudent::motto() . '<br>';

PartTimeStudent::$grades[] = 'Sarjana';

// breaking down array with ,
echo '<br> all students : ' . implode(', ', Student::$grades);

// add student that is static from child class
PartTimeStudent::addStudents();

echo  '<br> Student count : ' . Student::count();
echo  '<br> PartTimeStudent count : ' . PartTimeStudent::count();

$student_x = new PartTimeStudent;
echo '<br> School from extended static : ' . $student_x->schoolname;


// error, can't access non static method
// echo Student::schoolName();

echo '<br>' . $student_x->schoolName();

?>