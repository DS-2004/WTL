
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit</title>
</head>
<body>
    <form  action = "fruit.php" method="Get">
    <h1>Display The Fruit Color: </h1>
     <input type="text" name="name" placeholder ="Enter the Fruit ">
     <input type="text" name="color" placeholder ="Enter the Color of Fruit ">
      <button>Submit</button>
</form>
</body>
</html>



<?php

function fruit($nam, $colo){

    echo "<strong> Name of Fruit =</strong> $nam  <br>";
    echo "Color of Fruit = $colo ";
}

if (isset($_GET['name']) && isset($_GET['color'])){

$fruit = $_GET['name'];
$col = $_GET['color'];
fruit($fruit,$col);
}

?>