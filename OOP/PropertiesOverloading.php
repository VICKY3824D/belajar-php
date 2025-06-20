<?php

class Zero {

    // properties to store dynamic object properties
    private array $properties = [];


    // to get the value of a dynamic object property
    public function __get($name){
        return $this->properties[$name];
    }

    // to set the value of a dynamic object property
    public function __set($name, $value){
        $this->properties[$name] = $value;
    }

    // to unset a dynamic object property
    public function __isset($name) {
        return isset($this->properties[$name]);
    }

    // to unset a dynamic object property
    public function __unset($name) {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments){
        $join = join(", ", $arguments);
        return "call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments){
        $join = join(", ", $arguments);
        return "call static function $name with arguments $join" . PHP_EOL;
    }

}

// create the first object that has no properties
$lion = new Zero();

$lion->name = 'Lion';
$lion->type = 'Mammal';
$lion->livetime = 15;

echo "The {$lion->name} is a {$lion->type} and lives for {$lion->livetime} years." . PHP_EOL;
echo "{$lion->intro("I am from savana")}";

// Create a second object that has different properties from the first object.
$volvo = new Zero();

$volvo->merk = 'Volvo';
$volvo->hoursepower = 450;
$volvo->wheels = 8;

echo "The {$volvo->merk} is a {$volvo->hoursepower} and has {$volvo->wheels} wheels." . PHP_EOL;
echo "{$volvo->intro("I am from germany")}";

// call static function
echo Zero::sayHello("Hello Guys!");



?>