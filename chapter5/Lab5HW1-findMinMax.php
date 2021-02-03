<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW1 : Find Min Max Average</title>
</head>
<body>
<center>
    <h2>HW1 : Find Min Max Average</h2>
    <form action="#" method="get">
        <label for="Num">Num 1:</label> 
        <input type="text" name="num1" ><br><br>
        
        <label for="lname">Num 2:</label> 
        <input type="text" name="num2"><br><br>
        
        <label for="lname">Num 3:</label> 
        <input type="text" name="num3"><br><br>

        <input type="radio"  name="find" value="min">
        <label for="min">Minimum</label><br>
        <input type="radio"  name="find" value="max">
        <label for="min">Maximum</label><br>
        <input type="radio"  name="find" value="average">
        <label for="min">Average</label><br><br><br>

        <input type="submit" value="Submit"><br><br><br>
    </form>
    <?php
        error_reporting(~E_NOTICE);
        $num1 = 0;
        $num1 = $_GET["num1"];
        echo "Maximum number = " .$num1;
    ?>
</center>
</body>
</html>