<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "itbook";

$conn = mysqli_connect( $hostname, $username, $password );
if (!$conn) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
//mysql_select_db ( $dbname, $conn )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
mysqli_set_charset($conn,"utf8");

//เลือกประเภท
function GetTypeSelect($ID)
{
	global $conn;
	$sql = "SELECT * FROM typebook ORDER BY TypeID";
    $dbquery = mysql_query($sql, $conn);
	if (!$dbquery)
	 die("(FunctionDB:GetTypeSelect) SELECT typebook มีข้อผิดพลาด".mysql_error());
	echo "<option value=\"\">เลือกประเภทหนังสือ</option>";
	while($result=mysql_fetch_object($dbquery))
	{
		if($result->TypeID==$ID) { //ถ้าข้อมูลที่เลือกตรงกับข้อมูลในตารางให้เลือกรายการนั้น
			echo "<option value=\"$result->TypeID\" selected> ";
			echo "$result->TypeName</option>\n";
		}
		else { //แต่ถ้าไม่ใช่ก็จะแสดงรายการตามฐานข้อมูล
			echo "<option value=\"$result->TypeID\">";
			echo "$result->TypeName</option>\n";
		}
	}
}

// ฟังก์ชั่นแสดงสถานะ
function GetStatusSelect($ID)
{
	global $conn;
	$sql = "SELECT * FROM statusbook ORDER BY StatusID";
	$dbquery = mysqli_query($sql,$conn);
	if (!$dbquery)
	 die("(FunctionDB:GetStatusSelect) SELECT status มีข้อผิดพลาด".mysql_error());
	echo "<option value=\"\">เลือกสถานะ</option>\n";
	while($result=mysql_fetch_object($dbquery))
	{
		if ($result->StatusID == $ID) {
			echo "<option value=\"$result->StatusID\" selected> ";
			echo "$result->StatusName</option>\n";
		}
		else  {
			echo "<option value=\"$result->StatusID\">";
			echo "$result->StatusName</option>\n";
		}
	}
}
?>
<!doctype HTML>
<html lang="th">
<head>
  <title>Add Data to Book</title>
  <meta charset="utf-8">
</head>
<body>
<form enctype="multipart/form-data" name="save" method="post" action="savebook.php">
<br><br>
<table width="650" border="1"  bgcolor="#FFFFFF" align = "center">
<tr>
	<td colspan="6" bgcolor = "#3399CC" align = "center" height="21">
		<b>: : เพิ่มข้อมูลหนังสือ : : </td>
</tr>
<tr>
	<td width = "200">รหัสหนังสือ   : </td><td width = "400">
		<input type="text" name="BookID" size="10" maxlength="5"> </td>
</tr>
<tr >
	<td width = "200" >ชื่อหนังสือ :</td><td >
		<input type="text" name="BookName" size="50" maxlength="50"> </td>
</tr>
<tr>
	<td width = "200">ประเภทหนังสือ	:  </td>
	<td ><select name="TypeID" ><? GetTypeSelect($TypeID); ?></select></td>
</tr>
<tr>
	<td width = "200">สถานะหนังสือ :  </td>
	<td> <select name="StatusID" ><? GetStatusSelect($StatusID);?> </select></td>
</tr>
<tr>
	<td width = "200" >สำนักพิมพ์ :</td>
	<td ><input type="text" name="Publish" maxlength="25" size="20"> </td>
</tr>
<tr>
	<td width = "200">ราคาที่ซื้อ:</td>
	<td ><input type="text" name="UnitPrice" maxlength="25" size="20"></td>
    </tr>
<tr>
	<td width = "200">ราคาที่เช่า:</td>
	<td><input type="text" name="UnitRent" size="20" maxlength="25"></td>
</tr>
<tr >
	<td width = "200">จำนวนวันที่เช่า </td>
	<td> <input type="text" name="DayAmount" maxlength="25" size="20"></td>
</tr>
<tr>
	<td width = "200">รูปภาพ</td>
	<td> <input type="hidden" name="max_size" value="1000000">
		<input type="file" name="ImageFile" size="30">
		<br><font size="2" color="#FF3300">นามสกุล .gif หรือ .jpg หรือ .png (เท่านั้น)</font>
		</td>
</tr>
</table>
<br>
<div align = "center">
	<input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
	<input type="reset"  name="Reset" value="ยกเลิก" style="cursor:hand">
</div>
</body>
</html>

