<?php


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'my registration');

if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into users(username,email,password)values(?,?,?)");

  $stmt->bind_param("sss", $username , $email , $password);

  $stmt->execute();

  echo"_______REGISTRATION SUCESSFULLY_______";

  $stmt->close();
  $conn->close();
}
