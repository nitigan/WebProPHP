<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEWORK</title>
    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 6px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
        function checkgrade($score = 0){
            $grade = array();
            if($score >= 80 && $score <= 100){
                $grade = array('grade'=>'A','grade2'=>4);
            }elseif($score >= 75 && $score <= 79){
                $grade = array('grade'=>'B+','grade2'=>3.5);
            }elseif($score >= 70 && $score <= 74){
                $grade = array('grade'=>'B','grade2'=>3);
            }elseif($score >= 65 && $score <= 69){
                $grade = array('grade'=>'C+','grade2'=>2.5);
            }elseif($score >= 60 && $score <= 64){
                $grade = array('grade'=>'C','grade2'=>2);
            }elseif($score >= 55 && $score <= 59){
                $grade = array('grade'=>'D+','grade2'=>1.5);
            }elseif($score >= 50 && $score <= 54){
                $grade = array('grade'=>'D','grade2'=>1);
            }elseif($score <= 49){
                $grade = array('grade'=>'F','grade2'=>0);
            }else{
                $grade = '-';
            }
            return $grade;
        }
        if(isset($_POST['btnsend'])){
            $maxstu = 3;
            $totalgrade = 0;
            $counta = 0;
            $countbplus = 0;
            $countb = 0;
            $countcplus = 0;
            $countc = 0;
            $countdplus = 0;
            $countd = 0;
            $countf = 0;
            for($i=0;$i<$maxstu;$i++){
            $grade = checkgrade($_POST['scoreheart'][$i]+$_POST['scoremidterm'][$i]+$_POST['scorefinal'][$i]);
            if($grade['grade'] == 'A'){
                $counta += 1;
            }elseif($grade['grade'] == 'B+'){
                $countbplus += 1;
            }elseif($grade['grade'] == 'B'){
                $countb += 1;
            }elseif($grade['grade'] == 'C+'){
                $countcplus += 1;
            }elseif($grade['grade'] == 'C'){
                $countc += 1;
            }elseif($grade['grade'] == 'D+'){
                $countdplus += 1;
            }elseif($grade['grade'] == 'D'){
                $countd += 1;
            }elseif($grade['grade'] == 'F'){
                $countf += 1;
            }
            $totalgrade += $grade['grade2'];
    ?>
    <h4 style="text-align:center;">ข้อมูลนักศึกษาคนที่ <?php echo $i+1;?></h4>
    <table  align="center" border="1">
            <tr>
                <td>รหัสนักศึกษา</td>
                <td><?php echo $_POST['stuid'][$i]; ?></td>
            </tr>
            <tr>
                <td>ชื่อ-นามสกุล</td>
                <td><?php echo $_POST['fullname'][$i]; ?></td>
            </tr>
            <tr>
                <td>คะแนนจิตพิสัย</td>
                <td><?php echo $_POST['scoreheart'][$i]; ?></td>
            </tr>
            <tr>
                <td>การบ้าน Midterm</td>
                <td><?php echo $_POST['scoremidterm'][$i]; ?></td>
            </tr>
            <tr>
                <td>การบ้าน Final</td>
                <td><?php echo $_POST['scorefinal'][$i]; ?></td>
            </tr>
            <tr>
                <td>คะแนนรวม</td>
                <td><?php echo ($_POST['scorefinal'][$i]+$_POST['scoreheart'][$i]+$_POST['scoremidterm'][$i]); ?></td>
            </tr>
            <tr>
                <td>เกรด</td>
                <td><?php echo $grade['grade']; ?></td>
            </tr>
        </table>
    <?php } ?>
    <div>
        <br>
        <table align="center" border="1">
            <tr align="center">
                <td colspan="8">เกรดเฉลี่ยรวมห้อง: <?php echo ($totalgrade/$maxstu);?></td>
            </tr>
            <tr>
                <td>A ทั้งหมด : <?php echo $counta;?> คน</td>
                <td>B+ ทั้งหมด: <?php echo $countbplus;?> คน</td>
                <td>B ทั้งหมด: <?php echo $countb;?> คน</td>
                <td>C+ ทั้งหมด: <?php echo $countcplus;?> คน</td>
                <td>C ทั้งหมด: <?php echo $countc;?> คน</td>
                <td>D+ ทั้งหมด: <?php echo $countdplus;?> คน</td>
                <td>D ทั้งหมด: <?php echo $countd;?> คน</td>
                <td>F ทั้งหมด: <?php echo $countf;?> คน</td>
            </tr>
        </table>
    </div>
    <?php exit();}?>
    <form method="post">
    <?php for($i=0;$i<5;$i++){?>
        <h4 style="text-align:center;">กรอกข้อมูลนักศึกษาคนที่ <?php echo $i+1;?></h4>
        <table  align="center" border="0">
            <tr>
                <td>รหัสนักศึกษา</td>
                <td><input type="text" name="stuid[<?php echo $i;?>]" pattern="[0-9]{13}" title="เฉพาะตัวเลข13ตัวเท่านั้น" maxlength="13" required></td>
            </tr>
            <tr>
                <td>ชื่อ-นามสกุล</td>
                <td><input type="text" name="fullname[<?php echo $i;?>]" maxlength="100" required></td>
            </tr>
            <tr>
                <td>คะแนนจิตพิสัย</td>
                <td><input type="number" name="scoreheart[<?php echo $i;?>]" min="0" max="5" required></td>
            </tr>
            <tr>
                <td>การบ้าน Midterm</td>
                <td><input type="number" name="scoremidterm[<?php echo $i;?>]" min="0" max="45" required></td>
            </tr>
            <tr>
                <td>การบ้าน Final</td>
                <td><input type="number" name="scorefinal[<?php echo $i;?>]" min="0" max="50" required></td>
            </tr>
        </table>
    <?php } ?>
    <br>
    <div style="text-align:center;">
        <button type="submit" name="btnsend" class="button">ส่งข้อมูล</button>
    </div>
    </form>
</body>
</html>