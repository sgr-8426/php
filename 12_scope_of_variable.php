<?php

    $a = 98;
    $b = 980;
    function printValue(){
        global $a, $b;
        $a = 100;
        $b = 1000;
        echo "<br>inside function ".$b;echo $a;
    }
    printValue();

    echo "<br>outside function ".$a." ".$b."<br>"; 
    
    echo var_dump($GLOBALS);
    
    // global variable does not have scope inside the function
    // local variable does not have scope outside the function
    // global variable can be accessed inside the function using global keyword
    // local variable can be accessed outside the function using return keyword
    // global variable can be accessed inside the function using $GLOBALS array
    // local variable can be accessed outside the function using $GLOBALS array

?>