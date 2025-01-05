<?php
    /* PHP Data Types
    String
    Integer
    Boolean
    Float
    Array 
    Null
    Object
    */
    // String - Sequence of characters
    $name = "Shriram";
    $friend = "Bhagyesh";
    echo "$name ka Friend $friend";

    // Integer - Non Decimal Numbers
    $income = 100000;
    $debits = -500;
    echo "<br>";
    echo "$income";
    echo "<br>";
    echo "$debits";

    // Float - Decimal Point Numbers
    $income = 10.0;
    $debits = 50.00;
    echo "<br>";
    echo "$income";
    echo "<br>";
    echo "$debits";
    echo "<br>";

    // Boolean - Can be either true or false 
    $x = true;
    $is_friend = false;
    echo var_dump($x);
    echo "<br>"; // missing semicolon fixed
    echo var_dump($is_friend);
    echo "<br>";

    // Array - Used to store multiple values in a single variable 
    $friends = array("Shriram", "Bhagyesh", "Shrutik", "Gaurav");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];   
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    echo $friends[3];
    echo "<br>";

    // This will throw an error because the array size is 4 (index 0-3), no index 4 exists
    // echo $friends[4]; // Uncommenting this will cause an error. 
    
?>
