<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'demo';
    $con = mysqli_connect($host,$user,$pass,$db_name);
    if(!$con){
        die('connection faild'.mysqli_connect_error());
    }
?>