<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

//connection function
$connection = mysqli_connect($host , $username ,$passwd ,$dbname);

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:table.php");
}

$editid = $_GET['id'];

//select data from table
$editq = mysqli_query($connection,"SELECT * FROM tbl_user WHERE user_id='{$id}'") or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);
print_r($editdata);

if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];

    $uq = mysqli_query($connection,"UPDATE tbl_user user_name='{$txt1}', user_gender='{$txt2}', user_mobile='{$txt3}' WHERE user_id='{$editid}'") or die(mysqli_error($connection));

    if($uq){
        echo"<script>alert ('record update');window.location='table.php';</script>"
    }

}

?>


<html>
   <body>
      <form method="post">
      Name: <input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1"/>
      Gender: Male<input type="radio" <?php if($editdata['user_gender']=="Male") {echo "checked";} ?> value="Male" name="txt2"/>
              Female<input type="radio" <?php if($editdata['user_gender']=="Female") {echo "checked";} ?> value="Female" name="txt2"/>
      Mobile:<input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="txt3"/>
      <input type="submit"/>
      <form>
   </body>
</html>