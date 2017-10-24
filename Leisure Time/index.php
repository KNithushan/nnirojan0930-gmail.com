<?php
session_start();
include 'dbcon.php';
if(!isset($_SESSION['username']))
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>index-carrefour </title>
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
                <a href="home.php">
                <input type="submit"   Value="   Logout   "/></a>
                <a href="Register.php">
                <input type="submit" Value=" Register "/> </a>
                </div>
				</div>

					<div id="navigation">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li ><a href="Cinema.php">Cinema</a></li>
						<li><a href="Leisures.php">Leisures</a></li>
						<li><a href="foods.php">Food</a></li>
						<li><a href="games.php">games</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li></li><li></li><li></li><li></li>
						<li><input id="search" type="search" name="search" placeholder="Search.."style="height:50px"; autofocus></li>
					</ul>
				</div>
				
				  <div id="content">

        <form name="login" method="post" action="" onsubmit="" >
            <table cellpadding="6px" class="login_table" align="center">

                <tr>
                    <th> Admin Login</th>
                </tr>
                <tr>
                    <td> Username * <br>
                        <input type="text" name="username" style="height:30px; width:15em; border-radius:8px;"  autofocus></td>
                </tr>
                <tr>
                    <td> Password *<br>
                        <input type="password" name="password" style="height:30px; width:15em; border-radius:8px;" > </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="#"> Reset Password </a></td>
                </tr>
                <tr>
                    <th colspan="2"> <input id="resetcolor" type="submit" name="login" value="Login"> </th>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST["login"]))
		{
            $username = $_POST["username"];
            $password = $_POST["password"];

            if($username !="" && $password !="")
            {
                $sql ="SELECT Username,Password FROM admin WHERE Username='".$username."' AND Password='".$password."'";
                $result = $dbcon -> query($sql);
                if($result -> num_rows==1)
                {
                    $_SESSION["username"]=$username;
                    header("location:admin_home.php");
                }
                else
                {
                    echo "<span class='alert'><p> Invalid User or Password</p></span>";
                }
            }
            else
            {
                echo "<span class='alert'><p>Enter Username and Password</p></span>";
            }
		
        }
        ?>
		</div>
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