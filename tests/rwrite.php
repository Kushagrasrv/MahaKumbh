<?php
	
	$string = "newalpha";
	$fp = fopen("new.txt", "w");
	fwrite($fp, $string);
	echo  fread($fp, filesize("new.txt"));

?>