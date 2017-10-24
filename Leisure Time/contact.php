<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - carrefour</title>
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
						<li class="selected"> <a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
			<div id="contents">
            <div id="cover">
					<img src="images/hotel.jpg" alt="Img" height="325" width="100%">
				</div>
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contact</h1>
							 <form name ="message" method="POST" onsubmit="return formValidate()" autocomplete="off" >
							
								<div id="table">
                                <table>
									<tbody>
										<tr>
											<td>Name:</td>
											<td><input type="text" name="Name" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Email:</td>
											<td><input type="text"name="mail" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Subject:</td>
											<td><input type="text" name="subject" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Message:</td>
											<td><textarea type="text" name="message" placeholder="your Message" rows="5" style=" width:280px; height:80px;"></textarea></td></tr>

										<tr>
											<td><input type="submit" name="sms" value="" class="btn"></td>
										</tr>
									</tbody>
								</table></div>
								

							</form>
		<?php
		 if(isset($_POST["sms"])) 
		{
            $Name = $_POST["Name"];           
            $mail = $_POST["mail"];
            $subject = $_POST["subject"];
			$message = $_POST["message"];


            if ($Name!="" && $mail!="" && $subject!="" && $message!="") 
			{
                $sql = "INSERT INTO message (Name,mail,subject,message) VALUES ('".$Name."','".$mail."','".$subject."','".$message."')";

                if  ($con->query($sql))
					{
						echo '<script type="text/javascript">';
						echo 'alert("Successfully send")';
						echo '</script>';
					}	
				else
					{
						echo '<script type="text/javascript">';
						echo 'alert("Message Not Filled!")';
						echo '</script>';
					}
			}
		}
		?>
							<h2>Carrefour</h2>
							
							<p>
								<span>Telephone Number:</span> 0212220123
							</p>
							<p>
								<span>Email:</span> Carrefour@gmail.com
							</p>
                            <p>
								<span>Address:</span> Carrefour, hospital road, Jaffna, Sri Lanka
                                
							<br><br><br><br><br>	
							<h2>Map</h2>
                            <div style="padding-top:5px" height="325" width="0px";>
                             <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6614.622524980994!2d80.03002937868165!3d9.674369455220637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1507561411367" ></iframe>
							</div> 
							
							</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
       
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