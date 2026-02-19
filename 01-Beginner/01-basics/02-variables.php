<?php
/**
 * Variables in PHP
 * 
 * Variables are containers for storing data values.
 * In PHP, a variable starts with the $ sign, followed by the name.
 */

echo "<h2>Working with Variables</h2>";

// Variable declaration and initialization
$name = "John Doe";
$age = 25;
$salary = 50000.50;
$isStudent = true;

// Displaying variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Salary: $" . $salary . "<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>";
echo "<br>";

// Variable naming rules
$myVariable = "Valid";        // camelCase
$my_variable = "Valid";       // snake_case
$MyVariable = "Valid";        // PascalCase
$_myVariable = "Valid";       // Starting with underscore
$myVariable2 = "Valid";       // With numbers

// Invalid variable names (commented out)
// $2myVariable = "Invalid";  // Cannot start with number
// $my-variable = "Invalid";  // Cannot use hyphen
// $my variable = "Invalid";  // Cannot have space

echo "<h3>Variable Scope</h3>";

// Global scope
$globalVar = "I am global";

function testScope() {
    // Local scope
    $localVar = "I am local";
    echo "Inside function: " . $localVar . "<br>";
    
    // Accessing global variable (requires global keyword)
    global $globalVar;
    echo "Inside function accessing global: " . $globalVar . "<br>";
}

testScope();
echo "Outside function: " . $globalVar . "<br>";
// echo $localVar; // This would cause an error

echo "<br><h3>Variable Variables</h3>";

$var = "name";
$$var = "Dynamic Value"; // Creates $name = "Dynamic Value"
echo "Variable variable: " . $name . "<br>";

echo "<br><h3>Type Juggling</h3>";

// PHP automatically converts types
$num = "10";
$result = $num + 5;  // "10" is converted to integer
echo "String '10' + 5 = " . $result . "<br>";

$str = "5 apples";
$result = $str + 3;  // Converts to 5
echo "'5 apples' + 3 = " . $result . "<br>";

?>
