<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "12345", "bookit");
mysqli_set_charset($conn, "utf8");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT book.BookID as ID,book.BookName as BookName,typebook.TypeName as TypeName
FROM book  
INNER JOIN typebook  
ON book.TypeID = typebook.TypeID  
ORDER BY BookID;  ";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>รหัสหนังสือ</th>";
                echo "<th>ชื่อหนังสือ</th>";
                echo "<th>ประเภท</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['BookName'] . "</td>";
                echo "<td>" . $row['TypeName'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
</body>
</html>
