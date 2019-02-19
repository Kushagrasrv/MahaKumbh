<?php

session_start();

if(!isset($_SESSION['LOGGEDIN']))
	{
		header("Location: login.php");
		exit;
	}

$id  = $_GET['id'];




$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = 'root'; //Leave it as blank

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {

die('Could not connect: ' . mysql_error());

}

$sql = 'SELECT * from tmpregister where id="'.$id.'"';

mysql_select_db('SEM_5');

$retval = mysql_query( $sql, $conn );

if(! $retval ) {

die('Could not get data: ' . mysql_error());

}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
{
	$iname =  $row['uname'];
	$iemail = $row['eid'];
	$ipass = $row['pass'];
	$imnumber = $row['mnumber'];
	
}

$sql = 'DELETE from tmpregister where id="'.$id.'"';
$retval = mysql_query( $sql, $conn );
mysql_close($conn);

?>

<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$dbname = 'SEM_5';

	$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
	if($conn->connect_error )
		{
			die('Could not connect: ' . $conn->connect_error);
		}



	$sql = "INSERT INTO user (name,email,password,mnumber) VALUES('".$iname."','".$iemail."','".$ipass."','".$imnumber."');";

	if ($conn->query($sql)=== TRUE)
	{
		//$_SESSION['REGISTER_USER']="TRUE";
		header("Location: admin.php");
		exit;
	}
	else
	{
		//$_SESSION['REGISTER']="TRUE";
		header("Location: admin.php");
		//echo $conn->connect_error;
		exit;
	}

	$conn->close();

?>