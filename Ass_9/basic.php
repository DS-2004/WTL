<?php
// continue = if we want to skip any number we need to use it and if we echo fist then it will not aply the if condition
for ($i=0; $i < 10; $i++) { 

    if($i==3 || $i== 7){
        continue;
      }
    echo $i;
    echo "<br>";

 
}

// break = if we want only till specific need we have to break this with if statement

$user_need = 5;
for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo "<br>";
    if($i == $user_need){
        break;
      }
   

 
}


?>


<!DOCTYPE html>
<html>
<head>
  <style>
    .username {
      color: darkgreen;
      font-size: 18px;
    }
  </style>
</head>
<body>

<?php
$name = "John Doe";
echo "<p class='username'>$name</p>";
?>

</body>
</html>
