
<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Foods items</title>
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
						<li>
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						
						<li>
							<a href="Cinema.php">Cinema</a>
						</li>
						<li>
							<a href="Leisures.php">Leisures</a>
						</li>
						<li class="selected">
							<a href="foods.php">Food</a>
						</li>
						<li>
							<a href="games.php">games</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
							
						</li>
<li></li><li></li><li></li><li></li>						
					</ul>
				</div>
			</div>
			<div id="contents">
            
				<div class="box">
					<div>
						<div class="body">
							<h1>MENU</h1>
                             <div id="adbox">
								<img src="images/menu page.png" alt="Img" height="725" width="1280">
							</div>
   
						</div>
					</div>
				</div>
			</div>
		
		<div id="footer">
			<div>

				
			</div>
			<p>
				© 2016 by Hotel Imperial. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>