<?php


interface School {
    public function Student();
}

// Implementing the interface in a class
class Classroom implements School {
    public function Student() {
        echo "There are 300 Students in School. <br/>";
    }
}

// Another class implementing the same interface
class Division implements School {
    public function Student() {
        echo "In School, There are overall 5 Divisions. <br/>";
    }
}

// Using the classes
$ob1 = new Classroom();
$ob1->Student(); 

$ob2 = new Division();
$ob2->Student(); 

?>
