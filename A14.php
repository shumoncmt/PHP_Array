<?php
$fruits = ["mango", "banana", "apple", "grape", "orange", "X","pineapple", "watermelon"];
$position_of_banana = array_search("X", $fruits);
 if ($position_of_banana !== false){
    echo "X is found at position $position_of_banana";
 }else {
    echo "X is not found";
 }

 echo "\n";
 $student =["rahim", "karim", "shakil", "mim", "shumon", "sakib", "sabbir", "santo", "said"];
 $position_of_student  = array_search("rahim", $student);
 if ($position_of_student !== false){
    echo "Student is found position $position_of_student";
 }else{
    echo "Student is not found  position $position_of_student";
 }