<?php


namespace Data{

    require_once "Animal.php";

    interface AnimalShelter{
        public function adobt(string $name): Animal;
    }

    class CatShelter implements AnimalShelter{
        public function adobt(string $name): Cat{
            $cat = new Cat();
            $cat->name = $name;
            return $cat;
        }
    }

    class DogShelter implements AnimalShelter{
        public function adobt(string $name) : Dog {
            $dog = new Dog();
            $dog->name = $name;
            return $dog;
        }
    }

}

?>