<?php

class Vheicle {
    public string $name;
    public string $type;
    public int $hp;
    public int $wheels;

    public function __construct(string $name,string $type ,int $wheels, int $hp) {
        $this->name = $name;
        $this->wheels = $wheels;
        $this->type = $type;
        $this->hp = $hp;
    }
}

class Bus extends Vheicle {
    public function __construct(string $name, string $type,string $wheels, int $hp) {
        parent::__construct($name,$type, $wheels, $hp);
    }

    public function __toString()
    
    {
        return "Bus {$this->name} {$this->type} has {$this->wheels} wheels {$this->hp} HP.";
    }

    public function __invoke()
    {
        return "Bus {$this->name} is being invoked.";
    }

    public function __clone()
    {
    }
}

$scaniadd = new Bus('Scania', 'k410',8 , 410);

$scanialong = clone $scaniadd;
$scanialong->type = 'k360';
$scanialong->wheels = 6;

$rk8 = new Bus('Hino', 'RK260', 6, 260);

$rm280 = clone $rk8;
$rm280->type = 'RM280';
$rm280->hp = 280;

echo $rk8 . PHP_EOL;
// echo $scaniadd() . PHP_EOL;
echo $rm280 . PHP_EOL;


?>