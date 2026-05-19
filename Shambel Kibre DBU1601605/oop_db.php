<?php

class Database {

    private $host = "127.0.0.1";
    private $user = "shanbelkibre";
    private $pass = "Sha2025db@";
    private $dbname = "db_cow";

    public $conn;

    public function connect() {

        $this->conn = new mysqli($this->host,$this->user,   $this->pass, $this->dbname );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "connection is succesfully";
        return $this->conn;
    }
}


?>