<?php
require 'db.php';

$result = $dbc->query("SELECT * FROM student_table");

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Guests</title>
</head>
<body>

<h2>All Guests</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Registered</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['firstname'] ?></td>
        <td><?= $row['lastname'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['reg_Date'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

<br>
<a href="insert_guest.php">Add New Guest</a>

</body>
</html>