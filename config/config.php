<?php
    $host="localhost";
    $name="root";
    $pass="";
    $database="quanlynhatro";
    $conn=mysqli_connect($host,$name,$pass,$database);
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    
?>