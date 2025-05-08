<?php

abstract class Person {
    public $name;

  
    abstract public function getRole();

    public function sayHello() {
        echo "Hello, my name is $this->name.<br>";
    }
}

// Student class extends abstract class
class Student extends Person {
    public function getRole() {
        return "I am a student.<br>";
    }
}

// Using the class
$student = new Student();
$student->name = "Alice";
$student->sayHello();
echo $student->getRole();
?>
