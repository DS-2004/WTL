<?php
class Student {
    public function speak() {
        echo "Student says: I need to study.<br>";
    }
}

class Teacher {
    public function speak() {
        echo "Teacher says: Time to teach.<br>";
    }
}

// Polymorphic function
function saySomething($person) {
    $person->speak();
}

// Using different classes with same method
$stu = new Student();
$teach = new Teacher();

saySomething($stu);     
saySomething($teach);   
?>
