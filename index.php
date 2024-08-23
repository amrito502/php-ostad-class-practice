<?php

// various string operations

$str1 = "Hello";
$str2 = "World";

$str3 = $str1 . " " . $str2;

echo $str3;

$date = "16th July";
$expense = "516 taka";

// $result = "On " . $date . " Total Expense = " . $expense;
// best alternative
$result = "On {$date} Total Expense = {$expense}";

echo $result;