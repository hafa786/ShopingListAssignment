<?php 


$host="localhost"; // Host name 
$user="root"; // Mysql username 
$pw=""; // Mysql password 
$db_name="shoping-assignment"; // Database name 

$conn=mysqli_connect($host,$user,$pw,$db_name);

if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>