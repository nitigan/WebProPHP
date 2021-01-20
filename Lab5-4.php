<?php
    $expr1 = (1 == 1); // true 
    $expr2 = (10 > 20); // false
    $expr3 = $expr1 && $expr2; // false 
    $expr4 = $expr1 || $expr2; // true 
    $expr5 = !$expr4; // false
    echo "expr1 = $expr1\n<br>"; 
    echo "expr2 = $expr2\n<br>"; 
    echo "expr3 = $expr3\n<br>"; 
    echo "expr4 = $expr4\n<br>"; 
    echo "expr5 = $expr5\n<br>";
    echo "expr1 = " , var_dump($expr1); 
    echo "<br>expr2 = " , var_dump($expr2); 
    echo "<br>expr3 = " , var_dump($expr3); 
    echo "<br>expr4 = " , var_dump($expr4); 
    echo "<br>expr5 = " , var_dump($expr5);
?>