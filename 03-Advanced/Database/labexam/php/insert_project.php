<?php require 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Registration</title>
</head>
<body>

<h2>Project Registration Form</h2>


<form action="save_project.php" method="POST">
    Project Code: <input type="text" name="project_code" required><br><br>
    Project Name: <input type="text" name="project_name" required><br><br>
    Hourly Rate:  <input type="datetime-local" name="hourly_rate" required><br><br>

    Student:
    <select name="student_id" required>
        <option value="">-- Select Student --</option>
        <?php
        $students = $dbc->query("SELECT student_id, student_name FROM student");
        while ($row = $students->fetch_assoc()):
        ?>
        <option value="<?= $row['student_id'] ?>"><?= $row['student_name'] ?></option>
        <?php endwhile; ?>
    </select><br><br>

    <input type="submit" value="Register Project">
</form>


</body>
</html>