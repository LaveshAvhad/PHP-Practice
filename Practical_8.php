<!-- 1. Using isset()  -->
<?php 
 $var1 = "Hello, World!"; 
 $var2 = null; 
 
 echo isset($var1) ? "var1 is set.<br>" : "var1 is not set.<br>"; 
 echo isset($var2) ? "var2 is set.<br>" : "var2 is not set.<br>"; 
?> 
 
<!--  
2. Using unset()  -->
<?php 
 $var = "Hello, World!"; 
 
 echo isset($var) ? "Before unset: var is set.<br>" : "Before unset: var is not set.<br>"; 
 unset($var); 
 echo isset($var) ? "After unset: var is set.<br>" : "After unset: var is not set.<br>"; 
?> 
 
<!-- 3. Using empty()  -->
<?php 
 $var1 = ""; 
 $var2 = "PHP"; 
 $var3 = 0; 
 
 echo empty($var1) ? "var1 is empty.<br>" : "var1 is not empty.<br>"; 
 echo empty($var2) ? "var2 is empty.<br>" : "var2 is not empty.<br>"; 
 echo empty($var3) ? "var3 is empty.<br>" : "var3 is not empty.<br>"; 
?> 
<!--  
4. Using gettype()  -->
<?php 
 $var1 = 42; 
 $var2 = "PHP"; 
 $var3 = true; 
 
 echo "The type of var1 is: " . gettype($var1) . "<br>"; 
 echo "The type of var2 is: " . gettype($var2) . "<br>"; 
 echo "The type of var3 is: " . gettype($var3) . "<br>"; 
?> 
 
 
<!-- 5. Using settype()  -->
<?php 
 $var = "123"; // Initially a string 
 echo "Before settype(): Type of var is: " . gettype($var) . "<br>"; 
 
 settype($var, "integer"); // Change type to integer 
 echo "After settype(): Type of var is: " . gettype($var) . "<br>"; 
?> 
 
 
<!-- 6. Using Variable Functions  -->
<?php 
 function greet() { 
      echo "Hello, welcome to PHP variable functions!<br>"; 
 } 
 
 $functionName = "greet"; 
 $functionName(); // Dynamically calls the greet() function 
?> 