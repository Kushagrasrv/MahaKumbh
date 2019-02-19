<?php
	$newcontent = $_POST['editedval'];
	echo $newcontent;
	$filename = "../content/kumbh.txt";
	$fp = fopen($filename, "w");
	fwrite($fp, $newcontent);
	//echo  fread($fp, filesize($filename));
	header("Location: ../login/admin.php");
	exit;
?>