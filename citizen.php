<?php
	
	$filename = "content/citizen.txt";
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
					<p class="topic_heading">CITIZEN CORNER</p>
					<?php //echo "<p class=index_content>".$content."</p>"; ?>
					
					
					<p class="topic_heading" style="font-size: 20px;">Dehati Rasgullah <br><br>It is a famous sweet Shop of Prayagraj , which is located in Alopibagh.</p>


					<p class="topic_heading" style="font-size: 20px;">Hariram Namkeen And Sweets <br><br>It is a famous sweet and Namkeen Shop of Prayagraj , which is located in  Chowk .</p>

					<p class="topic_heading" style="font-size: 20px;">Shiv Chat Bhandaar <br><br>It is a famous Chaat Shop of Prayagraj , which is located in New Bairhana. .</p>

					<p class="topic_heading" style="font-size: 20px;">Jaiswal Ke Dhossa <br><br>It is a famous Dosa Shop of Prayagraj , which is located in Medical Chauraha..</p>

					<div style="margin-left:50px;margin-top:50px;width: 950px; height: 300px;">
						<div style="width: 230px; height: 300px;margin-left: 5px; float: left;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d28824.92204242985!2d81.874685!3d25.43441!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39854b7fb2c2cf19%3A0xbd012765373d97e2!2sSANGAM+VIEW+POINT%2C+sangam+area%2C+Prayagraj%2C+Uttar+Pradesh+211008!3m2!1d25.4257025!2d81.8867556!4m5!1s0x399acaaeb2eef723%3A0x5d29e53b06c604af!2sDehati+Rasgulla%2C+Madhwapur%2C+Prayagraj%2C+Uttar+Pradesh!3m2!1d25.443078399999997!2d81.8617799!5e0!3m2!1sen!2sin!4v1543252814023" width="230" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div style="width: 230px; height: 300px;margin-left: 5px; float: left;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d57645.90020871541!2d81.79586524834994!3d25.442650748194893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x39854b7fb2c2cf19%3A0xbd012765373d97e2!2sSANGAM+VIEW+POINT%2C+sangam+area%2C+Prayagraj%2C+Uttar+Pradesh!3m2!1d25.4257025!2d81.8867556!4m5!1s0x399accaa495a7617%3A0x9d01faf7e7ec17a4!2sshiv+chat+allahabad!3m2!1d25.436494999999997!2d81.776338!5e0!3m2!1sen!2sin!4v1543253587696" width="230" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div style="width: 230px; height: 300px;margin-left: 5px; float: left;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d28825.61263626882!2d81.843256569472!3d25.43152341239689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x39854b7fb2c2cf19%3A0xbd012765373d97e2!2sSANGAM+VIEW+POINT%2C+sangam+area%2C+Prayagraj%2C+Uttar+Pradesh!3m2!1d25.4257025!2d81.8867556!4m5!1s0x399acacd502d619f%3A0x788c98bbc98a50b!2shari+ram+ke+sweets+and+namkeen+allahabad!3m2!1d25.4362639!2d81.834001!5e0!3m2!1sen!2sin!4v1543253821899" width="230" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div style="width: 230px; height: 300px;margin-left: 5px; float: left;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d28823.532513958766!2d81.85194686948437!3d25.440217112140697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x39854b7fb2c2cf19%3A0xbd012765373d97e2!2sSANGAM+VIEW+POINT%2C+sangam+area%2C+Prayagraj%2C+Uttar+Pradesh!3m2!1d25.4257025!2d81.8867556!4m5!1s0x399acab0916425dd%3A0x671a2b5975c6d2cf!2sjaiswal+ka+dosa!3m2!1d25.4472946!2d81.8515721!5e0!3m2!1sen!2sin!4v1543253312828" width="230" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dehati Rasgullah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hariram Namkeen and Sweets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shiv Chat Bhandaar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jaiswal Ke Dhossa</p>
				</div>
			</div>
		</div>
			<!--	<div class="bottom"></div>	-->
	</div>
</body>
</html>
