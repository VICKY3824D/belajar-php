<?php 

$matches = [];

$result = preg_match("/dky|dana/i", "Vidky Adhi Pradana", $matches);

$result2 = preg_match_all("/dky|dana/i", "Vidky Adhi Pradana", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***" , "dasar anjing lu bangsat"  );

var_dump($result);

?>