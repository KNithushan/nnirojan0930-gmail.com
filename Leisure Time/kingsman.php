<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>kingsman</title>
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
						<img src="images/Kingsman 1.png" alt="Img" height="400" width="100%">
						
							<div class="box">
							<div class="body">
								<div class="section">
									<h1>Trailer</h1>
										<br><br><br><br><br><br><br><br>
										<div id="video">
											<video width="779" controls>
												<source src="Videos/Kingsman Trailer.mp4" type="video/mp4">
											</video>
										</div>
								</div>
							<br><br><br><br><br>
								<h5>about movie</h5>
									<p>The movie is a sequel to 2014 movie 'Kingsman: The Secret Service' and the series is based on the comic book 'The Secret Service', created by Dave Gibbons and Mark Millar.
									In "Kingsman: The Golden Circle," our heroes face a new challenge. When their headquarters are destroyed and the world is held hostage, their journey leads them to the discovery of an allied spy organization in the US called Statesman, dating back to the day they were both found. In a new adventure that tests their agents' strength and wits to the limit, these two elite secret organizations band together to defeat a ruthless common enemy, in order to save the world, something that's becoming a bit of a habit for Eggsy.</p>
									<p>Directed by : Matthew Vaughn</p>
									<p>Written by : Jane Goldman, Matthew Vaughn</p>
									<p>Cast :Colin Firth , Julianne Moore , Taron Egerton , Mark Strong , Halle Berry , Elton John , Channing Tatum , Jeff Bridges</p>
									<input type="button" style=" width:130px; height:30px; color: white; background-color: DodgerBlue;" value="Buy Tickets" onclick="signIn.php"/>	
							</div>
							</div>
		</div>
	</div>
			
		
			<br><br>
		<div id="footer">
			<div>
				
				
			</div>
			<p>
				© 2017 by carrefour. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>