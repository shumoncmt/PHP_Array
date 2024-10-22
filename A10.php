<?php
$fruits = [
    "mango" =>"আম",
    "grape " => "আঙ্গুর",
    "Apple "  => "আপেল"
]; //Associative Array

$fruits ["banana"] = "কলা";

unset($fruits["grape"]);

print_r($fruits);