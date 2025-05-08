<?php
echo "Count the number of elemnts <br>";  
$myArray = array("apple", "banana", "cherry");  
$count = count($myArray);            
echo "Number of elements in myArray: " . $count;


// check if variable is an array


$v = array("apple", "banana", "cherry");
$v1 = "hello";

echo "<br> Is V an array? <br> " . (is_array($v) ? "Yes" : "No") . "<br>";
echo " <br> Is V1 an array? <br> " . (is_array($v1) ? "Yes" : "No");
echo "<br>";

//elements pushed at the last

$fruits = array("apple", "banana");
array_push($fruits, "orange", "grape");
print_r($fruits);

?>


