<?php

$str = "hello world//";
$str1 = "hello world/??#";

echo $trim1 = trim($str," /")."\n";

echo $trim2 = trim($str1," /?#")."\n";