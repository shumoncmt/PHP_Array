<?php
$fruits = [ "mango", "banana", "grape", "apple", "orange","pineapple"];

array_splice($fruits, 3, 0, "watermelon"); //adding
print_r($fruits);