<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lab 6 - 9  while</h1>
    <form action="#" method="post">
       <h2>Start Number <input type="number" name="startNum"> </h2>
       <h2>End Number   <input type="number" name="endNum"> </h2>
       <h2>Divide Number<input type="number" name="divideNum"> </h2>
        <input type="submit" value="Submit">
    </form>
    <br><br>
    <?php
        $count = 0;
        $startNum   = $_POST['startNum'];
        $endNum     = $_POST['endNum'];
        $divideNum  = $_POST['divideNum'];

        echo "ผลลัพธ์ของตัวเลข ระหว่าง ".$startNum." ถึง ".$endNum." ที่หารด้วย ".$divideNum."ลงตัวคือ<br><br>";

        while($startNum <= $endNum !=0 ){
            if($startNum % $divideNum == 0){
                echo $startNum." ,";
            }
            $startNum++;
        }
    ?>
</body>
</html>