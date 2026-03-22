<?php

$string = "   hello world from php   ";

echo "Original String: '$string'<br><br>";

// 1. strtoupper() → convert to uppercase
echo "strtoupper: " . strtoupper($string) . "<br>";

// 2. ucfirst() → capitalize first character only
echo "ucfirst: " . ucfirst(trim($string)) . "<br>";

// 3. ucwords() → capitalize first letter of each word
echo "ucwords: " . ucwords(trim($string)) . "<br>";

// 4. trim() → remove spaces from beginning and end
$trimmed = trim($string);
echo "trim: '$trimmed'<br>";

// 5. strlen() → string length
echo "strlen: " . strlen($trimmed) . "<br>";

// 6. str_word_count() → count words
echo "str_word_count: " . str_word_count($trimmed) . "<br>";

// 7. str_replace() → replace text
echo "str_replace: " . str_replace("world", "PHP", $trimmed) . "<br>";
echo strpos("Hello World how are you?", "how"); 
?>