<?php
include 'conn.php';
$servername="localhost";
$username="root";
$password="";
$database="mydb4";
$conn1=mysqli_connect($servername,$username,$password,$database);
$table1="CREATE TABLE user1(username CHAR(30) NOT NULL,password VARCHAR(30) NOT NULL)";
if(mysqli_query($conn1,$table1))
{
	echo "Table user created";
}
else{
	echo "error".mysqli_error($conn1);
}


$table2="CREATE TABLE address1(street VARCHAR(30), pincode INT(20), country INT(20), state CHAR(20), phoneno INT(20))";
if(mysqli_query($conn1,$table2))
{
	echo "Table address created";
}
else{
	echo "error".mysqli_error($conn1);
}

mysqli_close($conn1);
?>