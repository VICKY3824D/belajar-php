<?php 

interface HelloWorld {
    public function sayHello(): void;
}

$helloWorld = new class ("Heksdf") implements HelloWorld {

    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello(): void {
        echo "Hello $this->name from Anonymous Class!";
    }
};

$helloWorld->sayHello();

?>