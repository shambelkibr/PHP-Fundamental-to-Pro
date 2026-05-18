<?php
require 'db.php';

// Create table if not exists
$dbc->query("CREATE TABLE IF NOT EXISTS PROJECT (
    project_id   INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(100) NOT NULL,
    hourly_rate  DECIMAL(10,2) NOT NULL
)");

$project_name = $dbc->real_escape_string($_POST['project_name']);
$hourly_rate  = floatval($_POST['hourly_rate']);

$sql = "INSERT INTO PROJECT (project_name, hourly_rate) 
        VALUES ('$project_name', $hourly_rate)";

if ($dbc->query($sql)) {
    echo "Project added successfully!<br>";
} else {
    echo "Error: " . $dbc->error . "<br>";
}

echo "<a href='insert_project.html'>Go Back</a> | ";
echo "<a href='view_projects.php'>View Projects</a>";
?>