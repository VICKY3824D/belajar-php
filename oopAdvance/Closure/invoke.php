<?php

class IsPositiveInt{
    public function __invoke($value){
        return (((int) $value == $value&& $value > 0));
    }
}

echo (new IsPositiveInt) ->__invoke(3) . '<br>';

$inv = new  IsPositiveInt();

var_dump($inv('2'));
var_dump($inv(4.00));

?>