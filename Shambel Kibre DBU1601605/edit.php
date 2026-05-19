<?php
require 'db.php';



if (isset($_POST['update'])) {

    $id = $_POST['Cow_id'];
    $name = $_POST['D_Name'];
    $symptoms = $_POST['Symptoms'];
    $date = $_POST['Dignosis_Date'];
    $treatment = $_POST['Treatment'];
    $store = $_POST['Store_DATE'];

    $sql = "UPDATE tbl_disease SET
            D_Name='$name',
            Symptoms='$symptoms',
            Dignosis_Date='$date',
            Treatment='$treatment',
            Store_DATE='$store'
            WHERE Cow_id=$id";

    if ($dbc->query($sql) === TRUE) {

        echo "
        <script>
            alert('Disease record updated successfully');
            window.location.href='edit.php';
        </script>
        ";

    } else {
        echo "Error updating record: " . $dbc->error;
    }

    exit;
}




$editRow = null;

if (isset($_GET['edit'])) {

    $id = $_GET['edit'];

    $sql = "SELECT * FROM tbl_disease WHERE Cow_id=$id";

    $result = $dbc->query($sql);

    $editRow = $result->fetch_assoc();
}




$sql = "SELECT * FROM tbl_disease";
$result = $dbc->query($sql);

?>



<!DOCTYPE html>
<html>
<head>
    <title>Edit Disease Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Page</h2>



<?php if ($editRow): ?>

<form method="POST">

    <input type="hidden" name="Cow_id" value="<?= $editRow['Cow_id'] ?>">

    <input type="text" name="D_Name" value="<?= $editRow['D_Name'] ?>" required><br><br>

    <textarea name="Symptoms" required><?= $editRow['Symptoms'] ?></textarea><br><br>

    <input type="datetime-local" name="Dignosis_Date" required><br><br>

    <textarea name="Treatment" required><?= $editRow['Treatment'] ?></textarea><br><br>

    <input type="datetime-local" name="Store_DATE" required><br><br>

    <button type="submit" name="update">Update Disease</button>

</form>

<hr>

<?php endif; ?>




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
            <a href="?edit=<?= $row['Cow_id'] ?>">
                Edit
            </a>
        </td>

    </tr>

    <?php endwhile ?>

</table>

</body>
</html>