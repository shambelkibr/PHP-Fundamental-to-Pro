<?php

require 'db.php';



$cow_id = $_POST['Cow_id'];

$d_name = $_POST['D_Name'];

$symptoms = $_POST['Symptoms'];

$diagnosis_date = $_POST['Dignosis_Date'];

$treatment = $_POST['Treatment'];

$store_date = $_POST['Store_DATE'];




$sql = "INSERT INTO tbl_disease
(
    Cow_id,
    D_Name,
    Symptoms,
    Dignosis_Date,
    Treatment,
    Store_DATE
)

VALUES
(
    '$cow_id',
    '$d_name',
    '$symptoms',
    '$diagnosis_date',
    '$treatment',
    '$store_date'
)";




if ($dbc->query($sql) === TRUE) {

    echo "Disease record saved successfully.";

} else {

    echo "Error: " . $dbc->error;
}

?>