<?php
    $score = 100;
    if($score>100){
        echo "Your score is ".$score."<br>";
        echo "Your input 0 - 100 !!! <br>";
    }
    else if($score>=80){
        $grade = "A <br>";
    }
    else if($score>=70 ){
        $grade = "B <br>";
    }
    else if($score>=60 ){
        $grade = "C <br>";
    }
    else if($score>=50 ){
        $grade = "D <br>";
    }
    else {
        $grade = "F <br>";
    }
    echo "Your score is ".$score."<br>";
    echo "Your grade is ".$grade."<br>";
?>
