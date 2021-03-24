<!doctype HTML>
<html lang="th">
<head>
  <title>Save Data to Book</title>
  <meta charset="utf-8">
</head>
<body>
<?php
$hostname = "localhost";
$username =  "root";
$password = "root";
$dbname = "itbook";

$conn = mysqli_connect( $hostname, $username, $password );
if (!$conn) die( "ไม่สามารถติดต่อกับ MySQL ได้" );
//mysql_select_db ( $dbname, $conn )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
mysqli_set_charset($conn,"utf8");

$Flag = true;
$image = $BookID;
$ImageFile = htmlspecialchars( trim($ImageFile) );
if ($ImageFile == "")  {
	echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
}
else {
	$ImageFile_name; 	$ImageFile_type; 	$ImageFile_size;
	if ($ImageFile_type=="image/gif" or $ImageFile_type=="image/jpeg" or 	$ImageFile_type=="image/png")  
   {
    if ($ImageFile_size<=$max_size) {
        $image = $image . strstr( $ImageFile_name,".");
        copy($ImageFile,"pictures/$image");
        unlink($ImageFile);
        $Flag=true;
    }
    else {
        echo "<CENTER><li>รูปภาพมีขนาดใหญ่กว่า 1 mb.<BR></CENTER>";
        echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
        echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
        $Flag=false;
    }
}
else {
    echo "<CENTER><li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG หรือ PNG <BR></CENTER>";
    echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
    echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
    $Flag=false;
}
}
//  save to database
if($Flag)
{
$BDate = date("Y-m-d");
$sql = "INSERT INTO book (BookID ,BookName, TypeID, StatusID, Publish, 	UnitPrice,UnitRent, DayAmount ,Picture,BookDate) VALUES 	('$BookID','$BookName','$TypeID','$StatusID', '$Publish', 	'$UnitPrice','$UnitRent','$DayAmount','$image','$BDate')";
mysql_query($sql,$conn) or die("INSERT ลงตาราง book มีข้อผิดพลาดเกิดขึ้น".mysql_error());
echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
echo  "<CENTER><A HREF=\"listofbook.php\">แสดงข้อมูลทั้งหมด</A></CENTER>";
}
mysql_close($conn);
?>
</body>
</html>
