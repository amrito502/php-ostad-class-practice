<?php


$str = "Rahim, Karim, Motin ajka school palaise";

$search = "Rahim";

$found = strpos($str, $search);

if($found !== false){
    echo "{$search} ajke school theke palaise";
}else{
    echo "{$search} ajke school theke palainy";
}