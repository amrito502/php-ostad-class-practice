<?php

function generatePassword($length, $lowercase, $uppercase, $numbers,$symbols){
    $lowercaseCharacters = "abcdefghijklmnopqrstuvwxyz";
    $uppercaseCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $number = "0123456789";
    $symbols = "-=~!@#$%^&*()_+,./<>?;:[]{}\|";

    $characters ="";

    if($lowercase){
        $characters .= $lowercaseCharacters;
    }

    if($uppercase){
        $characters .= $uppercaseCharacters;
    }

    if($numbers){
        $characters .= $number;
    }

    if($symbols){
        $characters .= $symbols;
    }

    $shuffled = str_shuffle($characters);

    return $password = substr($shuffled, 0, $length);
}
 


$generatePassword = generatePassword(14, true, true, true, true);

echo $generatePassword;