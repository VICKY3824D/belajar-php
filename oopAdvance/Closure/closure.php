<?php

$nilai = [1,3,5,6,8,14,23,33];
$kle3= array_filter($nilai, function($item){
    return ($item % 2  == 0);
});

var_dump($kle3);

$filtering = function ($item){
    return ($item % 2 == 1);
};

$odd = array_filter($nilai, $filtering);
echo '<br>';
print_r($odd);

?>