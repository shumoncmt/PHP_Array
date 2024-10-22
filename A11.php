<?php
$fruits = ["Mango", "banana", "apple"];
$nre_fruits = [ "orange", "pineapple", "grape"];

$all_fruits = array_merge($fruits, $nre_fruits);

print_r($all_fruits);

$class3 = ["A", "B", "C"];
$class4 = ["E", "D", "Z", "E", "H", "A", "I" ];
$common_item= array_intersect($class3, $class4);
print_r($common_item);