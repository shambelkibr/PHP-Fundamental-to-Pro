<?php
/**
 * Data Types in PHP
 * 
 * PHP supports various data types:
 * - String
 * - Integer
 * - Float (floating point numbers)
 * - Boolean
 * - Array
 * - Object
 * - NULL
 * - Resource
 */

echo "<h2>PHP Data Types</h2>";

// STRING
echo "<h3>1. String</h3>";
$string1 = "Hello World";
$string2 = 'Single quotes';
$string3 = "Escape characters: \n\t\\";
echo "Double quotes: $string1<br>";
echo 'Single quotes: $string2<br>'; // Variables not parsed
echo "Single quotes: " . $string2 . "<br>";
echo "Type: " . gettype($string1) . "<br>";

// INTEGER
echo "<br><h3>2. Integer</h3>";
$int1 = 42;
$int2 = -123;
$int3 = 0x1A; // Hexadecimal
$int4 = 0123; // Octal
echo "Decimal: $int1<br>";
echo "Negative: $int2<br>";
echo "Hexadecimal 0x1A: $int3<br>";
echo "Octal 0123: $int4<br>";
echo "Type: " . gettype($int1) . "<br>";

// FLOAT
echo "<br><h3>3. Float</h3>";
$float1 = 3.14;
$float2 = 2.5e3; // Scientific notation
$float3 = -1.23e-4;
echo "Pi: $float1<br>";
echo "Scientific: $float2<br>";
echo "Type: " . gettype($float1) . "<br>";

// BOOLEAN
echo "<br><h3>4. Boolean</h3>";
$bool1 = true;
$bool2 = false;
echo "True: " . ($bool1 ? "1" : "0") . "<br>";
echo "False: " . ($bool2 ? "1" : "0") . "<br>";
echo "Type: " . gettype($bool1) . "<br>";

// ARRAY
echo "<br><h3>5. Array</h3>";
$array1 = array(1, 2, 3, 4, 5);
$array2 = ["apple", "banana", "orange"];
echo "Indexed array: " . implode(", ", $array1) . "<br>";
echo "First element: " . $array2[0] . "<br>";
echo "Type: " . gettype($array1) . "<br>";

// OBJECT
echo "<br><h3>6. Object</h3>";
class Person {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}
$person = new Person("Alice");
echo "Person name: " . $person->name . "<br>";
echo "Type: " . gettype($person) . "<br>";

// NULL
echo "<br><h3>7. NULL</h3>";
$null_var = NULL;
echo "Null variable: " . var_export($null_var, true) . "<br>";
echo "Type: " . gettype($null_var) . "<br>";

// Type checking functions
echo "<br><h3>Type Checking Functions</h3>";
$test = "Hello";
echo "is_string(): " . (is_string($test) ? "Yes" : "No") . "<br>";
echo "is_int(): " . (is_int($test) ? "Yes" : "No") . "<br>";
echo "is_float(): " . (is_float($test) ? "Yes" : "No") . "<br>";
echo "is_bool(): " . (is_bool($test) ? "Yes" : "No") . "<br>";
echo "is_array(): " . (is_array($test) ? "Yes" : "No") . "<br>";
echo "is_null(): " . (is_null($test) ? "Yes" : "No") . "<br>";

// Type casting
echo "<br><h3>Type Casting</h3>";
$number = "42";
echo "Original: $number (type: " . gettype($number) . ")<br>";
$number = (int)$number;
echo "After casting: $number (type: " . gettype($number) . ")<br>";

?>
