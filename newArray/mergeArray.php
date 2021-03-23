<?php
    $a=array ("Beer","Bom","Wat");
    $b=array (22,23,24);
    $c= array_merge($a,$b);
    $d = array_merge($a,$b,$c);
    print_r($d);
    foreach ($d as $value)
    {
        echo $value."<br>";//แสดงผลข้อมูล 2 ชุด แสดง คือ Beer Bom Wat 22 23 24
    } 
    
?>