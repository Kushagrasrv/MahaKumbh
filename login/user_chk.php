<?php
	session_start();
	if(isset($_SESSION['LOGGEDIN']))
	{
		session_unset();
		session_destroy();
		header("Location: login.php");
		exit;
	}
?>