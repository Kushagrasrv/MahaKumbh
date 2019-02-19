<?php

	session_start();

	$uname = $_POST['uname'];
	$eid = $_POST['eid'];
	$pass = $_POST['pass'];
	$mnumber = $_POST['mnumber'];

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$dbname = 'SEM_5';

	$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
	if($conn->connect_error )
		{
			die('Could not connect: ' . $conn->connect_error);
		}

	$sql = "INSERT INTO tmpregister (uname,eid,pass,mnumber) VALUES('".$uname."','".$eid."','".$pass."','".$mnumber."');";

	if ($conn->query($sql)=== TRUE)
	{
		$_SESSION['REGISTER_USER']="TRUE";
		header("Location: create_account.php");
		exit;
	}
	else
	{
		$_SESSION['REGISTER']="FALSE";
		header("Location: create_account.php");
		exit;
	}

	$conn->close();

?>