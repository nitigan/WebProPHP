<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 8 </title></head>
</head>
<body>
    <?php
        $num = 10;
        $sum = 0;
        for($n = 1 ; $n <= $num ; $n++)
        {
            $sum += $n;
            echo "Sumation of 1 to $n is = $sum<br>";
        }
    ?>
</body>
</html>