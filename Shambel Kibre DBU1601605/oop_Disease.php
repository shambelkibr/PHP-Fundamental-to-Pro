<?php

require 'oop_db.php';

class Disease {

    private $conn;
    public function __construct() {

        $db = new Database();
        $this->conn = $db->connect();
    }

    
    public function create($cow_id, $name, $symptoms, $date, $treatment, $store_date) {

        $sql = "INSERT INTO tbl_disease
        (Cow_id, D_Name, Symptoms, Dignosis_Date, Treatment, Store_DATE)
        VALUES
        ('$cow_id', '$name', '$symptoms', '$date', '$treatment', '$store_date')";

        return $this->conn->query($sql);
    }

  
    public function update($id, $name, $symptoms, $date, $treatment, $store_date) {

        $sql = "UPDATE tbl_disease SET
        D_Name='$name',
        Symptoms='$symptoms',
        Dignosis_Date='$date',
        Treatment='$treatment',
        Store_DATE='$store_date'
        WHERE Cow_id=$id";

        return $this->conn->query($sql);
    }

   
    public function delete($id) {

        $sql = "DELETE FROM tbl_disease WHERE Cow_id=$id";

        return $this->conn->query($sql);
    }

    
    public function getAll() {

        $sql = "SELECT * FROM tbl_disease";

        return $this->conn->query($sql);
    }

    public function getById($id) {

        $sql = "SELECT * FROM tbl_disease WHERE Cow_id=$id";

        return $this->conn->query($sql);
    }
}
?>