<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";

$conn= mysqli_connect($dbservername, $dbusername ,$dbpassword, $dbname );
  
	if($conn)
	{ 
		echo"connection";
	}
else
	{
		echo"failed to connection";
	}



?>