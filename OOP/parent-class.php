<?php

class Programmer{
    public static function makeSystem(){
        return "Start Coding";
    }
}

class AmeturProgrammer extends Programmer{
    public static function makeSystem() {
        return " Read Documentation, " . 
                parent::makeSystem() . 
                ", Clean up mess.";
    }
}

echo "Programmer : " . Programmer::makeSystem() . "<br>";

echo "Ametur Programmer : " . AmeturProgrammer::makeSystem(). "<br />";

class Image{
    public static $sizeStatus = true;

    public static function geometry(){
        echo "760x300";
    }
}

// parent:: look similar to super() in another programming language

class PhotoProfile extends Image{
    public static function geometry()
    {
        if(parent::$sizeStatus){
            return "50x50";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br />";
echo PhotoProfile::geometry() . "<br />";
PhotoProfile::$sizeStatus = false;
echo PhotoProfile::geometry() . "<br />";

?>