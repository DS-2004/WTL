<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
     strong{
        background-color:pink;
        font-size: 40px;
        font-weight: bold;
        color: darkgreen;
     }

.value {
    font-weight:bold;
    color:brown;
    font-size: 40px;
  /* font-style: italic; */

}


    </style>
</head>
<body>
    
<?php
$name = "Diksha Sambrekar";
$rno = "32";
$Clg = "DYP";
$Project = "Artist Website";
$email = "ds@gmail.com";
$ph = "8745321221";

echo "<strong >Name : </strong> <span class='value'>$name</span> <br>";
echo "<strong>Roll No : </strong> <span class='value'> $rno </span><br>";
echo "<strong>College : </strong><span class='value'> $Clg </span><br>";
echo "<strong>Project : </strong><span class='value'> $Project </span><br>";
echo "<strong>Email Address : </strong><span class='value'> $email </span><br>";
echo "<strong>Phone Number : </strong><span class='value'> $ph </span><br>";

?>
</body>
</html>
