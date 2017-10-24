<?php
session_start();
include 'dbcon.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="home.php"><img src="images/logo.png" alt="LOGO" height="30" width="98.5%"></a><br><br>
					<div align="right" >
                <a href="home.php">
                <input type="submit"   Value="   home  "/></a>
				</div>
				</div><br>
	
			</div>
<div id="contents" align="center">
 <div id="slide_bar" align="center">          
<div align="center" style="padding-top:0px;">
<div style="border:solid; color:#FFFFFF; width:400px;" >
						<form>
							<form name="login" method="post" action="" onsubmit="" autocomplete="off">
							<div><br><br>
							<h2>Log in</h2>
							<h4>New to Carrefour  <a href="Register.php"> Register</a></h4>
							<div align="center">
								<input style="width:300px; height:30px;" type="text" onblur="checkedEmail(this.value)" name="email" class="form-control" placeholder="Email"autofocus>
								<div id="email-error"></div>
							</div>
							
                            <div style="padding-top:10px;" align="center">
								<input style="width:300px; height:30px;" type="password" onblur="checkedPasswordthis.value)" name="password" class="form-control" placeholder="Password">
								<div id="pw-error"></div>
							</div>
							<div colspan="2" align="center"><a href="#"> Reset Password </a></div>
             				<div  align="center"  style="padding-top:10px; padding-bottom:05px; ">     
								<input type="submit" style=" width:100px; height:30px; color: white; background-color: DodgerBlue; " name="loginl" Value="   Login   "/>
								</div>
						</form>
          			 <?php
    if(isset($_POST["loginl"]))
    {
        $username = $_POST["email"];
        $password = $_POST["password"];

        if($username !="" && $password !="")
        {
            $sql ="SELECT Email,Password FROM customer WHERE Email='".$username."' AND Password='".$password."'";
            $result = $con -> query($sql);
            if($result -> num_rows==1)
            {
                $_SESSION["email"]=$username;
                header("location:home.php");
            }
            else
            {
                echo '<script type="text/javascript">alert("Invalid Email or Password");</script>';
            }
        }
        else
        {
            echo '<script type="text/javascript">alert("Enter Email and Password");</script>';
        }
    }
    ?>

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

  <script>
   var validEmail = false;
	 function checkedEmail(value){
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!value.match(re)){
			validEmail = false;
			document.getElementById('email-error').innerphp = 'Invalid email address.';
		}else{
			validEmail = true;
			document.getElementById('email-error').innerphp = '';
			// document.getElementById('fn-success').innerphp = 'Valid first name.';
		}
		buttonEnable();
	 }
	 
	 var validPassword = false;
	 function checkedPassword(value){
		var re = /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/;
		if(!value.match(re)){
			validPassword = false;
			document.getElementById('pw-error').innerphp = 'Invalid password.';
		}else{
			validPassword = true;
			document.getElementById('pw-error').innerphp = '';
			// document.getElementById('fn-success').innerphp = 'Valid first name.';
		}
		buttonEnable();
	 }
    </script>
    </div>
	</div>

</body>
</html>



