<?php
// $result = print "Hello!"; // Prints "Hello!" and sets $result = 1
// echo "<br>Result: $result" ."</br>"; // Shows: Result: 1

// print "Welcome to PHP!".$result; // Prints "Welcome to PHP!" and returns
// $fname="shanbl";
// $lname="kibre";



$arr = ["PHP", "Python", "Java"]; //classic(array() vs modern([])?
var_dump($arr);//Values and structure, but not data types or lengths.

echo "<br>";
print_r($arr);//Values and structure, but not data types or lengths.

echo "<br>";
$name = "Eyob";
$age = 12;
var_export($name);
echo "<br>";
$age_output = var_export($age, true); //Returns a string representation of the variable, including its type and value. The second parameter (true) makes it return the output instead of printing it directly.
echo $age_output;
?>