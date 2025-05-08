<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <form action="display.php" method="POST">
        <h1>Registration Form</h1>
<input type="text" name="name" placeholder="Enter Ur name ">  <br>
<input type="text" name="rno" placeholder="Enter Ur Roll No. ">  <br>
<input type="text" name="age" placeholder="Enter Ur Age "> <br>
<input type="text" name="clg" placeholder="Enter Ur College name ">  <br>
<input type="text" name="prj" placeholder="Enter Ur Project Title ">  <br>
<button>Submit</button>

</form>
</body>
</html>



<?php



$backgroundColor = "#FFC0CB"; 
$textColor = "black"; 

echo "<body style='background-color: " . $backgroundColor . "; color: " . $textColor . ";'>";

echo "<h1>Your Details</h1>";
echo "<p><strong>Name:</strong> " .$_POST['name']. "</p>";
echo "<p><strong>Roll Number:</strong> " . $_POST['rno']. "</p>";
echo "<p><strong>Age:</strong> "  .$_POST['age'].  "</p>";
echo "<p><strong>College:</strong> " .$_POST['clg']. "</p>";
echo "<p><strong>Project:</strong> " . $_POST['prj']. "</p>";

?>

