<?php
// 1. array_reverse(): Returns an array with elements in reverse order
$array1 = ["apple", "banana", "cherry"];
$reversed = array_reverse($array1);
echo "1. array_reverse(): ";
print_r($reversed);
echo "<br><br>";

// 2. array_rand(): Picks one or more random keys from an array
$array2 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$randomKey = array_rand($array2);
echo "2. array_rand(): Random key - " . $randomKey . " => " . $array2[$randomKey] . "<br><br>";

// 3. array_unique(): Removes duplicate values from an array
$array3 = [1, 2, 2, 3, 3, 4];
$uniqueValues = array_unique($array3);
echo "3. array_unique(): ";
print_r($uniqueValues);
echo "<br><br>";

// 4. array_sum(): Returns the sum of all values in an array
$array4 = [1, 2, 3, 4, 5];
$sum = array_sum($array4);
echo "4. array_sum(): " . $sum . "<br><br>";

// 5. array_product(): Returns the product of all values in an array
$array5 = [1, 2, 3, 4];
$product = array_product($array5);
echo "5. array_product(): " . $product . "<br><br>";

// 6. array_reduce(): Iteratively reduces an array to a single value using a callback function
$array6 = [1, 2, 3, 4];
$sumReduce = array_reduce($array6, function($carry, $item) {
    return $carry + $item;
});
echo "6. array_reduce(): " . $sumReduce . "<br><br>";

// 7. array_combine(): Combines two arrays to form a key-value pair array
$keys = ["a", "b", "c"];
$values = ["apple", "banana", "cherry"];
$combined = array_combine($keys, $values);
echo "7. array_combine(): ";
print_r($combined);
echo "<br><br>";
?>
