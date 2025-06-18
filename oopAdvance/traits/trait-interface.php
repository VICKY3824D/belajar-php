<?php 

trait IntroStudent{
    public static function greeting(string $name)
    {
        return "Hello everyone, my name {$name} <br>";
    }
}

trait IntroTeacher{
    public static function name(string $name){
        return "Hello student, my name {$name}<br>";
    }
}

interface Campus{
    public function campusName(string $campus_name);
}

class Intro implements Campus{

    use IntroStudent, IntroTeacher;
    public static function introduction($student, $teacher){
        return IntroStudent::greeting("Rakan") . IntroTeacher::name($teacher);

    }

    public function campusName(string $campus_name){
            return $campus_name . " is my campus";
    }
}

echo Intro::introduction("Rakai", "Heru");
echo (new Intro)->campusName("Univeristas Gang Mrican");



?>