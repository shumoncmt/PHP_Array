<?php
$fruits = [
    "mango"=>"আম",  //key => value
    "grape"=> "আঙ্গুর", 
    "apple"=> "আপেল"

];
$fruits["banana"] = "কলা";

foreach($fruits as $key => $value){
    echo "The Translation of {$key} is {$value} \n";
}