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
        for($r = 1; $r <= $rowMax ; $r++) {
            echo "<tr>";
            for($c = 1; $c <= $colMax ; $c++) {
                if ($r == $c)
                    echo "<td align='center'><font color='#33ff66'> $r,$c </font></td>";
                else echo "<td align='center'> $r,$c </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <a href='Lab6-12.php'> Back </a>
</body>
</html>