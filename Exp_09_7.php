<?php
// 1. array_count_values(): Counts all the values in an array
$array1 = ["apple", "banana", "apple", "orange", "banana", "banana"];
$valueCount = array_count_values($array1);
echo "1. array_count_values(): ";
print_r($valueCount);
echo "<br><br>";

// 2. count(): Counts all elements in an array
$array2 = [1, 2, 3, 4, 5, 6];
$totalCount = count($array2);
echo "2. count(): ";
echo $totalCount;
echo "<br><br>";
?>
