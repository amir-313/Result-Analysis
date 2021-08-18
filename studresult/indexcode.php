<?php
	session_start();

    $username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if($username == "admin" && $password == "admin")
	{
		$_SESSION['usertype'] = "Admin";
		header("Location:students.php");
	}
	else
	{
		header("Location:index.php?action=failed");	
	}
?>