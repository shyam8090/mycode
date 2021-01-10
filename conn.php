<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	die("connection faild".mysqli_connect_error());
}
$sql="CREATE DATABASE mydb4";
if(mysqli_query($conn,$sql))
{
	echo "database created";
}
else{
	echo "error".mysqli_error($conn);
}
mysqli_close($conn);
?>