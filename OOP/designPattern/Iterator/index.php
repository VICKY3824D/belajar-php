<?php

class MyIterator implements Iterator {
    private $position = 0;
    private $data;


    public function __construct( $data) {
        $this->position = 0;

        $this->data = $data;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function current(): mixed {
        return $this->data[$this->position];
    }

    public function key(): mixed {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function prev(): void {
        --$this->position;
    }

    public function valid(): bool {
        return isset($this->data[$this->position]);
    }

    // Additional methods for removing elements
    public function remove($position){
        unset($this->data[$position]);
    }


}

$articles = [
	0 => [
		'title' => 'Judul 1',
		'content' => 'Konten 1'
	],
	1 => [
		'title' => 'Judul 2',
		'content' => 'Konten 2'
	],
	2 => [
		'title' => 'Judul 3',
		'content' => 'Konten 3'
	]
];

// Create an instance of MyIterator with the articles array
$iterator = new MyIterator($articles);

echo 'Current index: ' . $iterator->current()['title'] . PHP_EOL;

// try to increment the iterator
$iterator->next();


echo 'Current index after next: ' . $iterator->current()['title'] . PHP_EOL;

//try rewind the iterator to the first element
$iterator->rewind();

echo 'Current index after rewind: ' . $iterator->current()['title'] . PHP_EOL;

//remove an element at position 2
$iterator->remove(2);


print_r($iterator);                


?>