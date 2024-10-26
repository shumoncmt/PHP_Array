<?php
$fruits = [
    "mango" => "আম",
    "grape" => "আঙ্গুর",
    "apple" => "আপেল"
];
$fruits ["banana"] = "কলা";
echo array_key_exists("mango", $fruits);
echo array_search("কলা" , $fruits);