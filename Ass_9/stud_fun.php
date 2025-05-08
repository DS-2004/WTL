<?php


function cal_marks($name, $marks) {
    $total = array_sum($marks);
    $percentage = $total / count($marks);

    echo "Student: $name <br>";
    echo "Total Marks: $total <br>";
    echo "Percentage: $percentage% <br>";

   
    if ($percentage >= 90) {
        echo "Grade: A+";
    } elseif ($percentage >= 75) {
        echo "Grade: A";
    } elseif ($percentage >= 60) {
        echo "Grade: B";
    } elseif ($percentage >= 50) {
        echo "Grade: C";
    } else {
        echo "Grade: Fail";
    }
}


$studName = "Diksha";
$marksArray = [85, 90, 78, 92, 88];

cal_marks($studName, $marksArray);
?>
