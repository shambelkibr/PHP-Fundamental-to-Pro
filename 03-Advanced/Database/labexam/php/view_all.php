<?php
require 'db.php';

$sql = "SELECT student_table.id,
               student_table.firstname,
               student_table.lastname,
               student_table.department,
               PROJECT.project_name,
               PROJECT.hourly_rate
        FROM student_table
        JOIN PROJECT ON student_table.project_id = PROJECT.project_id";

$result = $dbc->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students & Projects</title>
</head>
<body>

<h2>Students & Projects</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Department</th>
        <th>Project Name</th>
        <th>Hourly Rate</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['firstname'] ?></td>
        <td><?= $row['lastname'] ?></td>
        <td><?= $row['department'] ?></td>
        <td><?= $row['project_name'] ?></td>
        <td><?= $row['hourly_rate'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>