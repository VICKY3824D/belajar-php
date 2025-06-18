<?php 

namespace oopAdvance\traits;

trait IntroStudent{
    public static function greeting(string $name)
    {
        return "Hello everyone, my name {$name} <br>";
    }
}

trait TeacherName{
    public static $teacherName;
}

trait IntroTeacher{
    
    public static function helloClass(string $class){
        return "Hello student , my name {$class}<br";
    }
}

trait CanAdmin{
    public abstract function admin(): void;
}

// Trait inheritance
trait All{
    use IntroStudent, IntroTeacher, TeacherName, CanAdmin{

        // mengubah visibilitas method greeting menjadi private
        greeting as private; 
    }
}

class introduction{
    public static function introduction($student, $teacher){
        return "Welocome to our school";
    }
}

class Intro extends introduction{

    //menggunakan trait 
    use All;

    // override => ParentClass obverride by => trait = override by => ChildClass

    // mengoverride method admin dari trait
    public  function admin(): void{
        echo "$this->teacherName can be admin";
    }

    // mengimplementasi abstract method dari trait IntroTeacher
    public function helloClass(string $class)
    {
        return "Hello student, my name is $this->teacherName ,teacher on class $class<br>";
    }

    // }
}



?>