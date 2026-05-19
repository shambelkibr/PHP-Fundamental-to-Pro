<?php
require 'db.php';




if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sql = "DELETE FROM tbl_disease WHERE Cow_id = $id";

    if ($dbc->query($sql) === TRUE) {

        echo "
        <script>
            alert('Disease record deleted successfully');
            window.location.href='delete.php';
        </script>
        ";

    } else {

        echo "Error deleting record: " . $dbc->error;
    }

    exit;
}


/* FETCH RECORDS */

$sql = "SELECT * FROM tbl_disease";

$result = $dbc->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Disease Table</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Disease Records</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>Cow ID</th>
        <th>Disease Name</th>
        <th>Symptoms</th>
        <th>Diagnosis Date</th>
        <th>Treatment</th>
        <th>Store Date</th>
        <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>

    <tr>

        <td><?= $row['Cow_id'] ?></td>

        <td><?= $row['D_Name'] ?></td>

        <td><?= $row['Symptoms'] ?></td>

        <td><?= $row['Dignosis_Date'] ?></td>

        <td><?= $row['Treatment'] ?></td>

        <td><?= $row['Store_DATE'] ?></td>

        <td>

            <a href="?delete=<?= $row['Cow_id'] ?>"
               onclick="return confirm('Are you sure to delete this record?')">

               Delete

            </a>

        </td>

    </tr>

    <?php endwhile ?>

</table>

</body>
</html>