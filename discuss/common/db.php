<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="discuss";
    $conn=new mysqli($server,$username,$password,$database);
    if ($conn->connect_error) {
        die("not connected". $conn->connect_error);
    }
    
?>