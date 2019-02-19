<?php

	session_start();

	if(isset($_SESSION['REGISTER_USER']))
	{
		session_unset();
		session_destroy();
		echo "<script> alert('Registered Succesfully.Your account will be activated once its been checked.') </script>";
	}

	if(isset($_SESSION['REGISTER']))
	{
		session_unset();
		session_destroy();
		echo "<script> alert('Already Registered.') </script>";
	}


?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/register.css"/>
		<title>Register</title>
		<script type="text/javascript">
			function valid()
			{
				var name = document.getElementById("uname").value;
				var eid = document.getElementById("eid").value;
				var pass = document.getElementById("pass").value;
				var cpass = document.getElementById("cpass").value;
				var mnumber = document.getElementById("mnumber").value;
				//alert(name+""+eid+""+pass+""+cpass+""+mnumber);
				
				if (!(pass==cpass))	{	alert("Password & Confirm Password Not Matched"); return false;	}
				if ((mnumber.length)!=10) {	alert("Invalid Mobile Number"); return false;	}

				return true;
			}
		</script>
	</head>
	<body>
		<div id="login" style="margin-top: 100px;">
			<form action="register.php" method="post" onsubmit="return valid()">
				
				<img src="../images/kumbh.jpg" width="120px" height="120px" style="margin: 0px;margin-left: 120px;margin-top: 20px;">

				<input type="text" placeholder="Name" id="uname" name="uname" required="true" />

				<input type="email" placeholder="something@example.com" name="eid" id="eid" required="true"/>	

				<input type="password" placeholder="Password" name="pass" id="pass" required="true" maxlength="10"/>

				<input type="password" placeholder="Confirm Password" name="cpass" id="cpass" required="true" maxlength="10"/>

				<input type="number" placeholder="Mobile Number" name="mnumber" id="mnumber" required="true" maxlength="10"/>

				<input type="submit" id="sbtn" value="Register" style="margin-left:35px;" />
			</form>
		</div>
	</body>
</html>