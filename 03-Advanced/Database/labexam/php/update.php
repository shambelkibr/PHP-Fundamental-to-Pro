<?php
require 'db.php';

$student_id   =$_POST['student_id'];
$student_name = $_POST['student_name'];

$sql = "UPDATE student SET student_name = '$student_name' WHERE student_id = $student_id";

if ($dbc->query($sql)) {
    echo "Student name updated successfully!<br>";
} else {
    echo "Error: " . $dbc->error . "<br>";
}

$sql = "DELETE FROM Student where student_id==$student_id";

$dbc->query($sql);

echo "<a href='update_student.html'>Go Back</a> | ";
echo "<a href='view_all.php'>View All</a>";
?>