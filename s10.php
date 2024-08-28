<?php

$str = "Hello from ostad laravel course";

$from = 5;
$to = 20;
$length = $to - $from;

$result = substr($str, $from, $length);

echo $result;