<html>
<body>

    Show Result <br>
    <?php 
        $x = $_GET["x"]; 
        $y = $_GET["y"]; 
        $operator = $_GET["operator"];
        echo "x = $x <br>";
        echo "y = $y <br>";
        echo "Operator is $operator <br>";
        echo "x + y = ".($x + $y);
    ?>
</body>
</html> 