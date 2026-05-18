<?php
require 'db.php';

$sql = "SELECT project.project_code,
               project.project_name,
               student.year,
               student.student_name,
               student.department,
               project.hourly_rate
        FROM project
        JOIN student ON project.student_id = student.student_id";

$result = $dbc->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Student Table</title>
</head>
<body>

<h2>Sample Output from project_student table</h2>

<table border="1">
    <tr>
        <th>Project Code</th>
        <th>Project Name</th>
        <th>Year</th>
        <th>Student Name</th>
        <th>Department</th>
        <th>Hourly Rate</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['project_code'] ?></td>
        <td><?= $row['project_name'] ?></td>
        <td><?= $row['year'] ?></td>
        <td><?= $row['student_name'] ?></td>
        <td><?= $row['department'] ?></td>
        <td><?= $row['hourly_rate'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>