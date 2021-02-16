<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HW2-1</title>
    </head>
    <body>
    <center>
        <Font Face="RSU">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1 align="center">HW2-2:Find Ascii</h1>
                <label for="Your String">Your Text:</label>
                <input type="text" name="text" style="width: 20%;" required><br><br>

                <input name="btnSubmit" type="submit" value="Submit">
                <button type="reset">clear</button>
                <h2>Count Char in Sentence</h2>
 
        </form>
        <?php
        $data = "King Mongkut's University";
        $count=1;
        foreach (count_chars($data, 1) as $i => $val) {
            if($count==1){

            }else if($count==2){

            }else{
                echo  chr($i)," : Ascii = ",ord(chr($i)),"<br>";
            }
                $count++;
        }
        /*
            $num1 = $_POST['Num1'];
            $num2 = $_POST['Num2'];
            $num3 = $_POST['Num3'];
            $op = $_POST['operator'];
            if($op == "ma"){
                $sum = max($num1,$num2,$num3);
                echo ("Maximum number = ".number_format($sum));
            }
            elseif($op == "mi"){
                $sum = min($num1,$num2,$num3);
                echo ("Minimum number = ".number_format($sum));
            }
            elseif($op == "av"){
                $sum = (($num1+$num2+$num3)/3);
                echo ("Average number = ".number_format($sum));
            }*/
        ?>
        </Font>
    </center>
    </body>
</html>