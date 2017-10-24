<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Games</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="home.php"><img src="images/logo.png" alt="LOGO" height="30" width="98.5%"></a>	<br><br>
				<div align="right" >
                <a href="signIn.php">
                <input type="submit"   Value="   Login   "/></a>
                <a href="Register.php">
                <input type="submit" Value=" Register "/> </a>
                </div>
				</div>
				
				<div id="navigation">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="Cinema.php">Cinema</a></li>
						<li><a href="Leisures.php">Leisures</a></li>
						<li><a href="foods.php">Food</a></li>
						<li class="selected"><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
			<div id="contents">
            <div id="cover">
					<img src="images/gamemainpic.jpg" alt="Img" height="325" width="100%">
				</div>
				<div class="box">
					<div>
						<div id="games" class="body">							
							<div><h2>
                            Online Games
                            </h2>
								<iframe src="http://www.gameitnow.com/?utm_source=Ads&utm_medium=Adwords&utm_campaign=banner&gclid=CjwKCAjwxo3OBRBpEiwAS7X62XcnYlVT5abjaAYI2m-kvIlWiaM6X__DHBii5trsdHUxRTBw_2GXnRoCsQUQAvD_BwE"scrolling="auto" width="1280px" height="1000px">
</iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
		
			</div>
			<p>
				© 2017 by Carrefour. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>