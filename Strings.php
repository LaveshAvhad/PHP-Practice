<?php

    // uc words first letter start with Upper case 
    // strlen()
    // strtoupper()
    // strtoLpper()
    // strrev()
    // str_word_count()
    // strpos()
    // str_replace()
    // substr()
    // strcmp()    

    $str="My Name is SHRIRAM";

    echo strtolower($str);echo"<br>";
    echo strtoupper($str);echo"<br>";

    echo ucwords($str);echo"<br>";
    echo strlen($str);echo"<br>";

    echo strrev( $str);echo"<br>";
    echo str_word_count($str);echo"<br>";

    echo strpos($str,"SHRIRAM");echo"<br>";
    echo str_replace("SHRIRAM","RAM",$str);echo"<br>";

    echo substr($str,3,8);echo"<br>";    
?>