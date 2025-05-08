<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip"; // ✅ Your database name

    // Connect to MySQL
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get POST data
    $name = $_POST['name'];
    $rno = $_POST['rno'];
    $ph = $_POST['ph'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dse = $_POST['dse'];

    // ✅ FIXED the SQL syntax (removed wrong backticks and quotes)
    $sql = "INSERT INTO travel (name, rno, ph, age, gender, other, dt) 
            VALUES ('$name', '$rno', '$ph', '$age', '$gender', '$dse', current_timestamp());";

    // Optional: for debugging
    // echo $sql;

    // Run the query
    if ($con->query($sql) === true) {
        // echo "Successfully Inserted";

        $insert = true;
    } else {
        echo "ERROR: $sql <br> " . $con->error;
    }

    // Close connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Form filling Activity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="travel.png" alt="Travel">
    <div class="container">
        <h1>Fill The Industry visit Form </h1>
        <p>Entre ur details with the payment</p>
        <?php
        if($insert == true){
       echo "<p style = 'color: green'>Thank u for joining to the group </p>";
        
        }
        ?>

<center>

        <form action="index.php" method="post">
         
            <input type="text" placeholder="Enter ur Name : " name="name" id="name" required>
            <input type="text" placeholder="Enter ur Rollno. : " name="rno" id="rno" required>
            <input type="number" placeholder="Enter ur phone Number : " name="ph" id="ph" required>
            <input type="number" placeholder="Enter ur Age: " name="age" id="age" required>
            <input type="text" placeholder="Enter ur Gender : " name="gender" id="gender" required>

            <textarea type="text" name="dse" id="dse" placeholder="Enter Other info." cols="20" rows="10">
                </textarea>
                <button class="btn">Submit</button>
                <button class="btn">Reset</button>
        </form>
    </center>
    </div>
    <script src="index.js"></script>


   
</body>
</html>