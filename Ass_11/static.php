<?php
class Student{
public static $clg = "DYP" ;

public static function showCollege() {
    echo "College Name: " . self::$clg;
}
}
echo Student::$clg . "<br>";  
Student::showCollege();  


?>

