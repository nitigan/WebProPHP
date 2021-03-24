<h1>TEST DELETE</h1>

<?
$hostname = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "itbook"; 

$bookid = $_REQUEST['$bookID'];

echo $bookid;
/*$conn = mysqli_connect( $hostname, $username, $password ); 
if ( ! $conn )   die ( "ไม่สามารถติดต่อกับ MySQL ได้" ); 
mysqli_select_db ( $dbname, $conn )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" ); 
$sql = "DELETE FROM book  WHERE BookID = '$bookID' ";
mysql_query($sql)  or die ( "DELETE จาตาราง book มีข้อผิดพลาดเกิดขึ้น".mysql_error());
mysql_close ( $conn ); 
*/
header("Location:listofbook.php");
?>
