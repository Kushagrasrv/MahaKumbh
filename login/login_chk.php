<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$login_status="0";
	
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
	else
		{
			if($username=="admin@admin.co" and $password=="admin@123")
				{
					$_SESSION['LOGGEDIN']="admin";
					header("Location: admin.php");
					exit;
				}
			else
				{
					
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = 'root';
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
					if(! $conn )
						{
							die('Could not connect: ' . mysql_error());
						}
					$sql = 'SELECT * from user';
					mysql_select_db('SEM_5');
					$retval = mysql_query( $sql, $conn );
					if(! $retval )
						{
							die('Could not get data: ' . mysql_error());
						}
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
					{
						if($row['email']==$username and $row['password']==$password)
							{
								$login_status="1";
								//echo "user Found !!";
								break;
							}
					}
					
					if(!$login_status=="0")
						{
							$_SESSION['LOGGEDIN']="user";
							header("Location: user.php");
							exit;
						}
					else
						{
							$_SESSION['USER_STATUS']="false";
							header("Location: login.php");
							exit;
						}
				}
		}
	
?>