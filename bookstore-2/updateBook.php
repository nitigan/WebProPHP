<HTML>
<HEAD><TITLE>Update Book</TITLE></HEAD>
<BODY>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bookit";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");

    $id = $_GET['id'];
    $sql = "select * from book where BookID = $id";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    $Path="pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
    $image = "<img src=$Path$data[Picture] valign=middle align = center
    width=\"80\" height = \"100\">";
    ?>

    <form enctype="multipart/form-data" name="save" method="POST" action="savebookUpdate.php">

    <?php 
      echo "<table border=1 align =center bgcolor=#FFCCCC>";
      echo "<tr><td align=center colspan = 2 bgcolor =#FF99CC><B> แก้ไข รายละเอียดหนังสือ
      </B></td></tr>";
    
      echo "<tr><td> รหัสหนังสือ : </td><td><input type=\"text\" name=\"BookID\" value=\"".$data["BookID"]."\" readonly></td></tr>";
      echo "<tr><td> ชื่อหนังสือ : </td><td><input type=\"text\" name=\"BookName\" value=\"".$data["BookName"]." \"></td></tr>";
      echo "<tr><td> สำนักพิมพ์ : </td><td><input type=\"text\" name=\"Publish\" value=\"".$data["Publish"]."\"></td></tr>";
      echo "<tr><td> ราคาซื้อ : </td><td><input type=\"text\" name=\"UnitPrice\" value=\"".$data["UnitPrice"]."\"></td></tr>";
      echo "<tr><td> ราคาเช่า : </td><td><input type=\"text\" name=\"UnitRent\" value=\"".$data["UnitRent"]."\"></td></tr>";
      echo "</table>";
    ?>
  
  <BR>
  <div align = "center">
      <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor:hand">
      <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
    </div>
    </form>
  <div align = "center"> <A HREF="listofbook.php">กลับหน้าหลัก</A></div><BR>
</BODY>
</HTML>
