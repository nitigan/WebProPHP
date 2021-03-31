<?php
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="register_db";
    
    //create Connect
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //check connection
    if(!$conn){
        echo("Connection failed".mysqli_connect_error());
    }else{
        //echo("Connection Succesfully");
    }
?>