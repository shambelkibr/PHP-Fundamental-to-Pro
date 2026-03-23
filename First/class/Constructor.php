<?php
class Student{
    public $name;
    public $id;

    function __construct($name,$id){
        $this->name=$name;
        $this->id=$id;
    }

    function displayInfo(){
        echo "name is {$this->name} and id is {$this->id}";
    }

   
}

 $student1= new Student("shanbel","Dbu1601605");
    $student1->displayInfo();


?>