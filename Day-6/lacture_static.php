<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

//connection function
$connection = mysqli_connect($host , $username ,$passwd ,$dbname);

$q = mysqli_query($connection,
            "INSERT INTO tbl_user(user_name,user_gender,user_mobile) VALUES ('nop','male','21261827')")
                  or die("Error".mysqli_error($connection));

if($q){
    echo"<script>alert('Record Added');</script>";
}


?>
