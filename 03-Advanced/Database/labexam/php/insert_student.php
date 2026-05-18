<?php
    require 'db.php';

    $student_name = $dbc->real_escape_string($_POST['student_name']);
    $email        = $dbc->real_escape_string($_POST['email']);
    $phone        = $dbc->real_escape_string($_POST['phone']);
    $department   = $dbc->real_escape_string($_POST['department']);
    $year         = intval($_POST['year']);

    $sql = "INSERT INTO student (student_name, email, phone, department, year)
            VALUES ('$student_name', '$email', '$phone', '$department', $year)";

    if ($dbc->query($sql)) {
        echo "Student registered successfully!<br>";
    } else {
        echo "Error: " . $dbc->error . "<br>";
    }

    echo "<a href='../html/insert_student.html'>Go Back</a> | ";
    echo "<a href='view_all.php'>View All</a>";

?>