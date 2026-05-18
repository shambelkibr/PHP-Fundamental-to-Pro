<?php
require 'db.php';

$result = $dbc->query("SELECT * FROM student_table");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>

<h2>All Students</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Department</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['firstname'] ?></td>
        <td><?= $row['lastname'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['department'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

<br>
<a href="insert_guest.html">Add New Student</a>

</body>
</html>