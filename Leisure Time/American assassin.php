<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>american assassin</title>
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
						<li><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
					</div>
					<div id="contents">
						<img src="images/American Assassin 1.png" alt="Img" height="400px" width="100%">
						
							<div class="box">
							<div class="body">
								<div class="section">
									<h1>Trailer</h1>
										<br><br><br><br><br><br><br><br>
										<div id="video">
											<video width="779" controls>
												<source src="Videos/American Assassin Official Trailer HD.mp4" type="video/mp4">
											</video>
										</div>
								</div>
								
								<div class="section">
									<h1>about movie</h1>
										<p>The movie is based on Vince Flynn's 2010 novel of the same name.
											When Cold War veteran Stan Hurley takes CIA black ops recruit Mitch Rapp under his wing, they receive an assignment to investigate a wave of random attacks on both military and civilian targets. After discovering a pattern of violence, Hurley and Rapp join forces with a lethal Turkish agent to stop a mysterious operative who wants to start a global war.</p>
										<p>Directed by : Michael Cuesta</p>
										<p>Written by : Stephen Schiff, Michael Finch, Edward Zwick, Marshall Herskovitz</p>
										<p>Cast : Dylan O'Brien , Michael Keaton ,Sanaa Lathan , Shiva Negar , Taylor Kitsch , David Suchet , Navid Negahban , Scott Adkins </p>
									<input type="button" style=" width:130px; height:30px; color: white; background-color: DodgerBlue;" value="Buy Tickets" onclick="signIn.php"/>	
								</div>
							</div>
							</div>
							</div>
					</div>
		<div id="footer">
			<p>
				© 2017 by carrefour. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>