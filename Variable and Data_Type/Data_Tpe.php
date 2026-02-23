<?php

$age=21;
$prices=99.9;


var_dump($age);
echo "<br/>";
var_dump($prices);
echo "<br/>";

var_dump(is_int($age));
echo "<br/>";
var_dump(is_integer($age));
echo "<br/>";
var_dump(is_long($age));
echo "<br/>";

var_dump(is_float($prices));
echo "<br/>";
var_dump(is_double($prices));
echo "<br/>";
var_dump(is_finite($prices));
echo "<br/>";
var_dump(is_infinite($prices));
echo "<br/>";
var_dump(is_string($age));
echo "<br/>";
var_dump(is_string($prices));
echo "<br/>";

// to check data  type of variable
var_dump(is_numeric("100"));   // true
echo "<br/>";
var_dump(is_numeric("abc"));   // false
echo "<br/>";
var_dump(is_numeric("10.5"));  // true
echo "<br/>";
var_dump(is_numeric("10e5"));  // true
//  number function 
echo "<br/>";
echo "check number function <br/>";
echo "<br/>";
echo abs(-10);  // 10
echo "<br/>";
echo round(4.6);  // 5
echo "<br/>";
echo ceil(4.2);  // 5
echo "<br/>";
echo floor(4.8);  // 4
echo "<br/>";
echo rand(1, 100);  // random number between 1 and 100
?>