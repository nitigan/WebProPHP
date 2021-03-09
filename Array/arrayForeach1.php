<?php
    //อาร์เรย์แบบธรรดา 
    // การใช้ foreach
    $name = array ("Beer","Bom","Wat","Lay","Ken","Nueng","Moo");
    foreach($name as $value)
    {
    echo $value ."<br>\n";
    }
    //foreach จะวนลูปไปดึงค่าของ $name มาเก็บ ที่$value
    echo "<hr>";
    ?><?php
    //แบบคู่
    // การใช้ foreach $key=>$value$ENP ["Names"]= "Beer";
    $ENP["age"]= "23";
    $ENP["position"]="AP";
    foreach ($ENP as $key=>$value)
        {
        echo "$key=$value<br>\n";
        }
    // forech วนลูปแล้ว จะนำค่าคีย์และค่าที่เก็บในอาร์เรย์ $ENP ที่ละคู่ 
    //มาเก็บลงตัวแปร $key และ $value ตามลำดับ
?>
