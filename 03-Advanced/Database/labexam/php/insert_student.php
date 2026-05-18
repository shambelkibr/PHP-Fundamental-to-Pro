<?php
    require 'db.php';

    $student_name = $_POST['student_name'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $department   = $_POST['department'];
    $year         = $_POST['year'];


    $sql = "INSERT INTO student (student_name, email, phone, department, year)
            VALUES ('$student_name', '$email', '$phone', '$department', $year)";

    if ($dbc->query($sql)) {
        echo "Student registered successfully!<br>";
    } else {
        echo "Error: " . $dbc->error . "<br>";
    }
    echo "<br>  <br>";
    echo "<a href='../html/insert_student.html'> Go Back </a> | ";
    echo "<a href='view_all_student.php'> View All </a>";

?>