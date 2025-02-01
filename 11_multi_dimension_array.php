<?php
    // multi-dimensional array
    $multi = array(
        array("a", "b", "c"),
        array("d", "e", "f"),
        array("g", "h", "i")
    );

    echo var_dump($multi);
    echo "<br>";

    for($i=0;$i<count($multi);$i++){
        for($j=0;$j<count($multi[$i]);$j++){
            echo $multi[$i][$j]."<br>";
        }
    }

    echo "<br>";
    
    foreach($multi as $a){
        foreach($a as $b){
            echo $b."<br>";
        }
    }
?>