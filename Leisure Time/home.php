<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
						<div id="header">
							<div id="logo">
								<img src="images/logo.png" alt="LOGO" height="30" width="98.5%"></a>	<br><br>
									<div align="right" >
										<a href="signIn.php">
										<input type="submit"   Value="   Login   "/></a>
										<a href="Register.php">
										<input type="submit" Value=" Register "/> </a>
									</div>
							</div>
			
							<div id="navigation">
								<ul><li  class="selected"><a href="home.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="Cinema.php">Cinema</a></li>
									<li><a href="Leisures.php">Leisures</a></li>
									<li><a href="foods.php">Food</a></li>
									<li><a href="games.php">games</a></li>
									<li><a href="contact.php">Contact</a></li>	
								</ul>
							</div>
						</div>
				<div id="contents">
					<div id="cover">
						<img src="images/Capture.png" alt="Img" height="425px" width="100%">
						<h1>...CARREFOUR PLANET, CINEMA 20% OFF WEEKDAY TICKETS ON SALE NOW...</h1>
					</div>
						<div id="main">
							<div class="box"><br>
								<li><h3>[ NEWS ]</h3></li>
								<ul>
									<li>
										<h4><a href="Leisures.php"></a></h4>
										<span>August 29, 2017</span>
										<p>
										Visiting Carrefour planet just got much more affordable!  You can now take advantage of $50 weekday tickets for both Busch Gardens Tampa and Water rides through july 20, 2017.  This value-priced ticket saves you an incredible $39 on Busch Gardens tickets and $42 on Watter rides tickets.  It’s an incredible discount for families and makes your vacation in Carrefour planet much more budget-friendly. <br><br>
										You can dive into life under the sea at Water rides planet.  Famous for their interactive sea life shows and aquatic attractions, Water rides planet has been on the forefront of marine-life based amusements since their first carrefour planet opened in 2000.  Today, guests are transported to an immersive environment , one-of-a-kind aquatic and shows starring talented sea life take center stage.
											<a href="Leisures.php">More</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
							<ul><div id="sidebar">	
									<div class="section">
										<a href="Cinema.php"><img src="images/cinema.jpg" alt="Img"></a>
									<div class="section">
										<a href="leisures.php"><img src="images/leisures.jpg" alt="Img"></a>
									<div class="section">
										<a href="foods.php"><img src="images/food.jpg" alt="Img"></a>
									<div class="section">
										<a href="games.php"><img src="images/games.jpg" alt="Img"></a>	
									</div>
									</div>
									</div>
									</div>
								</div>
							</ul>
								<div id="sidebarl">
								<a href="Cinema.php">
									<img src="images/FIL.png" alt="Img" height="327" width="1004"><br>
									
								</div>
				</div>
					<div id="mainl">
						<div class="boxx">
							<div class="sidebar">
								<h2><a href="http://www.bbc.com/news">BBC</a> Updates</h2>
								<ul type="disc">
									<li>
										<a href="http://www.bbc.com/weather/"> Wether Report</a>
									</li>
									<li>
										<a href="http://shop.bbc.com/">Shop</a>
									</li>
									<li>
										<a href="http://www.bbc.com/sport">Sports News</a>
									</li>
									<li>
										<a href="http://www.bbc.com/travel/">Travel</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="main">
						<div class="box">
							
							<ul><li><h3>Testimonials</h3>
								<p>
									Hi,i saw the addvert of the family fun fair at clapham common. i wish to visit but dont live local at clapham so am wondering if you can post a more specific address. thanks NG.
									<span>- <a href="home.php">Juan De La Cruz</a></span>
								</p>
							</li></ul>
							<ul><li>
								<p>
									“I really wanted to convey to you what a wonderful experience I had because of your delightful staff of associates. The people I mentioned provided outstanding service and I have to believe that everyone else behaves in the same manner. There is nothing that I could offer to you in terms of improving my experience. ” 
									<span>- <a href="home.php">chanthika perra</a></span>
								</p>
							</li></ul>
							<ul><li>
								<p>
									“I really wanted to convey to you what a wonderful experience I had because of your delightful staff of associates. The people I mentioned provided outstanding service and I have to believe that everyone else behaves in the same manner.” 
									<span>- <a href="home.php">Dilan</a></span>
								</p>
							</li></ul>	
						</div>
					</div>
				
					
		</div>
	</div>
		<div id="footer">
		<p>
		316, Ethul Kotte Road, Battaramulla, Sri Lanka
TELE:01101210165
E.MAIL:WE@CARREFOUR.LK</p>
			<p>
				© 2017 by Carrefour. All Rights Reserved
			</p>
		</div>
	</div>
	</div>
</body>
</html>
