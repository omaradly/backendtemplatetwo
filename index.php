<?php
// open connection
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'demo';
    $con = mysqli_connect($host,$user,$pass,$db_name);
    if(!$con){
        die('connection faild'.mysqli_connect_error());
    }else{
        echo 'connection succes <br>';
    }
 /*    // do some sqls
    $sql = "select * from user";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo 
        "id = ".$row['id']." ||| name = ".$row['name']." ||| date = ".$row['date']."<br>";
    }
} else{
    echo "no results";
}  */
/* // create database
$sql2 = "create database demo2";
$chechk = mysqli_query($con,$sql2);
echo $chechk;
// chech if database are created
if($chechk){
    echo "your database created";
} else {
    echo mysqli_error($con);
} */
/* // close connection
mysqli_close($con);
// open new connection
$db_name2 = 'demo2';
$con2 = mysqli_connect($host,$user,$pass,$db_name2);
if(!$con2){
    die('connection faild'.mysqli_connect_error());
}else{
    echo 'connection succes <br>';
} */
/* $sql3 = "
create table user(
    id int AUTO_INCREMENT  PRIMARY KEY,
    name varchar(255) NOT NULL,
    date datetime Default current_timestamp 
    )";
    $res3 = mysqli_query($con2,$sql3);
    if($res3){
        echo "your table created";
    } else {
        echo mysqli_error($con);
    } */
    /* $slq4 = "insert into user (name) values ('omar');";
    $slq4 .= "insert into user (name) values ('ahmed');";
    $slq4 .= "insert into user (name) values ('ali');";
    $res4 = mysqli_multi_query($con2,$slq4);
    if($res4){
        echo "inserted";
    } else {
        echo mysqli_error($con2);
    } */
/*     $sql5 = "insert into user (name) values (?);";
    $stmt = mysqli_prepare($con2,$sql5);
    mysqli_stmt_bind_param($stmt,'s',$name);
    $name = 'ashraf';
    mysqli_stmt_execute($stmt);
    $name = 'omar';
    mysqli_stmt_execute($stmt);
    if($stmt){
        echo "inserted";
    } else {
        echo mysqli_error($con2);
    } */
    //connection form with database

?>