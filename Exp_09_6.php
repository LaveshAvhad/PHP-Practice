<?php 
// 1. array_intersect(): Computes the intersection of arrays 
$array1 = [1, 2, 3, 4, 5]; 
$array2 = [3, 4, 5, 6, 7]; 
$intersection = array_intersect($array1, $array2); 
echo "1. array_intersect(): "; 
print_r($intersection); 
echo "<br><br>";

// 2. array_intersect_assoc(): Computes the intersection of arrays with additional index check 
$array3 = ["a" => 1, "b" => 2, "c" => 3]; 
$array4 = ["a" => 1, "b" => 3, "c" => 2]; 
$intersectionAssoc = array_intersect_assoc($array3, $array4); 
echo "2. array_intersect_assoc(): "; 
print_r($intersectionAssoc); 
echo "<br><br>";

// 3. array_diff(): Computes the difference of arrays 
$array5 = [1, 2, 3, 4, 5]; 
$array6 = [4, 5, 6, 7]; 
$diff = array_diff($array5, $array6); 
echo "3. array_diff(): "; 
print_r($diff); 
echo "<br><br>";

// 4. array_diff_assoc(): Computes the difference of arrays with additional index check 
$array7 = ["a" => 1, "b" => 2, "c" => 3]; 
$array8 = ["a" => 1, "b" => 3, "d" => 4]; 
$diffAssoc = array_diff_assoc($array7, $array8); 
echo "4. array_diff_assoc(): "; 
print_r($diffAssoc); 
echo "<br><br>";

// 5. array_udiff(): Computes array differences using a callback function 
$array9 = [1, 2, 3, 4, 5];
$array10 = [4, 5, 6, 7];
$udiff = array_udiff($array9, $array10, function($a, $b) {
    return $a - $b;
});
echo "5. array_udiff(): ";
print_r($udiff);
echo "<br><br>";
?>
