<?php 
include_once 'k1.php';



$useremail=$_POST['email'];
$username=$_POST['name'];
$userpassword=$_POST['password'];
$usergender=$_POST['gender'];

$sql= "INSERT INTO `users` (`email`, `name`, `password`, `gender`) VALUES (?, ?, ?, ?);" ;
	$stmt= mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo"error";
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt,"ssss", $useremail, $username, $userpassword, $usergender);
			mysqli_stmt_execute($stmt);
			header("Location:home.php?signup=success");
		}



?>
