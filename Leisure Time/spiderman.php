<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>spiderman</title>
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
						<img src="images/spiderman coming.jpg" alt="Img" height="400" width="126.5%">
						
							<div class="box">
							<div class="body">
								<div class="section">
									<h1>Trailer</h1>
										<br><br><br><br><br><br><br><br>
										<div id="video">
											<video width="779" controls>
												<source src="Videos/Spider man Official Trailer.mp4" type="video/mp4">
											</video>
										</div>
								</div><br>
			
					
								
					<h1>about movie</h1>
					<p>The movie is based on the Marvel Comics character Spider-Man and it is intended to be the second reboot of the ‘Spider-Man’ film franchise and the sixteenth film of the Marvel Cinematic Universe (MCU). 
Thrilled by his experience with the Avengers, young Peter Parker returns home to live with his Aunt May. Under the watchful eye of mentor Tony Stark, Parker starts to embrace his newfound identity as Spider-Man. He also tries to return to his normal daily routine -- distracted by thoughts of proving himself to be more than just a friendly neighborhood superhero. Peter must soon put his powers to the test when the evil Vulture emerges to threaten everything that he holds dear. </p>
<p>Directed by : Jon Watts</p>
<p>Written by : Jonathan Goldstein, John Francis Daley</p>
<p>Cast :Tom Holland , Michael Keaton , Jon Favreau , Zendaya , Donald Glover , Tyne Daly , Marisa Tomei , Robert Downey Jr.</p>
					<input type="button" style=" width:130px; height:30px; color: white; background-color: DodgerBlue;" value="Buy Tickets" onclick="signIn.php"/>	
					</div>
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