<?php
	session_start();
	if(isset($_SESSION['LOGGEDIN']))
		{
			if($_SESSION['LOGGEDIN']=="admin")
				{
					header("Location: admin.php");
					exit;
				}
			else
				{
					header("Location: user.php");
					exit;
				}
		}
	if(isset($_SESSION['USER_STATUS']))
	{
		session_unset();
		session_destroy();
		echo "<script> alert('INVALID CREADENTIALS') </script>";
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/login.css"/>
		<title>Login</title>
	</head>
	<body>
		<div id="login">
			<form action="login_chk.php" method="post">
				
				<img src="../images/kumbh.jpg" width="120px" height="120px" style="margin: 0px;margin-left: 130px;margin-top: 20px;">
				<p style="font-size:16px;margin:0px;margin-left:50px;margin-top:35px;color: #fd7123;"><b>LOGIN ID</b></p>
				<input type="text" placeholder="something@example.com" name="user" style="width:300px;height:40px;margin-left:50px;margin-top:5px;font-size:16px;padding-left:10px;border:0.5px solid #0272A6;"/>	
				<p style="font-size:16px;margin:0px;margin-left:50px;margin-top:5px;color: #fd7123;"><b>PASSWORD</b></p>
				<input type="password" placeholder="Password" name="pass" style="width:300px;height:40px;margin-left:50px;margin-top:3px;font-size:16px;padding-left:10px;border:0.5px solid #0272A6;"/>
				<input type="submit" id="sbtn" value="Login" />
				<p><a href="create_account.php" id="user" style="font-size:16px;color: #fd7123;">Create Account ?</a></p>
			</form>
		</div>
	</body>
</html>