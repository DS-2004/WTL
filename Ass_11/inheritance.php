
<!DOCTYPE html>
<html>
<head>
    <title>Inheritance Example</title>
</head>
<body>

<form method="get">
    Enter the name of school: <input type="text" name="schoolName" required>
    <input type="submit" value="Submit">
</form>

<?php
class Student {
    public $name;
    function stud(){
        echo "<br>Inside Student class<br>";
    }
}

class Classroom extends Student {
    function school($nm){
        echo "Name of the school: $nm<br>";
    }
}

class Div extends Classroom {
    function divi(){
        echo "Hello from Div class<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['schoolName'];
    
    $ob = new Div();
    $ob->stud();
    $ob->school($name);
    $ob->divi();
}


</body>
</html>


?>





<!-- 
// class Person {
//     public function sayHello() {
//         echo "Hello, I am a person.<br>";
//     }
// }


// class Student extends Person {
//     public function sayStudent() {
//         echo "I am a student.<br>";
//     }
// }


// $student = new Student();
// $student->sayHello();    
// $student->sayStudent();   -->