<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>About-carrefour </title>
	<script type="text/javascript" src="a.js"></script>
 <link rel="stylesheet" type="text/css" href="css/style.css">

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
						<li class="selected"><a href="about.php">About</a></li>
						<li><a href="Cinema.php">Cinema</a></li>
						<li><a href="Leisures.php">Leisures</a></li>
						<li><a href="foods.php">Food</a></li>
						<li><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="   Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
				
					
			
			<div id="contents">
           
					<img src="images/aboutpic.jpeg" alt="Img" height="325" width="100%">
				

				<div class="box">
					<div>
						<div class="body">
							<h4>About Us</h4>
							<p>Poised on the four of serene water ways and framed by luscious green pastures dovetailed with pools filled with exotic water lilies, “carrefour” elucidates a picturesque tranquility in the capital of sri lanka. 

Situated in a quaint location the hotel proposes various islets of beauty, comfort and wellness, offering its guests a spacious state of the art fitness center, a large pool to relax with family and friends and a plush spa specializing in a total rejuvenation for mind, body and soul, making it a perfect getaway for guests. Although this expansive estate was once rooted as ‘members only’, today spearheaded by the general manager, mr.rohan. Carrefour has something for everyone. 

Dining at the hotel is a gourmet experience with several dining options to choose from. Pranzo, the hotels italian restaurant offers mouthwatering authentic italian cuisine whimsically put together by chef leonardo ricci: the hotels food and wine consultant together with chef buddhika samarasekera and his esteem culinary team, to provide guests with an array of italy’s most renowned dishes. From authentic italian pizza, delicious pasta with flavorful sauces to the restaurants very own homemade ice cream, makes pranzo the perfect dining venue. 

Essentials ratifies as the hotels patisserie, featuring the popular “grab and go” concept, offering fresh breads, juices, delectable cakes and sweet treats. 

The boardwalk, located away from the main property, provides guests with a breathtaking view of the lake and a “must see” for all visitors, offering a casual lounge experience, with a selection of mouth-watering tapas and mains.
.</p>
	
							
							<div class="ads">
							
							<h2 align="center">CONTACT  INFORMATION</h2>
							<h4 align="center"> 316, Ethul Kotte Road, Battaramulla, Sri Lanka</h4>
							<h4 align="center"> TELE:01101210165</h4>
							<h4 align="center">E.MAIL:WE@CARREFOUR.LK</h4>
		
		<form name="myForms">
		<table align="center">
		<tr><td><input type="text" name="Name" placeholder="Name" style=" width:350px; height:30px;"></td><br></tr>
		<tr><td><input type="email" name="mail" placeholder="E-mail Address"style=" width:350px; height:30px;"></td></tr>
		<tr><td><textarea type="text" name="address" placeholder="Address" style=" width:350px; height:50px;"></textarea></td></tr>
		<tr><td><input type="text" name="cnumber" placeholder="Telephone" style=" width:350px; height:30px;"></tr>
		<tr><td><textarea type="text" name="Message" placeholder="your Message" rows="5" style=" width:350px; height:60px;"></textarea></td></tr>
		<tr><td><input type="submit" name="aboutsms" align="center" style=" width:155px; height:30px; color: white; background-color:DodgerBlue; " Value=" Send Message "/></td></tr>
		</table>
		</form>
		<?php
		 if(isset($_POST["aboutsms"])) 
		{
            $Name = $_POST["Name"];           
            $mail = $_POST["mail"];
			$address = $_POST["address"];
            $cnumber = $_POST["cnumber"];
			$message = $_POST["message"];


           if ($Name!="" && $mail!="" && $address!="" && $cnumber!="" && $message!="") 
			{
                $sql = "INSERT INTO aboutmes (Name,mail,address,cnumber,message) VALUES ('".$Name."','".$mail."','".$address."','".$cnumber."','".$message."')";

                if  ($con->query($sql))
					{
						echo '<script type="text/javascript">';
						echo 'alert("Successfully send")';
						echo '</script>';
					}	
				else
					{
						echo '<script type="text/javascript">alert("Message Not Filled!");</script>';
					}
			}
		}
		?>
		
		
							</div> <h2>Gallery</h2>
			<div class="container">
			<div class="slider_wrapper">
				<ul id="image_slider">
					<li><img src="images/slide-1.jpg"></li>
					<li><img src="images/slide-2.jpg"></li>
					<li><img src="images/slide-3.jpg"></li>
                   
					
				</ul>					
				<span class="nvgt" id="prev"></span>
				<span class="nvgt" id="next"></span>
			</div>
			</div>
		
		
        <div id="video"><br><br><br>
        <video width="600" controls>
  		<source src="Videos/about.mp4" type="video/mp4">
		</video>
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