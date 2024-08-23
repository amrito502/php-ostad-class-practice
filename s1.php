<?php

$string = "Hello World";

// echo strlen($string);

// echo substr($string, 0, 1);

// for($i = strlen($string)-1; $i >= 0; $i--){
//     echo $string[$i];
// }

// $reverse = '';
// for($i = strlen($string)-1; $i >= 0; $i--){
//     $reverse = $reverse . $string[$i];
// }
// echo $reverse;

$reverse = strrev($string);
echo $reverse;