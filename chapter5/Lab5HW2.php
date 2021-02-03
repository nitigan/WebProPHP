<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2 : Sum of number</title>
</head>
<body>
<center>
    <h2>HW2 : Sum of number</h2>
    <form action="#" method="get">
        <label for="Num">Num 1:</label> 
        <input type="text" name="num1" ><br><br>

        <input type="radio"  name="op1" value="+">
        <label for="min"> +  :</label>
        <input type="radio"  name="op1" value="-">
        <label for="min">-  :</label>
        <input type="radio"  name="op1" value="*">
        <label for="min">*  :</label>
        <input type="radio"  name="op1" value="/">
        <label for="min">/  :</label><br><br> 

        <label for="lname">Num 2:</label> 
        <input type="text" name="num2"><br><br>

        <input type="radio"  name="op2" value="+">
        <label for="min"> +  :</label>
        <input type="radio"  name="op2" value="-">
        <label for="min">-  :</label>
        <input type="radio"  name="op2" value="*">
        <label for="min">*  :</label>
        <input type="radio"  name="op2" value="/">
        <label for="min">/  :</label><br><br> 
        
        <label for="lname">Num 3:</label> 
        <input type="text" name="num3"><br><br>
        

        <input type="submit" value="Submit"><br><br><br>
    </form>
    <?php
        error_reporting(~E_NOTICE);
        
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        echo "Sum of number  = " .($num1+$num2+$num3);
    ?>
</center>
</body>
</html>