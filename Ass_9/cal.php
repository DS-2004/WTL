<?php

//  Basic Calculations 

echo "<h2>Basic Calculations</h2>";

$n1 = 10;
$n2 = 5;
$n3 = 8;


$sum = $n1 + $n2 + $n3;
echo "Sum of $n1, $n2, and $n3: " . $sum . "<br>";


$difference = $n1 - $n3;
echo "Difference of $n1 and $n3: " . $difference . "<br>";


$product = $n1 * $n2;
echo "Product of $1 and $2: " . $product . "<br>";


$quotient = $n1 / $n2;
echo "Quotient of $n1 divided by $n2: " . $quotient . "<br>";


$remainder = $n1 % $n2;
echo "Remainder of $n1 divided by $n2: " . $remainder . "<br><br>";

//  Factorial -



echo "<h2>Factorial </h2>";

$num = 5; 

if ($num < 0) {
    echo "Factorial is not defined for negative numbers.";
} elseif ($num == 0) {
    echo "Factorial of 0 is 1.";
} else {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "Factorial of " . $num . " is: " . $factorial;
}



//  Finding the Greatest Number 

echo "<h2>Finding the Greatest Number</h2>";

$a = 25;
$b = 15;
$c = 30;

if ($a > $b && $a > $c) {
    $greatest = $a;
} elseif ($b > $a && $b > $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

echo "The greatest number among $a, $b, and $c is: " . $greatest . "<br><br>";

//  Conditional Statements

echo "<h2>Conditional Statements</h2>";

$age = 18;

// if statement
if ($age >= 18) {
    echo "You are eligible to vote.<br>";
}

$grade = 75;

// if-else statement
if ($grade >= 60) {
    echo "You passed!<br>";
} else {
    echo "You failed.<br>";
}

$temperature = 25;

// if-elseif-else statement
if ($temperature > 30) {
    echo "It's hot!<br>";
} elseif ($temperature > 20) {
    echo "It's warm.<br>";
} else {
    echo "It's cool.<br>";
}

$day = "Wednesday";

// switch statement
switch ($day) {
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday.<br>";
        break;
    case "Thursday":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is Friday.<br>";
        break;
    default:
        echo "It's the weekend!<br>";
}

?>