<?php 
 $var = "Hello, World!"; 
 
 echo isset($var) ? "Before unset: var is set.<br>" : "Before unset: var is not set.<br>"; 
 unset($var); 
 echo isset($var) ? "After unset: var is set.<br>" : "After unset: var is not set.<br>"; 
?>