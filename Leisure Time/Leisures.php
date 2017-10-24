
<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Leisures </title>
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
						<li class="selected"><a href="Leisures.php">Leisures</a></li>
						<li><a href="foods.php">Food</a></li>
						<li><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
			
			<div id="contents">
<img src="images/leisuresmain.jpg" alt="Img" height="325" width="100%">
					
				

				<div class="box">
					<div>
						<div class="body">
							<h1>Leisures</h1>
							<ul id="sites">
								<li>
									<a href="Leisures.php"><img src="images/01.jpg" alt="Img" width="400" height="294"></a>
								  <h2><a href="Leisures.php">Carrefour swimming service</a></h2>	
									<p>
										The Carrefour offers the full range of swimming services, including classes that can help you improve your fitness, lap swimming and individual and group swimming lessons.
									</p>
									<p>
									Our Pools
									The Carrefour features two pools:
A 25-yard, four-lane lap pool used for swim performance training, team activities and lap swimming. Schedule:<a href="sep lap pool.png">September</a>(Picture)<a href="oct lap pool.png">October </a> (picture)
A 90-degree warm water pool for fitness classes and physical therapy. Schedule:<a href="sem warm pool.png">September</a> (picture)<a href="oct warm pool.png">October </a>(picture)
									</p>
								</li>
								<li>
									<a href="Leisures.php"><img src="images/02.jpg" alt="Img" width="400" height="294"></a>
								  <h2><a href="Leisures.php">Bar</a></h2>
									<p>
										The Imperial bar an Irish Pub that has been crafted by Irish craftsmen to imbibe in the ultimate pub feel and indulge in some authentic pub grub in a welcoming atmosphere, fused elegantly with the stylish ambience of the grand lobby. For sheer comfort, for conversations, for the most delicious impromptu nourishment of the pub grub kind, for diverse music and for lounging with or without an agenda, we do believe there a few spots more welcoming than this one.
									</p>
								</li>
								<li>
									<a href="Leisures.php"><img src="images/playsch.jpg" alt="Img" width="400" height="294"></a>
									<h2><a href="wLeisures.php">Children's Areas</a></h2>
									<p>
										Facility was very clean! Some of the attendents seemed a bit rude and abrasive to the children. Lastly, please let parents bring their own coffee or snacks. Nothing available to fit the dietary or health needs of our family.
										Staff were all very friendly and helpful .
									</p>									
								</li>
								</li>
								<li>
									<a href="Leisures.php"><img src="images/03.jpg" alt="Img" width="400" height="294"></a>
									<h2><a href="Leisures.php">Gym</a></h2>
									<p>
										A gym, short for gymnasium, is an open air or covered location for gymnastics, athletics, and gymnastic services. The word is derived from the ancient Greek gymnasium. They are commonly found in athletic and fitness centers, and as activity and learning spaces in educational institutions. "Gym" is also slang for "fitness center", which is often an indoor facility.
									</p>									
								</li>
								<li>
										<a href="Leisures.php"><img src="images/waterridepic.jpg" alt="Img" width="400" height="280"></a>
										<h2><a href="Leisures.php">Water Rides</a></h2>								
										<p>						
											Imagine yourself floating in the world’s largest rooftop Infinity Pool, gazing down on the glittering city-skyline from 57 levels above. You won’t find a more spectacular photo-taking spot anywhere in Srilanka!
											After your swim, stretch out to sunbathe on a luxurious poolside lounger, or relax in the shade of a palm tree. Sip on Champagne as you experience the unforgettable beauty of a sunset amidst the clouds.
										</p>
									</li>
									<li>
										<a href="Leisures.php"><img src="images/hire-dodgems.jpg" alt="Img" width="400" height="280"></a>
										<h2><a href="Leisures.php">Bumber Cars</a></h2>
										<p>
										Everyone knows and loves the dodgems. Commonly known as Bumper Cars the dodgems have been entertaining children and adults alike since the  1920’s and have only got better over the years. Irvin Leisure provides a full range of dodgem cars from classic old-time dodgems for period events to high-octane modern dodgems, complete with lights and sounds to create the ultimate funfair dodgems experience. With a full range of track sizes and quantity of cars available we are sure to have the right dodgem set for your requirements.
										Track sizes start at 54 feet by 40 feet and go up to 100 feet by 50 feet, with lots of different sizes in between, prices are dependant on track size, amount of cars and type of dodgems required so it is important to call us and discuss your needs to ensure you get the right bumper cars for the right price.
										</p>
									</li>
							</ul>
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