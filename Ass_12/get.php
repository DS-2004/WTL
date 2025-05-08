<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <form action="get.php" method="GET">
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
if (isset($_GET['name']) && isset($_GET['rno']) && isset($_GET['age']) && isset($_GET['clg']) && isset($_GET['prj'])) {
    $name = $_GET['name'];
    $rno = $_GET['rno'];
    $age = $_GET['age'];
    $clg = $_GET['clg'];
    $prj = $_GET['prj'];

    echo "<h2>Form Submit !!!</h2>";
    echo "<strong class='label'>Name: </strong><span class='value'>$name</span><br>";
    echo "<strong class='label'>Roll No: </strong><span class='value'>$rno</span><br>";
    echo "<strong class='label'>Age: </strong><span class='value'>$age</span><br>";
    echo "<strong class='label'>College: </strong><span class='value'>$clg</span><br>";
    echo "<strong class='label'>Project: </strong><span class='value'>$prj</span><br>";
} else {
    echo "No data received.";
}
?>





