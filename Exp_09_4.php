<?php

// 1. sort(): Sorts an array in ascending order
$numbers = [4, 2, 8, 5, 1];
sort($numbers);
echo "1. sort(): Sorted in ascending order: ";
print_r($numbers);
echo "<br><br>";

// 2. rsort(): Sorts an array in descending order
$numbers = [4, 2, 8, 5, 1];
rsort($numbers);
echo "2. rsort(): Sorted in descending order: ";
print_r($numbers);
echo "<br><br>";

// 3. asort(): Sorts an associative array in ascending order by value
$students = ["Alice" => 20, "Bob" => 18, "Charlie" => 22];
asort($students);
echo "3. asort(): Sorted by value (ascending): ";
print_r($students);
echo "<br><br>";

// 4. arsort(): Sorts an associative array in descending order by value
arsort($students);
echo "4. arsort(): Sorted by value (descending): ";
print_r($students);
echo "<br><br>";

// 5. ksort(): Sorts an array by key in ascending order
$fruits = ["b" => "Banana", "a" => "Apple", "c" => "Cherry"];
ksort($fruits);
echo "5. ksort(): Sorted by key (ascending): ";
print_r($fruits);
echo "<br><br>";

// 6. krsort(): Sorts an array by key in descending order
krsort($fruits);
echo "6. krsort(): Sorted by key (descending): ";
print_r($fruits);
echo "<br><br>";

// 7. usort(): Sorts an array by a user-defined comparison function
$numbers = [4, 2, 8, 5, 1];
usort($numbers, function ($a, $b) {
    return $a - $b; // Ascending order
});
echo "7. usort(): Sorted with user-defined comparison (ascending): ";
print_r($numbers);
echo "<br><br>";

// 8. uksort(): Sorts an array by key using a user-defined comparison function
$fruits = ["b" => "Banana", "a" => "Apple", "c" => "Cherry"];
uksort($fruits, function ($a, $b) {
    return strcmp($a, $b); // Ascending order by key
});
echo "8. uksort(): Sorted by key with user-defined comparison: ";
print_r($fruits);
echo "<br><br>";

// 9. uasort(): Sorts an array with a user-defined comparison function, maintaining index association
$students = ["Alice" => 20, "Bob" => 18, "Charlie" => 22];
uasort($students, function ($a, $b) {
    return $a - $b; // Ascending order by value
});
echo "9. uasort(): Sorted by value (ascending) with user-defined comparison: ";
print_r($students);
echo "<br><br>";

?>
