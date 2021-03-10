<?php
    $a=array ("Beer","Bom","Wat");
    //$total ;
    array_push ($a ,22,23,24);
    array_push ($a ,"IT","ITI","INE");
    //echo "มีสมาชิกทั้งหมด $total ตัว ในอาเรย์ \$a<br>\n";
    foreach ($a as $value)
    {
        echo $value."\n";

    }
    echo "<br>ทดสอบ function Array Shift<br>";
    print_r($a);
    echo "<br>";
    while (count($a))
    {
        $value =array_shift($a);
        echo"ลบ".$value."<br>\n";
        echo "มีสมาชิกทั้งหมด".count($a)." ค่า อยู่ในอาร์เรย์ \$a<br>\n";
        print_r($a);
        echo "<br>";
    }


?>