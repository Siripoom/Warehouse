<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'db_warehouse';
    $dbChar = "utf8mb4";

    $conn = mysqli_connect($server,$username,$password,$db_name,);
    if ($conn){
        //echo "connected";
    }else {
       echo "errors";
    }


?>