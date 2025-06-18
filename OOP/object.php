<?php

class Person{
    private int $id;
    public string $name;
    public string $address;

    public function __construct(string $name ,string $address ){
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(){
        echo "<br>Hello " . $this->name . ", Welcome to broken world</br>";
    }

    public function setId($id){
        if($id <= 0){
            // show error
            echo "id must greather than 0" ;
        } else if(!is_int($id)){
            echo "id must be integer";
        } else {
            $this->id=$id;
        }
    }

    public function getId(){
        return $this->id;
    }

}

class User extends Person{

    function sayHello(){
        echo "Hello User " . $this->name;
    }
}

// $vidky = new Person();
// $vidky->setId(-1);
// $vidky->name = "Vidky Adhi";
// $vidky->address = "Kismantoro";
// echo $vidky->getId();

// $herman = new User();
// $herman->name = "Herman";

// $class_var = get_class_vars('Person');
// print_r($class_var);

// if (property_exists('Person', 'address')) {
//     echo "address properties exist in class Person";
// } else {
//     echo "404";
// }

// echo (method_exists('Person', 'sayHello')) ? "method sayHello exist" : "404";

// $vidky->sayHello();

// if(is_subclass_of($herman, 'Person')){
//     $herman->sayHello();
// }

// $parent = class_parents($herman);
// print_r($parent);
// echo "<br>" . implode(', ', $parent) . "</br>";

// echo $vidky->name;

?>