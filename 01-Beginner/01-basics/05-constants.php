<?php

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

?>
