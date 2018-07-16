<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="student";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
$bookid = $_POST['bookid'];
$userid = $_POST['userid'];
$date2 = $_POST['pa'];


if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else
{
	echo "Connection successful!!!";
}

$date1 = date('Y/m/d');

$diff = strtotime($date1) - strtotime($date2);
if($diff > 10)
{
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$final = ($days * 2) ;
}
else{
	$final=0;
}

$sql = "INSERT INTO ret (userid,fine)  VALUES ('$userid','$final')";
if(mysqli_query($con, $sql)){
	header("location: ");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>