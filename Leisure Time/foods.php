<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Foods</title>
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
						<li class="selected"><a href="foods.php">Food</a></li>
						<li><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
			<div id="contents">
			<div id="cover"> <img src="images/foodmain.jpg" alt="Img" height="325px" width="100%"> </div>
				<div class="box">
					<div>
						<div class="body">
							<h1>Food</h1>
								<div  align="right">
									<a href=search_food.php>
                        		 <input type="submit" style=" width:200px; height:30px; color: white; background-color: DodgerBlue; " Value="Search Food"/>
									</a>	
									
									<a href=Menu.php>
                        		 <input type="submit" style=" width:100px; height:30px; color: white; background-color: DodgerBlue; " Value="Menu"/>
									</a>	
							  </div>
							<ul id="foods">
								<li>
									<h2><a href="foods.php">Breakfast Special</a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/1.jpg" alt="Img" height="250" width="980" ><span class="cover" ></span></a>
										<p>
											Different type of bread,pastries and drinks such as Lattes and Cappuccinos.
										</p>
									</div>
								</li>
								<li>
									<h2><a href="foods.php">Lunch Special</a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/2.jpg" alt="Img" height="250" width="980"><span class="cover"></span></a>
										<p>
											 Our special lunches include a chicken fried rice, Imperial special prawns and mutton biryani. 
										</p>
									</div>
								</li>
								<li>
									<h2><a href="foods.php">Dinner Special</a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/3.jpg" alt="Img" height="250" width="980"><span class="cover"></span></a>
										<p>
											Most of the food they eat for lunch, they also eat dinner and include chicken submarine, butter naan and seafood fried noodles.. 
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>
				© 2017 by Carrefour. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>