<!DOCTYPE html>
<html lang="th">
<head>
  <title>Display Data From Table Book</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $hostname = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "itbook";
  
  //  connect to mysql server 	
  $conn = new mysqli($hostname, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  //mysql_select_db ( $dbname, $conn ) or die ( "ไม่สามารถเลือกฐานข้อมูล school ได้" );
  
  // set display thai
  mysqli_set_charset($conn,"utf8");

  $sqltxt = "SELECT * FROM book order by BookID";
  $result = $conn->query($sqltxt);

  echo "<CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
  echo "<table width=\"500\" border=\"0\" bordercolor=\"D1D7DA\" ";
  echo "align = \"center\" valign = \"top\" >";
  echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
  echo "<td width =\"30\" align=\"center\">ลำดับ</font></td>";
  echo "<td width =\"100\"  align=\"center\" >รหัสหนังสือ</td>";
  echo "<td align=\"center\" width = \"200\">ชื่อหนังสือ</td>";
  echo "<td align=\"center\" width = \"200\">ราคา</td>";
  echo "<td align=\"center\" width =\"80\" >ลบ</a></font></td>\n</b>";
  $a=1;
  while (  $rs = $result->fetch_assoc() )
  {
  	echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
  	echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
    echo "<td align=\"center\"> ";
    ?>

    <a href="detailbook.php?bookID=<?php echo $rs['BookID']; ?>">
    <?php
        echo $rs['BookID'];
    ?>    
    </a>

<?php
    echo "</td><td>".$rs['BookName']."</td><td>".$rs['UnitPrice']."</td>";
    echo "<td align=\"center\">";
?>
    <!--a href="deletebook.php?bookID=<?php echo $rs['BookID']; ?>" onclick=\"return confirm(' Youwant Delete ')\">[ลบ]</a></font></td-->
    <a href="deletebook.php?bookID=<?php echo $rs['BookID']; ?>">[ลบ]</a></font></td>
<?php
   
  	$a++;
  }
  mysqli_close($conn);
?>

<div align = "center"> <a href="addbook.php">เพิ่มรายการหนังสือ</A></div><br>
</body>
</html>
