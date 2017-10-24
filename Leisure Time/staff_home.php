<?php
session_start();
include 'dbcon.php'; 
?>
<html>
<head>
    <title>staff_home</title>
        <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<header>
		<!-- header image -->
		
		<img src="images/logoo.png"></a>
		<form>
		<ul id="login">
			<li><a href="index.php">Log out</a></li>
		</ul>
		</form>

		<!-- header 1 -->
		<h2>Staff home page</h2>
		<ul class="a">
			<li class="a"><a href="about.php">About</a></li>
			<li class="a"><a href="Cinema.php">Cinema</a></li>
			<li class="a"><a href="Leisures.php">Leisures</a></li>
			<li class="a"><a href="foods.php">Food</a></li>
			<li class="a"><a href="games.php">games</a></li>
			<li class="a"><a href="contact.php">Contact</a></li>
		</ul>
	</header>
	
	<div id="main">
		<h3>Categories</h3>
		<ul>
			<li><a href="Cinema.php">Cinema</a></li><br>
			<li><a href="Leisures.php">Leisures</a></li><br>
			<li><a href="add_food.php">Food Details </a></li><br>
			<li><a href="games.php">Games Details</a></li><br>	
		</ul>

	</div>
		<img src="Capturee.png" id="cover">
		
		<h3>Carrefour Features..</h3>
		
		<div class="img">
		<img src="images/cinema.jpg">
		
		</div>

		<div class="img">
		<img src="images/leisures.jpg">
		
		</div>
		
		<div class="img">
		<img src="images/food.jpg">
		
		</div>

		<div class="img">
		<img src="images/games.jpg">
		
		</div>

	<footer>
    © 2017 by Carrefour. All Rights Reserved
	</footer>

</body>

</html>