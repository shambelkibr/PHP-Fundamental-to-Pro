<?php
require 'db.php';

$sql = "SELECT * FROM tbl_disease";

$result = $dbc->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Disease Table</title>
</head>

<h2>Disease Records</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>Cow ID</th>
        <th>Disease Name</th>
        <th>Symptoms</th>
        <th>Diagnosis Date</th>
        <th>Treatment</th>
        <th>Store Date</th>
      
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>

    <tr>
        <td><?= $row['Cow_id'] ?></td>
        <td><?= $row['D_Name'] ?></td>
        <td><?= $row['Symptoms'] ?></td>
        <td><?= $row['Dignosis_Date'] ?></td>
        <td><?= $row['Treatment'] ?></td>
        <td><?= $row['Store_DATE'] ?></td>
       
        
    </tr>

    <?php endwhile ?>

</table>


</html>