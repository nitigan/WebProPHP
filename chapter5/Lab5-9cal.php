<!DOCTYPE html>
<html lang="en">
<head><title>Result of Calculation</title></head>
<body>
    <?php
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];
        echo "<table align='center' width='40%' border='1'>";
        echo "<tr><td colspan='2' align='center'><b>Data for Input</b></td></tr>";
        echo "<tr><td>Number 1 :</td><td> <i> $number1 </i> </td></tr>";
        echo "<tr><td>Number 2 :</td><td> <i> $number2 </i> </td></tr>";
        echo "<tr><td>Operator :</td><td> <i> $operator </i> </td></tr>";
        echo "<tr><td>Result :</td><td> <i> ";
        if ($operator == "+")
            echo ($number1 + $number2) ." </i> </td></tr>";
        if ($operator == "-")
            echo ($number1 - $number2) ." </i> </td></tr>";
        if ($operator == "*")
            echo ($number1 * $number2) ." </i> </td></tr>";
        if ($operator == "/")
            echo ($number1 / $number2) ." </i> </td></tr>";
        if ($operator == "%")
            echo ($number1 % $number2) ." </i> </td></tr>";
        echo "</table>"
    ?>
    <a href="lab5-9.php"> Back </a>
</body>
</html>