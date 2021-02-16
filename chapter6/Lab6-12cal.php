<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ผลลัพธ์ ตัวอย่าง Control statement ที่ 12 </title>
</head>
<body>
    <?php
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval( $row);
        $colMax = intval( $column);
        echo "<table align='center' border='4' width='300'>";
        for($r = 1; $r <= $rowMax ; $r++) { // ใช้สร้าง แถว
            echo "<tr>"; // ใช้สร้าง แถว
            for($c = 1; $c <= $colMax ; $c++) { //ใช้สร้าง คอลัมภ์
                echo "<td align='center'>";
                $ranNumber = rand(1,99);
                if($ranNumber%2 == 0){
                    echo "<font color='blue'>".$ranNumber;
                }else{
                    echo "<font color='red'>".$ranNumber;
                }
                echo "</font></td>";

                /*if ($r == $c)
                    echo "<td align='center'><font color='red'> $r,$c </font></td>";
                else echo "<td align='center'> $r,$c </td>";*/
            }
            echo "</tr>";// ใช้ปิดการสร้าง แถว
        }
        echo "</table>";
    ?>
    <a href='Lab6-12.php'> Back </a>
</body>
</html>