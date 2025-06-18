<?php 

class Time{
    public const DAY_IN_SEC = 60 * 60 * 24;

    public function tomorrow(){
        return time() + self::DAY_IN_SEC;
    }

    // access const variable without $
    // can acces cont variable with self:: and class name::
    public function yesterday(){
        // return time() - Time::DAY_IN_SEC;
        return time() - self::DAY_IN_SEC;
    }
}

echo '<br> now : '. Time::DAY_IN_SEC;
// echo self::DAY_IN_SEC;

$example = new Time;
echo '<br> tomorrow : ' . $example->tomorrow();
echo '<br> yesterday : ' . $example->yesterday();

?>