<?php
/**
 * Constants in PHP
 * 
 * Constants are like variables, but once defined, they cannot be changed or undefined.
 * Constants are automatically global across the entire script.
 */

echo "<h2>PHP Constants</h2>";

// Defining constants using define()
echo "<h3>1. Using define()</h3>";
define("SITE_NAME", "PHP Tutorial");
define("MAX_USERS", 100);
define("PI", 3.14159);
define("IS_ACTIVE", true);

echo "Site Name: " . SITE_NAME . "<br>";
echo "Max Users: " . MAX_USERS . "<br>";
echo "PI: " . PI . "<br>";
echo "Is Active: " . (IS_ACTIVE ? "Yes" : "No") . "<br>";

// Case-insensitive constants (PHP < 7.3)
// define("GREETING", "Hello", true); // Deprecated in PHP 7.3

// Constants with const keyword (PHP 5.3+)
echo "<br><h3>2. Using const</h3>";
const APP_VERSION = "1.0.0";
const DEBUG_MODE = false;
echo "App Version: " . APP_VERSION . "<br>";
echo "Debug Mode: " . (DEBUG_MODE ? "On" : "Off") . "<br>";

// Array constants (PHP 5.6+)
echo "<br><h3>3. Array Constants</h3>";
define("COLORS", ["red", "green", "blue"]);
const FRUITS = ["apple", "banana", "orange"];
echo "First color: " . COLORS[0] . "<br>";
echo "Second fruit: " . FRUITS[1] . "<br>";

// Magic constants
echo "<br><h3>4. Magic Constants</h3>";
echo "__LINE__: " . __LINE__ . "<br>";
echo "__FILE__: " . __FILE__ . "<br>";
echo "__DIR__: " . __DIR__ . "<br>";
echo "__FUNCTION__: Inside main script<br>";

function testFunction() {
    echo "__FUNCTION__: " . __FUNCTION__ . "<br>";
}
testFunction();

class TestClass {
    public function showClass() {
        echo "__CLASS__: " . __CLASS__ . "<br>";
        echo "__METHOD__: " . __METHOD__ . "<br>";
    }
}
$obj = new TestClass();
$obj->showClass();

echo "__NAMESPACE__: " . (__NAMESPACE__ ?: "Global") . "<br>";

// Predefined constants
echo "<br><h3>5. Predefined Constants</h3>";
echo "PHP_VERSION: " . PHP_VERSION . "<br>";
echo "PHP_OS: " . PHP_OS . "<br>";
echo "PHP_INT_MAX: " . PHP_INT_MAX . "<br>";

// Checking if constant exists
echo "<br><h3>6. Checking Constants</h3>";
if (defined("SITE_NAME")) {
    echo "SITE_NAME is defined<br>";
} else {
    echo "SITE_NAME is not defined<br>";
}

// Getting constant value by name
$constName = "MAX_USERS";
echo "Value of $constName: " . constant($constName) . "<br>";

// Constants vs Variables
echo "<br><h3>7. Constants vs Variables</h3>";
echo "<strong>Constants:</strong><br>";
echo "- Cannot be changed after definition<br>";
echo "- Automatically global<br>";
echo "- No $ sign<br>";
echo "- By convention, UPPERCASE names<br>";
echo "<br><strong>Variables:</strong><br>";
echo "- Can be changed<br>";
echo "- Have scope (local/global)<br>";
echo "- Use $ sign<br>";
echo "- Usually lowercase or camelCase<br>";

?>
