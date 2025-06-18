<?php

class Product{
    public string $name;
    public ?string $color = null;
    public int $price = 0;


    public function __construct($args=[]){
        $this->name = $args['name'] ?? null;
        $this->color = $args['color'] ?? null;
        $this->price = $args['price'] ?? null;
    }
        
}


$shirt = new Product(['name' => 'T-shirt',
                            'color' => 'Blue',
                            'price' => 299
                            ]);

echo $shirt->name . '<br>' . $shirt->color . '<br>' . $shirt->price . '<br>';

$laptop = new Product([
                                'name' => 'Macbook Air M2',
                                'color' => 'Silver',
                                'price' => 2500
                            ]);

echo $laptop->name . '<br>' . $laptop->color . '<br>' . $laptop->price . '<br>';

$macbook = clone $laptop;

echo $macbook->name . '<br>' . $macbook->color . '<br>' . $macbook->price . '<br>';


?>