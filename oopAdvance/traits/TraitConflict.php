<?php

trait A{
    function doA(): void{
        echo "a" . PHP_EOL;
    }

    function doB(): void{
        echo "b" . PHP_EOL;
    }
}

trait B{
    function doA(): void{
        echo "A" . PHP_EOL;
    }

    function doB(): void{
        echo "B" . PHP_EOL;
    }
}

class sample{
    use A, B {
        B::doA insteadof A; // gunakan doA dari trait B
        A::doB insteadof B; // gunakan doB dari trait A
    }
}

$sample = new sample();
$sample->doA(); // Output: A
$sample->doB(); // Output: b

?>