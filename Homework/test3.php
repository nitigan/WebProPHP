<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <table>
    <form action="#" method="get">
    
    <tr>
        <td>ค่าเริ่มต้น : </td>
        <td><input type="num" name="start"></td>
    </tr>
    <tr>
        <td>ค่าสุดท้าย : </td>
        <td><input type="num" name="end"></td>
    </tr>
    <tr>
        <td>ตัวเลขที่นำไปหาร : </td>
        <td><input type="num" name="divNum"></td>
    </tr>
    <tr>
        <td colspan=2><input type="submit" value="Check Num"></td>
    </tr>
    </form>

    <?php
        $Startnum = $_GET['start'];
        $Endnum = $_GET['end'];
        $Divnum = $_GET['divNum'];
        //echo $Startnum."<br>";
        //echo $Endnum."<br>";
        //echo $Divnum."<br>";
        echo "<tr><td colspan=2>";
        $count=0;
        $sum=0;
        for($i = $Startnum ; $i<=$Endnum ; $i++){
            
            if($i % $Divnum == 0){
                echo $i," , ";
                $count++;
                $sum += $i;
            }
            
        }
        echo "</td></tr>";
        echo "<tr><td colspan=2> จำนวนที่หารลงตัว = ",$count," ตัว ";
        echo "<tr><td colspan=2> ผลรวมของตัวเลขที่หารลงตัว = ",$sum;
    ?>

    </table>
</center>
 




</body>
</html>