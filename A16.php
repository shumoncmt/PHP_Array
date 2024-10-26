<?php
$fruits = [
    "mango" => "আম",
    "grape" => "আঙ্গুর",
    "apple" => "আপেল"

];
$fruits ["banana"] = "কলা";
print_r($fruits);

$keys = array_keys($fruits);
$values = array_values($fruits);




print_r($keys);
print_r($values);

$new_fruits = array_flip($fruits);//Array reverse
print_r($new_fruits);