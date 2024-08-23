<?php

$string = "***-";

// $final = "";
// for($i = 0; $i < 10; $i++){
//     $final = $final . $string;
// }

$final = str_repeat($string, 10);

echo $final;