<?php
require 'dbcon.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>staff-carrefour </title>
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
<div align="center">
    <form method="get" action="staff.php">
        <table>
            <caption><b><h2>Member Details</h2></b></caption>
            <tr></tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" /></td>
            </tr>

            <tr>
                <td>last Name</td>
                <td><input type="text" name="lname" ></td>
            </tr>

            <tr>
                <td>email</td>
                <td><input type="number" name="email" ></td>
            </tr>
			<tr>
                <td>Phone number</td>
                <td><input type="number" name="cnumber" ></td>
            </tr>
			<tr>
                <td>address</td>
                <td><input type="text" name="address" ></td>
            </tr>
			<tr>
                <td>password</td>
                <td><input type="number" name="password" ></td>
            </tr>
			<tr>
                <td>
                    <input class="btn" type="submit" name="btnInsert" value="Insert"/>
                    <input class="btn" type="submit" name="btnUpdate" value="Update"/>
                    <input class="btn" type="submit" name="delete" value="Delete"/>
                </td>

                <td>
                  
                    <input class="btn" type="reset" name="btnReset" value="Reset"/>
                </td>
            </tr>
        </table>
    </form>


    <div align="center">
        <?php
        if(isset($_GET["fname"]) && isset($_GET["lname"]) && isset($_GET["email"])  && isset($_GET["cnumber"]) && isset($_GET["address"]) && isset($_GET["password"]))
        {
            $fname = $_GET["fname"];
            $lname = $_GET["lname"];
			$email = $_GET["email"];
			$cnumber = $_GET["cnumber"];
            $address = $_GET["address"];
            $password = $_GET["password"];
        }
        else{
            $error = "one data is not insert";
            echo $error;
        }

        if(isset($_GET["btnInsert"])){
            $insertString = "INSERT INTO member('$fname', '$lname', '$email', '$cnumber', '$address', '$password')";

            if(!mysql_query($insertString)){
                die('Error: '.mysql_error());
            }
            else{
                echo '<br/>';
                echo '1 record added..';
            }
        }

        else if(isset($_GET["btnUpdate"])){

            $updateString = "UPDATE member SET fname = '$fname', lname = '$lname', email='$email', cnumber='$cnumber', address='$address' , password='$password' WHERE fname='$fname'";

            if(!mysql_query($updateString)){
                die('Error: '.mysql_error());
            }
            else{
                echo '<br/>';
                echo '1 record updated...';
            }
        }

        else if(isset($_GET["delete"]))
        {
            $updateString = "DELETE FROM member WHERE fname='$fname'";

            if(!mysql_query($updateString)){
                die('Error : ' .mysql_error());
            }
            else
            {
                echo '<br/>';
                echo '1 record deleted...';
            }
        }
        ?>
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
