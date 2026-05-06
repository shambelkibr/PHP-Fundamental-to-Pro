<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$file = fopen("welcome1.txt", "w");
fwrite($file, "Hello World Welcome to PHP file handling.");
fclose($file);
echo "File created successfully!";
?>