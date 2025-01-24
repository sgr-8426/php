<?php

    $name = "I am sagar";
    echo "$name <br>";
    
    echo "length of above string is ".strlen($name)."<br>"; // returns the length of the string
    
    echo "number of words in that string is ".str_word_count($name)."<br>"; // returns the number of words in the string
    
    echo strrev($name)."<br>"; // returns the reverse of the string
    
    echo strpos($name, "sagar")."<br>"; // returns the position of the word in the string 
    
    // 3 parameters in str replace function are 1. word to be replaced, 2. word to be replaced with, 3. string   
    echo str_replace("sagar", "SGR", $name)."<br><br>"; // replaces the word in the string

    // str repeat function repeats the string
    echo str_repeat($name."<br>", 2)."<br>";

    // trim function removes the white spaces from the string
    echo "<pre>";
    $forTrim = "    I am sagar    ";
    $trim = trim($forTrim);
    $ltrim = ltrim($forTrim);
    $rtrim = rtrim($forTrim);
    echo "Original string:<br>$forTrim<br>".strlen($forTrim)."<br>";
    echo "Trimmed string:<br>$trim<br>".strlen($trim)."<br>";
    echo "Left trimmed string:<br>$ltrim<br>".strlen($ltrim)."<br>";
    echo "Right trimmed string:<br>$rtrim<br>".strlen($rtrim)."<br>";
    echo "</pre>";

    $implode = array("I", "am", "sagar");
    echo implode(" ", $implode)."<br>"; // joins the array elements with the string
    
    $explode = "I am sagar";
    print_r(explode(" ", $explode)); // splits the string into array elements

    
?>