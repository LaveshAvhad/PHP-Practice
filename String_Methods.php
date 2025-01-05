<?php
$name = "Shriram";
echo $name;
echo "<br>";

echo "The length of my string is" . strlen($name); // returns the length of string
echo "<br>";

echo "The count of my string is" . str_word_count($name); // count the words in string
echo "<br>";

echo "String reverse" . " " . strrev($name); // reverse the string
echo "<br>";

echo "String replace with " . str_replace("Shriram", "Lahane", $name); // replace the string
echo "<br>";

echo "String Repeat" . " " . str_repeat($name, 2); // Repeat the string and the number 2 specify how many times string is repeated
echo "<br>";

echo "<pre>";
echo rtrim("   Shriram Lahane"); // removes trailing spaces
echo ltrim("Lahane Shriram"); // removes leading spaces
echo "</pre>";

?>

<!-- 
Shriram
The length of my string is7
The count of my string is1
String reverse mairhS
String replace with Lahane
String Repeat ShriramShriram
Shriram LahaneLahane Shriram -->