<?php

class Animal{
    public string $name;
    public int $age;
    public int $size;

    public function __construct($name, $age, $size) {
        $this->name = $name;
        $this->age = $age;
        $this->size = $size;
    }

    public function __invoke(...$arguments) {
        
        echo "Invoked Animal: " . implode(" ", $arguments) . PHP_EOL;
    }

    public function __tostring(){
        return "My name is animal $this->name, i am $this->age years old, my size is $this->size";
    }

    public function __clone() {
        
        $this->name = "Clone of " . $this->name;
        $this->age = $this->age + 1; // Increment age for cloned object
        $this->size = $this->size + 2; // Increment size for cloned object
    }

    public function __debugInfo()
    {
        return [
            'name' => $this->name,
            'size' => $this->size,
        ];
    }
}

$animal1 = new Animal("Lion", 5, 10);
foreach ($animal1 as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

$animal2 = clone $animal1;
foreach ($animal2 as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

// (===) checks if both objects are the same instance
if ($animal1 === $animal1) {
    echo "Both objects are the same instance." . PHP_EOL;
} else {
    echo "Both objects are different instances." . PHP_EOL;
}

// (==) checks if both objects have the same properties and values
if ($animal1 == $animal2) {
    echo "Both objects are the same properties and values." . PHP_EOL;
} else {
    echo "Both objects are different properties and values." . PHP_EOL;
}

// Convert object to string using __toString method
$strAnimal1 = (string) $animal1;

echo $strAnimal1 . PHP_EOL;
echo $animal2 . PHP_EOL;

$animal1("Hello", "World"); // Invoking the object as a function using __invoke method

var_dump($animal1); // Displaying debug information using __debugInfo method

?>