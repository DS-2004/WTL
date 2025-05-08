<?php

class Student{
    
function Stud($name,$rno , $div, $age){
echo "Name : $name <br/>";
echo "Roll No : $rno <br/>";
echo "Div :$div <br/>";
echo "Age :$age <br/>";


}
}
$name = "Diksha";
    $rno = 34;
    $div= "C";
    $age= 21;

$ob = new Student();
$ob->Stud($name,$rno , $div, $age);


?>




<?php

class Stud {
    function display($name, $rno, $div, $age) {
        echo "<h2>Student Details:</h2>";
        echo "Name: $name <br>";
        echo "Roll No: $rno <br>";
        echo "Division: $div <br>";
        echo "Age: $age <br>";
    }
}
?>


<h1>Enter Student Info</h1>
<form method="GET">
    Name: <input type="text" name="name"><br>
    Roll No: <input type="text" name="rno"><br>
    Division: <input type="text" name="div"><br>
    Age: <input type="text" name="age"><br>
    <button type="submit">Submit</button>
</form>

<?php

if (isset($_GET['name']) && isset($_GET['rno']) && isset($_GET['div']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $rno = $_GET['rno'];
    $div = $_GET['div'];
    $age = $_GET['age'];

    $stu = new Stud();
    $stu->display($name, $rno, $div, $age);
}
?>
