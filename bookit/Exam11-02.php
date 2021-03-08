<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างที่ 11-2 </title>
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
    
    $sql = "SELECT * FROM book";
    $result = $conn->query($sql);
    /*
    echo "<html><head><title>Test database</title></head>";
    echo "<body><CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
    
    echo "<table width='100%' border='1' align='center'>";
    echo "<tr><td>ลำดับที่ </td> <td>รหัสหนังสือ</td><td>ชื่อหนังสือ</td>";
    echo "<td>ประเภทหนังสือ </td> <td>สถานะหนังสือ</td><td>สำนักพิมพ์</td>";
    echo "<td>ราคาหนังสือ </td> <td>ราคาเช่าหนังสือ</td><td>จำนวนวัน</td>";
    echo "<td>รูปภาพ </td> <td>วันที่ซื้อ</td></tr>";
    */
    if ($result->num_rows > 0) {
        while (  $row = $result->fetch_assoc() )
        {
            echo "bookid: " . $row["BookID"]. " - BookName: " . $row["BookName"]. " " . $row["TypeID"]. "<br>";
           
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    function CheckType( $conn, $code) {
        $sqltxt = "SELECT * FROM typebook";
        $result1 = mysql_query ( $sqltxt, $conn );
        while (  $rs1 = mysql_fetch_array ( $result1 ) )
        {
            if ($rs1[0] == $code) return $rs1[1];
        }
        return "";
    }
    
    function CheckStatus( $conn, $code) {
        $sqltxt = "SELECT * FROM statusbook";
        $result2 = mysql_query ( $sqltxt, $conn );
        while (  $rs2 = mysql_fetch_array ( $result2 ) )
        {
            if ($rs2[0] == $code) return $rs2[1];
        }
        return "";
    }
    

    ?>

    
</body>
</html>