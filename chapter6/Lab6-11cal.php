<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> โปรแกรมคำนวณเกรด </title>
</head>
<body>
    <?php
        $hw = $_GET['hw'];
        $midterm = $_GET['midterm'];
        $final = $_GET['final'];
        if ($hw > 30) $hw = 30;
        if ($midterm > 35) $midterm = 35;
        if ($final > 35) $final = 35;

        echo "<p>";
        echo "<b>ข้อมูลคะแนน </b><br />";
        echo "Homework : <i> $hw </i> <br/>";
        echo "Midterm : <i> $midterm </i> <br/>";
        echo "Final : <i> $final </i> <br/>";
        $total = $hw + $midterm + $final;
        ?>
        <form method="post" action="ch6-11result.php">
            <input type="submit">
        </form>
        <?php
        echo "Total Score : $total <br>";
        if ($total >= 80) {
            $grede = 'A';
            echo "Result Grade <br>";
            echo "<img src=image/A.jpg width=100px><br>";

        }
        elseif ($total >= 70) {
            $grede = 'B';
            echo "Result Grade : <br>";
            echo "<img src=image/B.jpg width=100px><br>";
        }
        elseif ($total >= 60) {
            $grede = 'C';
            echo "Result Grade : <br>";
            echo "<img src=image/C.jpg width=100px><br>";
        }
        elseif ($total >= 50) {
            $grede = 'D';
            echo "Result Grade : <br>";
            echo "<img src=image/D.jpg width=100px><br>";
        }
        else {
            $grede = 'F';
            echo "Result Grade : <br>";
            echo "<img src=image/F.jpg width=100px><br>";
        }
        echo "<br>";
        echo "<a href='lab6-11.php'> <big>Back </big></a>";
    ?>
</body>
</html>