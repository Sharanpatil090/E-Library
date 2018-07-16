<?php
session_start();
$con = mysqli_connect("localhost","root","","sharat");
if(isset($_POST['continue']))
{
 $pass = $_POST['pass'];
 $skey = $_POST['skey'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $phno = $_POST['phno'];
 $emailid = $_POST['emailid'];
 $DOJ = $_POST['DOJ'];
 
 
 $sql = "INSERT INTO staff (fname,lname,phno,emailid,DOJ,pass) VALUES ('$fname','$lname','$phno','$emailid','$DOJ','$pass')WHERE (skey='skey') ";
 
 $res = mysqli_query($con,$sql);
 if(!$res)
	 echo "error creating password!!!";
 else
	 // echo "signing up successfulertiret!!";
	Print '<script>alert("password set Successfully!!!...");</script>';
    Print '<script>window.location.assign("staffindex.php")</script>';
	header("location:staffindex.php");
}
?>