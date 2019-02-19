<?php
	
	$filename = "../content/index.txt";
	$fp = fopen($filename, "r");
	if ($fp==false) 
	{
		echo "Error in file opening";
	}
	else
	{
		$filesize = filesize($filename);
		$content = fread($fp, $filesize);
		fclose($fp);
		//echo "File Size : ".$filesize." <br><br>";
		//echo "Content : <br><br>".$content;
	}

?>
<?php
	session_start();
	if(!isset($_SESSION['LOGGEDIN']))
		{
			header("Location: ../login/login.php");
			exit;
		}

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/edit.css">
</head>
<body>
	<center>
	<form action="insertindex.php" method="POST">
		<textarea rows="25" cols="100" name="editedval" id="edittext"><?php echo $content ?></textarea>
		<br>
		<input type="submit" value="SUBMIT" id="submit">
	</form>
	</center>
</body>
</html>
