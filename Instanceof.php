<?php
    class Developer{}
    class Programmer{}

    $shriram=new Developer();
    if($shriram instanceof Developer)
    {
        echo"Shriram is Developer";
    }
    else
    {
        echo "Shriram is Programmer";
    }
    echo"</br>";
    var_dump($shriram instanceof Developer);// it returns true
    var_dump($shriram instanceof Programmer);// it returns false
?>
