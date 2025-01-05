<?php

// 1. array_keys(): Returns all the keys of an array
$student = ["name" => "Alice", "age" => 20, "grade" => "A"];
$keys = array_keys($student);
echo "1. array_keys(): The keys are: ";
print_r($keys);
echo "<br><br>";

// 2. array_values(): Returns all the values of an array
$values = array_values($student);
echo "2. array_values(): The values are: ";
print_r($values);
echo "<br><br>";

// 3. array_flip(): Exchanges all keys with their associated values
$flipped = array_flip($student);
echo "3. array_flip(): Flipped array (keys become values, and values become keys): ";
print_r($flipped);
echo "<br><br>";

// 4. array_intersect_key(): Computes the intersection of arrays using keys
$array1 = ["a" => "Apple", "b" => "Banana", "c" => "Cherry"];
$array2 = ["b" => "Berry", "c" => "Citrus", "d" => "Date"];
$intersection = array_intersect_key($array1, $array2);
echo "4. array_intersect_key(): Intersection of arrays by keys: ";
print_r($intersection);
echo "<br><br>";

// 5. array_diff_key(): Compares the keys of two or more arrays
$diffKeys = array_diff_key($array1, $array2);
echo "5. array_diff_key(): Keys in array1 not present in array2: ";
print_r($diffKeys);
echo "<br><br>";

?>
