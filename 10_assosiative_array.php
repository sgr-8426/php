<?php 

    echo "associative array in php<br>";

    // associative array - collection of key value pairs
    $fruits = array("a" => "apple",
     "b" => "banana", 
     "m" => "mango", 
     2 => "grapes"
    );

    echo var_dump($fruits);
    echo "<br>";
    echo $fruits["a"];
    echo "<br>";
    echo $fruits["b"];
    echo "<br>";
    echo $fruits[2];

    foreach ($fruits as $key => $value) {
        echo "<br>key is $key and value is $value";
    }

?>