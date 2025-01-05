<?php
    $marks=90;
    if($marks>85)
    {
        echo "Student is pass with first class";
    }
    else if ($marks<75)
    {
        echo "Student is pass with second class";
    }
    else if ($marks>45)
    {
        echo"Student is pass only";
    }
    else if( $marks> 40)
    {
        echo "Student is fail";
    }
    else
    {
        echo "Invalid Input ";
    }
?>