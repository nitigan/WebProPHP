<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างที่ 11-1 </title>
</head>
<body>
    <?php  //------------ส่วนการเปิด Connection ในการติดต่อกับ MySQL ----------------
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "itbook";
    
    
    
    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //mysql_select_db ( $dbname, $conn )or die ( "ไม่สามารถเลือกฐานข้อมูล itbookได้" );
    
    $sql = "SELECT * FROM book";
    $result = $conn->query($sql);
    
    /*echo "<html><head><title>Test database</title></head>";
    echo "<body><CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
    
    echo "<table width='100%' border='1' align='center'>";
    echo "<tr><td>ลำดับที่ </td> <td>รหัสหนังสือ</td><td>ชื่อหนังสือ</td>";
    echo "<td>ประเภทหนังสือ </td> <td>สถานะหนังสือ</td><td>สำนักพิมพ์</td>";
    echo "<td>ราคาหนังสือ </td> <td>ราคาเช่าหนังสือ</td><td>จำนวนวัน</td>";
    echo "<td>รูปภาพ </td> <td>วันที่ซื้อ</td></tr>";
    $a=1;
    */

    if ($result->num_rows > 0) {
        while (  $row = $result->fetch_assoc() )
        {
            echo "bookid: " . $row["BookID"]. " - BookName: " . $row["BookName"]. " " . $row["TypeID"]. "<br>";
            //echo "<tr><td> $a </td>";
            //for($n = 0; $n < 10 ; $n++) {
                //echo "<td>" . $row[ $n ] . "</td>";
            //}
            //echo "</tr>";
            //$a++;
        }
    //echo "</table></body></html>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    
</body>
</html>