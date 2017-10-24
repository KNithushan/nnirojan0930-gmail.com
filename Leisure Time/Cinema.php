<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cinema</title>
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
						<li class="selected"><a href="Cinema.php">Cinema</a></li>
						<li><a href="Leisures.php">Leisures</a></li>
						<li><a href="foods.php">Food</a></li>
						<li><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
			
			<div id="contents">
            
					<img src="images/seat booking.jpg" alt="Img" height="325" width="100%">
					<h1><br>Carrefour cinema Book is an online in anywhere.</h1>
				<div class="box">
					<div>
						<div class="body">
							<h1>Movies</h1>
							<div class="row">
								<div class="column">
									<div class="content">
										<a href="American assassin.php"><img src="images/american assassin.png" alt="Img"></a>
										<h2><a href="American assassin.php">American assassin</a></h2>
											<div class="rating">
												<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
											</div>
											<div align="left"> <a href="signIn.php"><input type="submit" style=" width:130px; height:30px; color: white; background-color: DodgerBlue; " Value="   Buy Tickets   "/> </a>
											</div>
									</div>
								</div>	
								<div class="column">
									<div class="content">
										<a href="kingsman.php"><img src="images/kingsman.png" alt="Img"></a>
										<h2><a href="kingsman.php">Kingsman</a></h2>
											<div class="rating">
												<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
											</div>
											<div align="left"> <a href="signIn.php"><input type="submit" style=" width:130px; height:30px; color: white; background-color: DodgerBlue; " Value="   Buy Tickets   "/> </a>
											</div>
									</div>
								</div>	
								<div class="column">
									<div class="content">
										<a href="spiderman.php"><img src="images/spiderman.png" alt="Img"></a>
										<h2><a href="spiderman.php">Spiderman</a></h2>
											<div class="rating">
												<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
											</div>
											<div align="left"> <a href="signIn.php"><input type="submit" style=" width:130px; height:30px; color: white; background-color: DodgerBlue; " Value="   Buy Tickets   "/> </a>
											</div>
									</div>
								</div>	
							</div>
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
