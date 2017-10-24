
<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	
	<title>carefour</title>
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
						<li>
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="cinema.php">cinema</a>
						</li>
						<li>
							<a href="Leisures.php">Leisures</a>
						</li>
						<li>
							<a href="foods.php">Food</a>
						</li>
						<li>
							<a href="games.php">games</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
			</div>
		<div id="contents">
			<div align="center" style="padding-top:100px;">
				<div style="border:solid; color:#FFFFFF; width:500px;hight:500px" >
					<div>
						<div class="body">
							<form action="payment.php" method="GET">
								<div id="table">
								<table>
									<tbody><h2>Pay Invoice</h2>
									<tr>
										<td>Card Type</td>
										<td><select name="text"> 
										<option value="Master Card">Master </option>
										<option value="Amex">Amex </option>
										<option value="Visa">Visa </option>	 
										</td>
									</tr>
									<tr>
										<td>Name on card:</td>
										<td><input type="text" name="name" class="txtfield"></td>
									</tr> 
									<tr>
										<td>Card Number:</td>
										<td><input type="text" name="card_number" class="txtfield"></td>
									</tr> 
									<tr>
										<td>Expiry Date:</td>
										<td><input type="text" name="expiry_date" class="txtfield" placeholder="MM / YY" maxlength="7"></td>
									</tr> 
									<tr>
										<td class="txtarea">Security Code:</td>
										<td><input type="text" name="security_code" class="txtfield"></td>
									</tr>  
									<tr>
										<td>Security Number:</td>
										<td><input type="text" name="security_number" class="txtfield"></td>
									</tr>
									<tr>
									<td>
									</td>
									<td><input type="submit" style=" width:200px; height:30px; color: white; background-color: DodgerBlue; " align="center" Value="   Pay Now  "/></td>
										</tr>
									</tbody>
								</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
				
		<div id="footer">
			<p>
				© 2016 by Megamall. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>
