<?php
class Student{
    public $name;
    public $age;


    function learn(){
        echo "I learn I T";
    }    

}

$student1=new Student();
$student1->learn();

?>