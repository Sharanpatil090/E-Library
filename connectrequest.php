<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="sharat";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
$userid = $_POST['userid'];
$serno = $_POST['pwd'];
if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else
{
	echo "Requested successful!!!";
}

$sql = "INSERT INTO request (rmail_id,ser_no)  VALUES ('$userid',$serno)";
if(mysqli_query($con, $sql)){
   header("location: profile.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>