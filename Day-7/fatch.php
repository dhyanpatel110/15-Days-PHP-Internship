<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

//connection function
$connection = mysqli_connect($host , $username ,$passwd ,$dbname);
//query
$q = mysqli_query($connection, "SELECT * FROM tbl_user") or die(mysqli_error($connection));
//fetch
$row = mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
//numerical and associative
$row = mysqli_fetch_array($q);
echo"<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];

?>