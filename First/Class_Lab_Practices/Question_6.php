<?php

$student = [
    "name" => "shambel",
    "scores" => [70, 80, 90]
];

$sum = 0;

foreach ($student["scores"] as $score) {
    $sum += $score;
}

$average = $sum / count($student["scores"]);

echo "Student: " . $student["name"] . "<br>";
echo "Average: " . $average . "<br>";

if ($average >= 60) {
    echo "Result: Pass";
} else {
    echo "Result: Fail";
}

?>