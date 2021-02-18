<?php
// declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
        echo '<center>';
        echo '<form method="get" action="#">';
        echo '<h2> Row : <input type="number" name="row">';
        echo '<h2> Col : <input type="number" name="col">';
        echo '<h2> Start Num : <input type="number" name="startNum">';
        echo '<h2> End Num : <input type="number" name="endNum">';
        echo '<h2> End Num : <input type="submit" value=" Show Result ">';
        echo '</form>';
        echo '</center>';
    }
    // declare function page_footer
    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    function maxNum(&$maxNum,$ranNum){
        if($maxNum < $ranNum){
            $maxNum = $ranNum;
        }
    }
    function minNum(&$minNum,$ranNum){
        if($minNum > $ranNum){
            $minNum = $ranNum;
        }
        //return $minNum;
    }
    function averageNum(&$sumNum,&$count){
       return $sumNum/$count;
    }

    // declare function checker
    function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2,$startNum,$endNum,$minNum,$count,$sumNum) {
       
        echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
        echo '<table align="center" border="1">' ;
        for($r = 1; $r <= $maxRow; $r++) {
            echo '<tr >';
            for($c = 1; $c <= $maxCol; $c++) {
                $count++;
                $ranNum = rand($startNum,$endNum);
                maxNum($maxNum,$ranNum);
                minNum($minNum,$ranNum);
                $sumNum += $ranNum;

                if ( $r % 2 == 1) {
                    echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
                }
                else {
                    echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                }
                echo $ranNum. '</td>';
            }
            echo '</tr>';
        }
        
        //echo '<tr><td colspan="'.$maxCol.'">Final Average Num = '.$averNum.'"</td></tr>"';
        echo '</table>';
        echo '<center>';
        echo 'Final Max Num = '.$maxNum.'<br>';
        echo 'Final Min Num = '.$minNum.'<br>';
        echo 'Final Average Num = '.averageNum($sumNum,$count).'<br>';
        echo '</center>';

        if ($maxRow == $maxCol) $message = "This is Square";
        else $message = "This is Rectangle";
            echo "<p align='center'> $message </p>";
    }
    $row = $_GET['row'];
    $col = $_GET['col']; 
    $startNum = $_GET['startNum'];
    $endNum = $_GET['endNum'];
    $maxNum=0;
    $minNum=$_GET['endNum'];
    $averNum=0;
    $count=0;
    $sumNum=0;
    page_header("Example 8-4", "FFDDEE");
    show_checker($row, $col,"33ff99","ffff99",$startNum,$endNum,$minNum,$count,$sumNum);
    
    page_footer("Thank You.");
?>