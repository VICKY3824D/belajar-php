<?php 

class  Animal {
    public $name;

    final public function cantDo(): string{
        return "Animal cannot talk";
    }

    public function sayHello(){
        return "Hi, Animal";
    }
}

final class Cat extends Animal {
    public $name = 'Meow';

    public function sayHello(){
        return "Hi, Meow";
    }
}


?>