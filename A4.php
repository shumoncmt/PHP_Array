<?php
$fruits = ["banana", "mango", "apple"];

array_shift($fruits);  //array first value remove .

print_r($fruits);
echo PHP_EOL;
array_unshift ($fruits, "grape"); //Array first value Return
print_r($fruits);