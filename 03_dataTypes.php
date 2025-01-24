<?php
    // data types in php
    // 1. String
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object
    // 7. NULL

    
    // string - sequence of characters
    $name = "sagar";
    $name1 = 'sagar';
    echo "$name <br>";

    
    // integer - non decimal number
    $age = 25;
    echo "$age <br>";
    // range of integer is negative 2^31 to positive 2^31 - 1


    // float - decimal number
    $height = 5.9;
    echo "$height <br>";


    // boolean - true or false
    $isMale = true;
    $isFemale = false;
    // vardump function is used to get the data type of a variable
    echo var_dump($isMale)."<br>";


    // object - instance of a class
    // object is an instance of a class


    // array - collection of data
    $fruits = array("apple", "banana", "mango");
    echo var_dump($fruits)."<br>";


    // NULL - no value
    $name = NULL;
    echo var_dump($name);
?>