<?php
	
	$filename = "file.txt";
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
		echo "File Size : ".$filesize." <br><br>";
		echo "Content : <br><br>".$content;
	}

?>