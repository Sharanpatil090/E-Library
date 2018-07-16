<?php
session_start();
$con = mysqli_connect("localhost","root","","sharat");
if(isset($_POST['signup']))
{
 $usn = $_POST['usn'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['pass']; 
 $sql = "INSERT INTO students (usn,name,email,pass) VALUES ('$usn','$name','$email','$pass')";
 $res = mysqli_query($con,$sql);
 if(!$res)
	 echo "error signing up!!";
 else
	 // echo "signing up successfulertiret!!";
	Print '<script>alert("Successfully signed in!");</script>';
    Print '<script>window.location.assign("profile.php")</script>';
}
 elseif(isset($_POST['signin']))
 {
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 
 $sql1 = "SELECT * FROM students WHERE email='$email' and pass='$pass'";
 $res1 = mysqli_query($con,$sql1);
 $data = mysqli_fetch_array($res1,MYSQLI_ASSOC);
 
 if($data['email']!=$email and $data['pass']!=$pass)
 {
  echo "invalid email or pass";
 }
 elseif($data['email']==$email and $data['pass']==$pass)
 {
    $_SESSION['usn']=$data['usn'];
    $_SESSION['email']=$data['email'];
    $_SESSION['name']=$data['name'];
	header("location:profile.php");
 }
 }

?>

