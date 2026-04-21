<?php
$data = [
"id" => 1,
"name" => "Aster",
"role" => "Developer"
];
$jsonData = json_encode($data);
$file = fopen("user.json", "w"); // 'w' = write mode
fwrite($file, $jsonData);
fclose($file);
echo "Data written to user.json";
?>