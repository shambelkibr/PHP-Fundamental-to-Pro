<?php
require 'db.php';

$result = $dbc->query("SELECT * FROM PROJECT");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Projects</title>
</head>
<body>

<h2>All Projects</h2>

<table border="1">
    <tr>
        <th>Project ID</th>
        <th>Project Name</th>
        <th>Hourly Rate ($)</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['project_id'] ?></td>
        <td><?= $row['project_name'] ?></td>
        <td><?= $row['hourly_rate'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

<br>
<a href="insert_project.html">Add New Project</a>

</body>
</html>