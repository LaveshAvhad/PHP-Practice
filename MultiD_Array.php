<?php

    $emp=array (
                 array(1, "Shriram", 500),
                 array(2, "Sita", 600),
                 array(3, "Laxman", 700)
    );

    for($row=0;$row<3;$row++)
    {
        for($col= 0;$col< 3;$col++)
        {
            echo $emp[$row][$col];
        }
        echo"<br>";
    }
?>