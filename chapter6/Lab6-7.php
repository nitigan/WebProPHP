<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 7 </title></head>
</head>
<body>
    <?php
    $num = 1;
    do{
        $square = $num * $num;
        echo "$num is power two = $square<br>";
        $num += 2;
    }
    while ( $num < 12)
    ?>
</body>
</html>