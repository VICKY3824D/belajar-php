<?php

class Vheicle {
    public string $name;
    public string $type;
    public int $cc;
    public int $wheels;

    public function __construct(string $name,string $type ,int $wheels) {
        $this->name = $name;
        $this->wheels = $wheels;
        $this->type = $type;
    }
}

class Bus extends Vheicle {
    public function __construct(string $name, string $type,string $wheels) {
        parent::__construct($name,$type, $wheels);
    }

    public function __toString()
    
    {
        return "Bus {$this->name} {$this->type} has {$this->wheels} wheels.";
    }

    public function __invoke()
    {
        return "Bus {$this->name} is being invoked.";
    }

    public function __clone()
    {
        
        
    }
}

$scaniadd = new Bus('Scania', 'k410',8 );

$scanialong = clone $scaniadd;
// $scanialong->type = 'k360';
// $scanialong->wheels = 6;

echo $scaniadd . PHP_EOL;
// echo $scaniadd() . PHP_EOL;
echo $scanialong . PHP_EOL;


?>