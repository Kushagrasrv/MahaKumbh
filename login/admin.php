<?php
	session_start();
	if(!isset($_SESSION['LOGGEDIN']))
		{
			header("Location: login.php");
			exit;
		}

?>

<?php


$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = 'root'; //Leave it as blank

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {

die('Could not connect: ' . mysql_error());

}

$sql = 'SELECT * from tmpregister';

mysql_select_db('SEM_5');

$retval = mysql_query( $sql, $conn );

if(! $retval ) {

die('Could not get data: ' . mysql_error());

}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<title>Admin</title>
	</head>
	<body>
		<div id="adminpanel">
			<div id="admintitle">
				<div id="adminhead">
					<p>Admin Panel</p>
				</div>
				<div id="adminlogout">
					<form action="admin_chk.php" method="POST">
						<input type="submit" value="LogOut" id="logout" />
					</form>
				</div>
			</div>
			
			<div id="adminedit">
				<p style="text-align: center;color: brown;margin-top: 15px;font-size: 20px;text-decoration: underline;">EDIT PAGES</p>
				<ol>
					<li><a href="../editpage/editindex.php">About Kumbh</a></li>
					<li><a href="../editpage/editkumbh.php">Kumbh 2019</a></li>
					<li><a href="../editpage/edittravel.php">Travel And Stay</a></li>
					<li><a href="../editpage/editcitizen.php">Citizen Corner</a></li>
					<!-- <li><a href="../editpage/editgallery.php">Gallery</a></li> -->
					<li><a href="../editpage/editvisitor.php">Visitors Services</a></li>
					<li><a href="../editpage/editcontact.php">Contact Us</a></li>
				</ol>
				<hr style="margin-left: 50px;margin-right: 50px;color: red; ">
				<ol style="list-style-type: disc;">
					<li><a href="../editpage/editprayag.php">Tirthraj Prayag</a></li>
					<li><a href="../editpage/editharidwar.php">Haridwar</a></li>
					<li><a href="../editpage/editnashik.php">Nashik</a></li>
					<li><a href="../editpage/editujjain.php">Ujjain</a></li>
				</ol>
			</div>

			<div id="adminactive">
				<p style="text-align: center;color: brown;margin-top: 15px;font-size: 20px;text-decoration: underline;">REQUESTED ACCOUNTS</p>
				<?php
						
							echo "<table border=1 width=650px>";
							$users_counter=1;
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
							{
									echo "<tr><td><center>".$users_counter;
									echo "</td></center>";
									echo "<td><center>".$row['uname'];
									echo "</center></td>";
									echo "<td><center>".$row['eid'];
									echo "</center></td>";
									echo "<td><center>".$row['mnumber'];
									echo "</center></td>";
									echo "<td><center><a href=activate.php?id=".$row['id'].">activate</a></center></td>";
									echo "</tr>";
									$users_counter = $users_counter+1;

							}
					echo "</table>";

				mysql_close($conn);?>
			</div>
		</div>
	</body>
</html>
