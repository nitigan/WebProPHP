<?php
    for($i=0 ; $i<10 ; $i++){
        $array[$i] = $i+1;
    }
    shuffle($array);
    print_r($array);
    echo"<br>";
?>