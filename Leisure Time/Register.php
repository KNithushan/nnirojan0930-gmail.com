<?php
session_start();
include 'dbcon.php'; 
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="home.html"><img src="images/logo.png" alt="LOGO" height="30" width="98.5%"></a><br><br>
					<div align="right" >
                <a href="signIn.html">
                <input type="submit"   Value="   Login   "/></a>
				</div>
				<div id="navigation">
					<ul>
						<li><a href="home.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="Cinema.html">Cinema</a></li>
						<li><a href="Leisures.html">Leisures</a></li>
						<li><a href="foods.html">Food</a></li>
						<li><a href="games.html">games</a></li>
						<li><a href="contact.html">Contact</a></li>	
						
					</ul>
				</div>
			</div>	
			<div id="contents" align="center">		
			<div id="slide_bar" align="center">
             	<div  style="text-align: center;">
								<h2>Create a new account</h2>
              	</div>
      				
                   <form action="bdcon.php" method="POST" onsubmit="return formValidate()" autocomplete="off" >
				   
       						<div align="center">
								<input style="width:300px; height:30px;" type="text" onblur="checkFirstName(this.value)" name="fname" class="form-control" placeholder="First Name">
								<div id="fn-error"></div>
							</div>
                            <div style="padding-top:10px;" align="center">
								<input style="width:300px; height:30px;" type="text" onblur="checkLastName(this.value)" name="lname" class="form-control" placeholder="Last Name">
								<div id="ln-error"></div>
							</div>
                            <div align="center" style="padding-top:10px;">
								<input style="width:300px; height:30px;" type="text" onblur="checkEmail(this.value)" name="email" class="form-control" placeholder="Email">
								<div id="email-error"></div>
							</div>
							<div style="padding-top:10px;" align="center">
								<input style="width:300px; height:30px;" type="contact_number" name="cnumber" class="form-control" placeholder="contact_number">
							</div>
							<div style="padding-top:10px;" align="center">
								<input style="width:300px; height:30px;" type="address" name="address" class="form-control" placeholder="address">
							</div>
                            <div align="center" style="padding-top:10px;">
								<input style="width:300px; height:30px;" type="password" id="password" onblur="checkPassword(this.value)" name="password" class="form-control" placeholder="New Password">
								<div id="pw-error"></div>
							</div>
                            <div align="center"style="padding-top:10px;">
								<input style="width:300px; height:30px;" type="password" onblur="checkCPassword(this.value)" name="confirm_password" class="form-control" placeholder="Confirm Password">
								<div id="cpw-error"></div>
							</div>
             				<div  align="center"  style="padding-top:10px; padding-bottom:10px; ">     
								 <input type="submit"  id="insert" name="insert" disabled style=" width:200px; height:30px; color: white; background-color: DodgerBlue;"  Value="Create Account "; />
							
							<a href="admin_home.html">
                <input type="submit"  style=" width:100px; height:30px; color: white; background-color:DodgerBlue; " Value="home "/></a>
							
							
		
							</div>
							
           			 </form>
					 <?php
        if(isset($_POST["insert"])) 
		{
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $cnumber = $_POST["cnumber"];
            $address = $_POST["address"];
            $password = $_POST["password"];

            if ($fname!="" && $lname!="" && $email!="" && $phone!="" && $address!="" && $password!="" ) {
                $select = "INSERT INTO member(fname,lname,email,cnumber,address,password) VALUES ('".$fname."','".$lname."','".$email."','".$cnumber."','".$address."','".$password."')";

                if  ($con->query($sql))
					{
						echo '<script type="text/javascript">';
						echo 'alert("Successfully Registered")';
						echo '</script>)';
					}
				else 
					{
						echo '<script type="text/javascript">';
						echo 'alert("Try Again")';
						echo '</script>';
					}
		}					
		else
					{
						echo '<script type="text/javascript">';
						echo 'alert("Files Not Filled!")';
						echo '</script>';
					}
        
		}
        ?>
        
          			</div>
   				 </div>
    </div>
   
    </div>
	</div>
 
    <script>
	 var validFirstName = false;
	 function checkFirstName(value){
		if(!value.match(/^[a-zA-Z]*$/)){
			validFirstName = false;
			document.getElementById('fn-error').innerHTML = 'Invalid first name.';
		}else{
			validFirstName = true
			document.getElementById('fn-error').innerHTML = '';
			// document.getElementById('fn-success').innerHTML = 'Valid first name.';
		}
		buttonEnable();
	 }

	 var validLastName = false;
	 function checkLastName(value){
		if(!value.match(/^[a-zA-Z]*$/)){
			validLastName = false;
			document.getElementById('ln-error').innerHTML = 'Invalid last name.';
		}else{
			validLastName = true;
			document.getElementById('ln-error').innerHTML = '';
			// document.getElementById('fn-success').innerHTML = 'Valid first name.';
		}
		buttonEnable();
	 }

	 var validEmail = false;
	 function checkEmail(value){
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!value.match(re)){
			validEmail = false;
			document.getElementById('email-error').innerHTML = 'Invalid email address.';
		}else{
			validEmail = true;
			document.getElementById('email-error').innerHTML = '';
			// document.getElementById('fn-success').innerHTML = 'Valid first name.';
		}
		buttonEnable();
	 }
	 
	 var validPassword = false;
	 function checkPassword(value){
		var re = /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/;
		if(!value.match(re)){
			validPassword = false;
			document.getElementById('pw-error').innerHTML = 'Invalid password.';
		}else{
			validPassword = true;
			document.getElementById('pw-error').innerHTML = '';
			// document.getElementById('fn-success').innerHTML = 'Valid first name.';
		}
		buttonEnable();
	 }

	 var validCPassword = false;
	 function checkCPassword(value){
		var password = document.getElementById('password').value;
		if(value !== password){
			validCPassword = false;
			document.getElementById('cpw-error').innerHTML = 'Password not match.';
		}else{
			validCPassword = true;
			document.getElementById('cpw-error').innerHTML = '';
			// document.getElementById('fn-success').innerHTML = 'Valid first name.';
		}
		buttonEnable();
	 }

	 function buttonEnable(){
		 if(validFirstName && validLastName && validEmail && validPassword && validCPassword){
			document.getElementById('submit-btn').disabled = false;
		 }else{
			document.getElementById('submit-btn').disabled = true;
		 }
	 }

 </script>  
   <div id="footer">
			<p>
				© 2017 by Carrefour. All Rights Reserved
			</p>
		</div>
</body>
</html>
