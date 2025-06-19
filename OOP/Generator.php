<?php

function getGenap(int $max): Iterator{
    $array = [];
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

// foreach (getGenap(50) as $value) {
//     echo $value . PHP_EOL;
// }

function getGanjil(int $max): Generator {
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 1) {
           yield $i;
        }
    }
}

foreach (getGanjil(50) as $value) {
    echo $value . PHP_EOL;
}

?>