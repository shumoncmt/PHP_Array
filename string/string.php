<?php
$name ="Shakil";

$single_str1= 'My Name is ' . $name . 'Mia'; // That is mot manageable way | Less use case
$double_str2 = "My Name is ". $name . " " ."Mia"; 


$single_str3 = 'My name is {$name}';
$double_set4 = "My Name is {$name}"; //{} that is more manageable wat| more use case

$heredoc_str5= <<<Demo
        This is heredoc string
        This is heredoc string
        This is heredoc string
Demo;                               // <<<Demo  ...... Demo | Near 0 use case inside laravel 


$newdoc_str6 = <<<'Demo'
        This is new string
        This is new string
        This is new string
Demo;


$city = "Dhaka is our My city";
//echo strlen( $city); 
//echo str_word_count($city);
//echo strpos($city , "M"); 

//echo str_replace("city" , "Ostad", $city);// replace our code
// $arr = array("hello","world","how","are","you");
// echo implode("+", $arr);

// $str =("Hello+world+how+are+you");
// print_r(explode("+",$str));
// $str ="Hello     ";
// echo trim($str);

// $str = "Hello World";
// echo strtoupper( $str );
//$str = "Hello World";
//echo strtolower($str);
//echo str_repeat("Bangladesh  Dhaka ", 10);

echo md5("HelloBangladesh");
echo "\n";

echo sha1("HelloBangladesh");





//echo $newdoc_str6 ;
