<?php 

class data implements IteratorAggregate {
    var string $first = 'first';
    public string $second = 'second';
    private string $third = 'third';
    protected string $fourth = 'fourth';

    public function getIterator():Generator {
        yield 'first' => $this->first;
        yield 'second' => $this->second;
        yield 'third' => $this->third;
        yield 'fourth' => $this->fourth;
    }

}

$data = new data();
foreach ($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

// class ObjectIteration implements IteratorAggregate {
//     private array $items = [];

//     public function __construct(array $items) {
//         $this->items = $items;
//     }

//     public function getIterator(): Traversable {
//         return new ArrayIterator($this->items);
//     }
// }

// $items = [
//     ['name' => 'apple', 'exp' => 12], 
//     ['name' => 'orange', 'exp' => 7], 
//     ['name' => 'banana', 'exp' => 5]
// ];

// $objectIteration = new ObjectIteration($items);

// foreach ($objectIteration as $key => $item) {
//     echo "$key : Name = {$item['name']}, Exp = {$item['exp']}" . PHP_EOL;
// }

 

?>