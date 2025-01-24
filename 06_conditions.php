<?php

    $num1 = random_int(1, 10);
    $num2 = random_int(1, 10);
    $num3 = random_int(1, 10);
    echo "num1 = ".$num1."<br>num2 = ".$num2."<br>num3 = ".$num3."<br><br>";

    // if-else
    echo "num1 and num2 are equal or not<br>";
    if($num1 == $num2){
        echo "Equal<br>";
    }else{
        echo "Not Equal<br>";
    }
    echo "<br>";


    // if-else if-else ladder
    // only one block is executed
    echo "person is child, adult or senior citizen<br>age : ";
    $age = random_int(1, 80);
    echo $age."<br>";
    if($age < 18){
        echo "Child<br>";
    }else if($age >= 18 && $age < 60){
        echo "Adult<br>";
    }else{
        echo "Senior Citizen<br>";
    }
    echo "<br>";

    // nested if-else
    echo "which number is greater among num1, num2 and num3<br>";
    if($num1 > $num2){
        if($num1 > $num3){
            echo "num1 is greater<br>";
        }else{
            echo "num3 is greater<br>";
        }
    }else{
        if($num2 > $num3){
            echo "num2 is greater<br>";
        }else{
            echo "num3 is greater<br>";
        }
    }
    echo "<br>";


    // switch-case
    echo "num1 is 1 or 2<br>";
    switch($num1){
        case 1:
            echo "1<br>";
            break;
        case 2:
            echo "2<br>";
            break;
        default:
            echo "neither 1 nor 2<br>";
    }
?>