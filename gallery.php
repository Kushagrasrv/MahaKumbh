<?php
	
	$filename = "content/gallery.txt";
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

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="outer">
		<div class="top">
			<span><a href="login/login.php" target="_blank">LOGIN</a></span>
		</div>
		<div class="middle">
			<div class="left">
				<div class="left_top">
					<img src="images/kumbh.jpg" width="120px" height="120px">
					<p>Kumbh Mela<br/>2019</p>
				</div>
				<div class="left_bottom">
					<p>Menu</p>
					<div class="menu">
						<ul>
							<li><a href="index.php">ABOUT KUMBH</a></li>
							<li><a href="kumbh.php">KUMBH 2019</a></li>
							<li><a href="travel.php">TRAVEL & STAY</a></li>
							<li><a href="citizen.php">CITIZEN CORNER</a></li>
							<li><a href="gallery.php">GALLERY</a></li>
							<li><a href="visitor.php">VISITORS SERVICES</a></li>
							<li><a href="contact.php">CONTACT US</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="right_top">
					<div class="right_top_top"></div>
					<div class="right_top_bottom">
						<ul>
							<li><a href="prayag.php">TIRTHRAJ PRAYAG</a></li>
							<li><a href="haridwar.php">HARIDWAR</a></li>
							<li><a href="nashik.php">NASHIK</a></li>
							<li><a href="ujjain.php">UJJAIN</a></li>
						</ul>
					</div>
				</div>
				<div class="right_bottom">
					<p class="topic_heading">GALLERY</p>
					<?php //echo "<p class=index_content>".$content."</p>"; ?>
					<img src="images/6.jpg" style="margin-left: 50px;margin-top: 50px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/7.jpg" style="margin-left: 10px;margin-top: 50px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/8.jpg" style="margin-left: 10px;margin-top: 50px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/9.jpg" style="margin-left: 50px;margin-top: 10px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/10.jpg" style="margin-left: 10px;margin-top: 10px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/11.jpg" style="margin-left: 10px;margin-top: 10px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/12.jpg" style="margin-left: 50px;margin-top: 10px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/13.jpg" style="margin-left: 10px;margin-top: 10px;border: 1px solid black;" width="300px" height="300px">
					<img src="images/14.jpg" style="margin-left: 10px;margin-top: 10px;border: 1px solid black;" width="300px" height="300px">
				</div>
			</div>
		</div>
			<!--	<div class="bottom"></div>	-->
	</div>
</body>
</html>
