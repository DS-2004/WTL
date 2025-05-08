<?php

// Push: Add item to end
function my_push(&$arr, $item) {
    $arr[count($arr)] = $item;
}

// Pop: Remove last item
function my_pop(&$arr) {
    $last = $arr[count($arr) - 1];
    unset($arr[count($arr) - 1]);
    return $last;
}

// Shift: Remove first item
function my_shift(&$arr) {
    $first = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $arr[$i - 1] = $arr[$i];
    }
    unset($arr[count($arr) - 1]);
    return $first;
}

// Unshift: Add item to beginning
function my_unshift(&$arr, $item) {
    for ($i = count($arr); $i > 0; $i--) {
        $arr[$i] = $arr[$i - 1];
    }
    $arr[0] = $item;
}

// IndexOf: Find index of a value
function my_indexOf($arr, $value) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $value) {
            return $i;
        }
    }
    return -1;
}

// Slice: Return part of array
function my_slice($arr, $start, $end) {
    $result = [];
    for ($i = $start; $i < $end; $i++) {
        if (isset($arr[$i])) {
            $result[] = $arr[$i];
        }
    }
    return $result;
}

// Reverse: Reverse the array
function my_reverse(&$arr) {
    $newArr = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $newArr[] = $arr[$i];
    }
    $arr = $newArr;
}

// DEMO
$arr = [10, 20, 30];
echo "<strong>Original: </strong>";
print_r($arr);
echo "<br/>";

my_push($arr, 40);
echo "<strong>After Push 40: </strong>";
print_r($arr);
echo "<br/>";

$last = my_pop($arr);
echo "<strong>After Pop ($last removed): </strong>";
print_r($arr);
echo "<br/>";

$first = my_shift($arr);
echo "<strong>After Shift ($first removed): </strong>";
print_r($arr);
echo "<br/>";

my_unshift($arr, 5);
echo "<strong>After Unshift 5: </strong>";
print_r($arr);
echo "<br/>";

$index = my_indexOf($arr, 30);
echo "<strong>Index of 30: $index\n</strong>";
echo "<br/>";

$slice = my_slice($arr, 1, 3);
echo "Slice [1,3): ";
print_r($slice);
echo "<br/>";

my_reverse($arr);
echo "<strong>Reversed: </strong>";
print_r($arr);
echo "<br/>";

?>
