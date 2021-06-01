<?php

//connection function
$connection = mysqli_connect($host , $username ,$passwd ,$dbname);

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];


    $q = mysqli_query($connection,
            "INSERT INTO tbl_user(user_name,user_gender,user_mobile) VALUES (?,?,?)")
                  or die("Error".mysqli_error($connection));

    if($q){
        echo"<script>alert('Record Added');</script>";
    }
}
?>

<html>
<body>
  <form method="post" >
     Name: <input type="text" name="txt1"/>
     Genser:<select name="txt2">
            <option>Male</option>
            <option>Female</option>
    mobile:<input type="number" name="txt3"/>
    <input type = "submit"/>

       
  </form>
</body>
</html>




















?>