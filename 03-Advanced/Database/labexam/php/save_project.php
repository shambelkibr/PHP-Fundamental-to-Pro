<?php
require 'db.php';

$project_code = $dbc->real_escape_string($_POST['project_code']);
$project_name = $dbc->real_escape_string($_POST['project_name']);
$hourly_rate  = $dbc->real_escape_string($_POST['hourly_rate']);
$student_id   = intval($_POST['student_id']);

$sql = "INSERT INTO project (project_code, project_name, student_id, hourly_rate)
        VALUES ('$project_code', '$project_name', $student_id, '$hourly_rate')";

if ($dbc->query($sql)) {
    echo "Project registered successfully!<br>";
} else {
    echo "Error: " . $dbc->error . "<br>";
}

echo "<a href='insert_project.php'>Go Back</a> | ";
echo "<a href='view_all.php'>View All</a>";
?>