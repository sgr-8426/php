<?php

    // operators in php
    // 1. Arithmetic operators
    // 2. Assignment operators
    // 3. Comparison operators
    // 4. Increment/Decrement operators
    // 5. Logical operators
    // 6. String operators
    // 7. Array operators
    // 8. Conditional assignment operators


    // 1. Arithmetic operators
    // addition (+)
    // subtraction (-)
    // multiplication (*)
    // division (/)
    // modulus (%)
    // exponentiation (**)
    $num1 = 10;
    $num2 = 20;
    echo $num1."<br>".$num2."<br>";
    echo "Addition: ".($num1 + $num2)."<br>";
    echo "Subtraction: ".($num1 - $num2)."<br>";
    echo "Multiplication: ".($num1 * $num2)."<br>";
    echo "Division: ".($num1 / $num2)."<br>";
    echo "Modulus: ".($num1 % $num2)."<br>";
    echo "Exponentiation: ".($num1 ** $num2)."<br><br>";


    // 2. Assignment operators
    // assign (=) simply assign the value to the variable
    // add and assign (+=) add right valiable in left asd store in left variable
    // subtract and assign (-=) subtract right valiable from left asd store in left variable
    // multiply and assign (*=) multiply right valiable with left asd store in left variable
    // divide and assign (/=) divide right valiable from left asd store in left variable
    // modulus and assign (%=) modulus right valiable from left asd store in left variable
    // exponentiation and assign (**=) exponentiation right valiable from left asd store in left variable
    $num3 = 10;
    $num4 = 20;
    echo $num3."<br>".$num4."<br>";
    $num3 += $num4;
    echo $num3."<br>";
    $num3 -= $num4;
    echo $num3."<br>";


    // 3. Comparison operators
    // equal (==) returns true if the values are equal else false
    // identical (===) returns true if the values and data types are equal else false
    // not equal (!=) returns true if the values are not equal else false
    // not identical (!==) returns true if the values and data types are not equal else false
    // greater than (>) returns true if the left value is greater than right value else false
    // less than (<) returns true if the left value is less than right value else false
    // greater than or equal to (>=) returns true if the left value is greater than or equal to right value else false
    // less than or equal to (<=) returns true if the left value is less than or equal to right value else false
    $num5 = 10;
    $num6 = 20;
    echo $num5."<br>".$num6."<br><br>";
    echo "==<br>";
    echo var_dump($num5 == $num6)."<br><br>";
    

    // 4. Increment/Decrement operators
    // pre-increment (++$var) increases the value by 1 and then use it
    // post-increment ($var++) use the value and then increase it by 1
    // pre-decrement (--$var) decreases the value by 1 and then use it
    // post-decrement ($var--) use the value and then decrease it by 1
    $num7 = 10;
    echo $num7."<br>";
    $num7++;
    echo $num7."<br>";


    // 5. Logical operators
    // and (&&) returns true if both the conditions are true else false
    // or (||) returns true if any one of the conditions is true else false
    // not (!) returns true if the condition is false else true
    $num8 = 10;
    $num9 = 20;
    echo $num8."<br>".$num9."<br>"; 
    echo "&&<br>";
    echo var_dump($num8 == 10 && $num9 == 20)."<br><br>";


    
    
?>