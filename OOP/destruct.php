<?php

class Product{
    public $name;
    public $color;
    public $price;

    // public function __construct($name, $color){
    //     $this->name = $name;
    //     $this->color = $color;

    // }

    public function __construct($args=[]){
        $this->name = $args['name'] ?? $this->name;
        $this->color = $args['color'] ?? $this->color;
        $this->price = $args['price'] ?? $this->price;
    }

    public function __destruct(){
        echo "Good bye!";
    }
        
}


$shirt = new Product(['name' => 'T-shirt',
                            'color' => 'Blue',
                            'price' => 299
                            ]);

echo $shirt->name . '<br>' . $shirt->color . '<br>' . $shirt->price . '<br>';
unset($shirt);

$laptop = new Product([
                                'name' => 'Macbook Air M2',
                                'color' => 'Silver',
                                'price' => 2500
                            ]);
echo $laptop->name . '<br>' . $laptop->color . '<br>' . $laptop->price . '<br>';


?>