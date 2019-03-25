<?php

$variable1="piscine";

$variable2="tennis";

echo "var 1=".$variable1."\n";
echo "var 2=".$variable2."\n";

// $variable1=$variable2;
// $variable2 =$variable1;
$varTemp1=$variable1;
$variable1=$variable2;
$variable2 =$varTemp1;

echo "var 1=".$variable1."\n";
echo "var 2=".$variable2."\n";