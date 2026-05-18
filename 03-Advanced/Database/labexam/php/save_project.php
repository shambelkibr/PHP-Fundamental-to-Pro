<?php
require 'db.php';

$project_code = $_POST['project_code'];
$project_name = $_POST['project_name'];
$hourly_rate  = $_POST['hourly_rate'];
$student_id   = $_POST['student_id'];

    $sql = "INSERT INTO project (project_code, project_name, student_id, hourly_rate)
            VALUES ('$project_code', '$project_name', $student_id, '$hourly_rate')";

    if ($dbc->query($sql)) {
        echo "Project registered successfully!<br>";
    } else {
        echo "Error: " . $dbc->error . "<br>";
    }

    echo "<br><br>";

    echo "<a href='insert_project.php'>Go Back</a> | ";
    echo "<a href='view_all_student.php'>View All</a>";

?>