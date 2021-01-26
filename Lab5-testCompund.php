<?php
    $a = 15;
    echo "<br>\$a = ".$a;
    echo "<br>\$a >>= 2 : ".$a>>= 2;
    
    echo "<br>\$a = ".$a;
    echo "<br>\$a <<= 2 : ".$a<<= 2;
    
    echo "<br>\$a = ".$a;
    echo "<br>\$a &= 2 : ".$a &= 2;
    
    echo "<br>\$a = ".$a;
    echo "<br>\$a ^= 2 : ".$a ^= 2;
    
    echo "<br>\$a = ".$a;
    echo "<br>\$a |= 2 : ".$a |= 2;

// 
echo "<br>***********************";
    $a = 15; 
    $b = 3;
    echo "<br>\$a = ".$a;
    echo "<br>\$b = ".$b, "<br>";
    echo "a & b = ", $a & $b, "<br>"; 
    echo "a | b = ", $a | $b, "<br>"; 
    echo "<br>\$a = ".$a;
    echo "<br>\$b = ".$b, "<br>";
    echo "a ^ b = ", $a ^ $b, "<br>"; 
    echo "<br>\$a = ".$a;
    echo "<br>\$b = ".$b, "<br>";
    echo "~a = ", ~$a, "<br>"; 
    echo "<br>\$a = ".$a;
    echo "<br>\$b = ".$b, "<br>";
    echo "a << 1 = ", $a << 1, "<br>"; 
    echo "<br>\$a = ".$a;
    echo "<br>\$b = ".$b, "<br>";
    echo "a >> 1 = ", $a >> 1, "<br>";
    echo "<br>\$a = ".$a;
    echo "<br>\$b = ".$b;
?>