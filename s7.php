<?php


$str = "Hello World";

$arr = ['H','e','l','l','o',' ','W','o','r','l','d'];

echo $arr[0];

echo $str[4];

$str1 = "Hello from ostad php course";

$parts = explode(" ", $str1);

// $nstr = join("-", $parts);

$nstr = implode("-", $parts);

echo $nstr;
print_r($parts);