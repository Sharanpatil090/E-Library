<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="student";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
$bookid = $_POST['bookid'];
$userid = $_POST['user'];
$ddate = $_POST['kkk'];


if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else
{
	echo "Connection successful!!!";
}

$sql = "INSERT INTO issue (book_id,user_id,i_date,d_date)  VALUES ('$bookid','$userid','$idate','$ddate')";
if(mysqli_query($con, $sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>

<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="student";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
$bookid = $_POST['bookid'];
$userid = $_POST['user'];

if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else
{
	echo "Connection successful!!!";
}

$sql = "UPDATE request SET serve=1 where rmail_id=$userid and ser_no=$bookid ";
if(mysqli_query($con, $sql)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>

<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="student";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
$bookid = $_POST['bookid'];

if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else
{
	echo "Connection successful!!!";
}

$sql = "UPDATE book SET no_books=(no_books-1) where ser_no=$bookid ";
if(mysqli_query($con, $sql)){
   header("location: issue.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>
