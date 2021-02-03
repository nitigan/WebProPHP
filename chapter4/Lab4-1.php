<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4-1.php</title>
</head>
<body>
    <?php
        $x = 100;
        $y = "200";
        $z = '300';
        $add = $x + $y;
        $sub = $z - $x ;
        $mul = $y * $z;
        $div = $mul / $z ;
        echo("ผลบวก ".$x." + ".$y." = ".$add);
        echo "<br>";
        echo("ผลลบ ".$z." - ".$x." = ".$sub);
        echo "<br>";
        echo("ผลคูณ ".$y." x ".$z." = ".$mul);
        echo "<br>";
        echo("ผลหาร ".$mul." / ".$z." = ".$div);
    ?>
</body>
</html>