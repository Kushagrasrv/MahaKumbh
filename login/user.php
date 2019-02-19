<?php
	session_start();
	if(!isset($_SESSION['LOGGEDIN']))
		{
			header("Location: login.php");
			exit;
		}

?>

<html>
	<head>
		<title>User</title>
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
	</head>
	<body>
		<form action="admin_chk.php" method="POST" style="float: right;margin-right: 100px;">
			<input type="submit" value="logout" id="logout" />
		</form>
		<center>
		<p style="text-align: center;color: brown;margin-top: 15px;margin-left:150px;font-size: 28px;text-decoration: underline;">User Panel</p>
		
		
			 <iframe width="800" height="300" src="https://www.youtube.com/embed/8T1boAZX-8M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 <br>
			 <p style="text-align: center;color: #ea2222;margin-top: 15px;font-size: 18px;text-decoration: underline;">Harvard without Borders: Mapping the Kumbh Mela</p>
		
		<hr style="margin-right: 100px; margin-left:100px;">

		<iframe width="800" height="300" src="https://www.youtube.com/embed/qhaq5rtIVtY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-top: 50px;"></iframe>

		<p style="text-align: center;color: #ea2222;margin-top: 15px;font-size: 18px;text-decoration: underline;">Ganga Aarti | Har-Ki-Pauri | Haridwar</p>

		<hr style="margin-right: 100px; margin-left:100px;">

		<iframe width="800" height="300" src="https://www.youtube.com/embed/ep6AhYEkWXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<p style="text-align: center;color: #ea2222;margin-top: 15px;font-size: 18px;text-decoration: underline;">KUMBH-Eternal Journey of Indian Civilisation-A Documentary Film</p>

		<hr style="margin-right: 100px; margin-left:100px;">

		<iframe width="560" height="315" src="https://www.youtube.com/embed/vub3WkafIlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<p style="text-align: center;color: #ea2222;margin-top: 15px;font-size: 18px;text-decoration: underline;">Kumbh Mela - World's Biggest Hindu Festival Documentary by National Geographic Channel, 720p HD</p>

		
		</center>
	</body>
</html>