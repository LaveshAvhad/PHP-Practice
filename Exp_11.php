<?php 
// Function to check division 
function divide($num1, $num2) { 
if ($num2 == 0) { 
throw new Exception("Error: Cannot divide by zero."); 
} 
return $num1 / $num2; 
} 
try { 
// Attempt valid division 
echo "10 ÷ 2 = " . divide(10, 2) . "<br>"; 
// Attempt division by zero 
echo "10 ÷ 0 = " . divide(10, 0) . "<br>"; 
} catch (Exception $e) { 
// Handle the exception 
echo "Caught Exception: " . $e->getMessage() . "<br>"; 
}