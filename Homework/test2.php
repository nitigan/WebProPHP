
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
                $newNum1 = $_GET['fname'];
                $newNum2 = $_GET['salary'];
                echo $newNum1;
                echo $newNum2;
    ?>
    <form action="test3.php" method="post">
        <input type="hidden" name="newName" value="<?php echo $newNum1?>">
        <input type="hidden" name="newSalary" value="<?php echo $newNum2?>">
        <input type="submit">

    </form>
</body>
</html>

