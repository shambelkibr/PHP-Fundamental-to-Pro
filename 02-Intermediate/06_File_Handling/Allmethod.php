<?php

$sampleFile = "sample.txt";         // Create a sample file first
file_put_contents($sampleFile, "Hello World!<br>This is line 2<br>PHP is awesome!");



echo "=== FILE CONTENT ===<br>";
echo file_get_contents($sampleFile);
echo "<br><hr>";

 
echo "1. file_get_contents():\<br>";    //Read entire file
echo file_get_contents($sampleFile);
echo "<br><hr>";


echo "2. fread() - First 5 bytes: ";    //  Read specific bytes
$file = fopen($sampleFile, "r");
echo fread($file, 5);  // Reads "Hello"
fclose($file);
echo "<br><hr>";


echo "3. fgets() - Line by line:<br>"; // Read line by line
$file = fopen($sampleFile, "r");
while(($line = fgets($file)) !== false) {
    echo  $line;
}
fclose($file);
echo "<br><hr>";


echo "4. fgetc() - Character by character:<br>";    // Read character by character
$file = fopen($sampleFile, "r");
while(($char = fgetc($file)) !== false) {   //  or use while(!feof($file)){echo fgetc($file);  }
    echo $char;
}
fclose($file);
echo "<br><hr>";




unlink($sampleFile);    // Clean up
echo "Sample file cleaned up.";


?>