<?php
class Student {
    public $name;

    function __construct($name) {
        $this->name = $name;
        echo "Constructor called for {$this->name}<br>";
    }

    function __destruct() {
        echo "Destructor called for {$this->name}<br>";
    }
}

$s1 = new Student("Shambel");
?>