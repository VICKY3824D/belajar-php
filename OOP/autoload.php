<?php 

function Autoload($class){
    if(preg_match('/\A\w+\Z/', $class)){
        include 'classes/' . $class . '.php' ;
    } 
}

spl_autoload_register('Autoload');

$cat = new Cat();
echo $cat->name;

$stud = new Student();
echo $stud->name;

?>