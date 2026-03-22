<?php

$name="shanbel";

echo strlen($name);

echo "<br/>";

echo str_word_count($name);

echo  "<br/>";
echo strrev($name);

echo "<br/>";
echo strpos($name,"el");

echo "<br/>";

echo str_replace("bel","belly",$name);
echo "<br/>";
echo strtolower("HELLO");
echo "<br/>";
echo strtoupper("hello");
echo "<br/>";
echo ucfirst("php");
echo "<br/>";
echo ucwords("learn php programming");
echo "<br/>";
echo trim("   Hello   ");
echo "<br/>";
$text = "apple,banana,orange";
// print_r(explode(",", $text));
var_dump(explode(",", $text));
echo "<br/>";
$arr = ["apple", "banana", "orange"];
echo implode(",", $arr);

    ?>

