<?php

$score = 85; // change score

// Grade calculation
if ($score >= 90) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Score: $score <br>";
echo "Grade: $grade <br><br>";

$number = 7; // change number

// Positive / Negative / Zero
if ($number > 0) {
    echo "Positive number<br>";
} elseif ($number < 0) {
    echo "Negative number<br>";
} else {
    echo "Zero<br>";
}

// Even / Odd
if ($number % 2 == 0) {
    echo "Even number<br>";
} else {
    echo "Odd number<br>";
}

// Prime check
$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "Prime number";
} else {
    echo "Not prime";
}

?>