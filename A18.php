<?php
$multidimensionalFruitsArray =[
    "mango" =>[
        "strawberry",
        "pineapple",
        "banana"
    ],
    "citrus" =>[
        "orange",
        "grape",
        "apple"
    ],
    "tropical" => [
        "pineapple",
        "grape",
        "mango"
    ]
    ];
    foreach($multidimensionalFruitsArray as $key => $value){
        echo $key;
        foreach($value as $fruit){
            echo "-". $fruit."\n";
        }
    }