<?php

session_start();
$con = mysqli_connect("localhost","root","","sharat");

$email = $_POST['email'];
 $pass = $_POST['pass'];
 
 $sql1 = "SELECT * FROM admin WHERE emailid='$email' and pass='$pass'";
 $res1 = mysqli_query($con,$sql1);
 $data = mysqli_fetch_array($res1,MYSQLI_ASSOC);
 
 if($data['emailid']!=$email and $data['pass']!=$pass)
 {
  echo "invalid email or pass";
 }
 elseif($data['emailid']==$email and $data['pass']==$pass)
 {
    $_SESSION['email']=$data['email'];
    $_SESSION['name']=$data['name'];
	header("location:adminpage.php");
 }
 ?>