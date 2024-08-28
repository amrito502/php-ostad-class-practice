<?php

$wname = "Amrito  Bosu..i am..amrito";
$wname1 = "A  Amrito Bosu";
$wname2 = "A  Amrito  Bosu";

$fixname = str_replace(["  ",".."],[" ",". "],$wname);


$fixname1 = str_replace("  "," ",$wname1);
$fixname2 = str_replace("  "," ",$wname2);

echo $fixname."\n";
echo $fixname1."\n";
echo $fixname2."\n";