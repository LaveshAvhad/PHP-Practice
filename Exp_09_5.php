<?php

// 1. array_map(): Applies a callback to the elements of an array
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($num) {
    return $num * $num; // Square each number
}, $numbers);

echo "1. array_map(): Squared values: ";
print_r($squared);
echo "<br><br>";

// 2. array_walk(): Applies a callback function to the elements of an array
$fruits = ["apple", "banana", "cherry"];
array_walk($fruits, function(&$fruit) {
    $fruit = strtoupper($fruit); // Convert all fruit names to uppercase
});

echo "2. array_walk(): Uppercase fruit names: ";
print_r($fruits);
echo "<br><br>";

// 3. array_walk_recursive(): Applies a callback function to the elements of a multi-dimensional array
$nestedArray = [
    "fruits" => ["apple", "banana", "cherry"],
    "vegetables" => ["carrot", "lettuce", "potato"]
];
array_walk_recursive($nestedArray, function(&$item) {
    $item = ucfirst($item); // Capitalize each item in the multi-dimensional array
});

echo "3. array_walk_recursive(): Capitalized values in nested array: ";
print_r($nestedArray);
echo "<br><br>";

?>
