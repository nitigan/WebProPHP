<!doctype HTML>
<HTML lang="th">
<HEAD>
  <TITLE>Show Data of Book</TITLE>
  <meta charset="utf-8"></HEAD>
<BODY>
<?php
  $hostname = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "itbook";
// connect to mysql  server
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//  set display thai
mysqli_set_charset($conn,"utf8");

$sql = "SELECT * FROM book where BookID = $id";
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);
$Path="pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
$image = "<img src='$Path$data[Picture]' valign='middle' align = 'center' width=\"80\" height = \"100\">";
echo "<table border='1' align ='center' bgcolor='#FFCCCC' >";
echo "<tr><td align='center' colspan = '2' bgcolor ='#FF99CC'><b>แสดงรายละเอียดหนังสือ</b></td></tr>";
echo "<tr><td width='200'> รหัสหนังสือ : </td><td width='300'>".$data["BookID"]."</td></tr>";
echo "<tr><td> ชื่อหนังสือ  : </td><td>".$data["BookName"]."</td></tr>";
echo "<tr><td> ประเภทหนังสือ  : </td><td>".$data["TypeID"]."</td></tr>";
echo "<tr><td> สถานะหนังสือ   : </td><td>".$data["StatusID"]."</td></tr>";
echo "<tr><td> สำนักพิมพ์  : </td><td>".$data["Publish"]."</td></tr>";
echo "<tr><td> ราคาซื้อ  : </td><td>".$data["UnitPrice"]."</td></tr>";
echo "<tr><td> ราคาเช่า  : </td><td>".$data["UnitRent"]."</td></tr>";
echo "<tr><td> รูปภาพ  : </td><td>".$image."</td></tr>";
echo "<tr><td>จำนวนวันที่ยืมได้ : </td><td>".$data["DayAmount"]."</td></tr>";
echo "<tr><td> วันที่จัดเก็บหนังสือ : </td><td>".$data["BookDate"]."</td></tr></table>";

?>
<br>
<div align = "center"> <a href="listofbook.php">กลับหน้าหลัก</a></div><br>
</body>
</html> 
