<?php

// Splice function for removing array elements
$students = array (array(501, "Hari", 45),  
                   array(502, "Ram", 65),  
                   array(503, "Shriram", 98)
);

for($i = 0; $i < 3; $i++) 
{
    for($j = 1; $j < 3; $j++) 
    {
        echo $students[$i][$j] . " ";
    }
    echo "<br>";
}

?>
