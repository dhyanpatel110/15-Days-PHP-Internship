<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

//connection function
$connection = mysqli_connect($host , $username ,$passwd ,$dbname);

$id = $_GET['deleted'];
//query
$q = mysqli_query($connection, "UPDATE tbl_user SET is_delete=1 WHERE user_id='{$id}'") or die(mysqli_error($connection));

if($q)
{
    echo"<script>alert ('record deleted');window.location='table.php';</script>"
}

?>