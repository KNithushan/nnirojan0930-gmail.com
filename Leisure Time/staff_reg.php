<?php
session_start();
include 'dbcon.php'; 
?>
<html>
<head>
    <title>staff_reg</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	  <script type="text/javascript">
        function formValidate()
{
	var firstname = document.forms["myForms"]["fname"].value;
	var pw = document.forms["myForms"]["fpw"].value;
	var cpw = document.forms["myForms"]["cpw"].value;
	var regNo = document.forms["myForms"]["regNo"].value;
	var contactNum = document.forms["myForms"]["cnumber"].value;
	var seContactNum = document.forms["myForms"]["scnumber"].value;
	var email = document.forms["myForms"]["email"].value;
	
	
	
	if(validFname(firstname))
		if(checkPassword(pw))
		if(confirmPassword(cpw))
			if(regNoValidation(regNo))
				if(validContactNum(contactNum))
					if(valid2ndContactNum(seContactNum))
						if(emailValidation(email))
							return true;
						else
							return false;
					else
						return false;
				else
					return false;
			else
				return false;
				else
				return false;
		else
			return false;
	else
		return false;

}

function isEmpty(elemValue,field)
	{
		if(elemValue=="" || elemValue==null)
		{
			alert("Error: You Cannot Have "+ field +" Filed Empty");
			return true;
		}
		else
			return false;
	}
	
function validFname(elemValue)
{
	var exp = /^[a-zA-Z]+$/;
		if(!isEmpty(elemValue,"First Name"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please Enter Alphabetical Character for your First name");
				return false;
			}
		}
		else
			return false;
}


function checkPassword(elemValue)
{
    if(elemValue != "" || elemValue==null) 
	{
		if(elemValue.length < 8) 
		{
			alert("Error: Password must contain at least eight characters!");
			return false;
		}
		exe = /[0-9]/;
		if(!exe.test(elemValue)) 
		{
			alert("Error: password must contain at least one number (0-9)!");
			return false;
		}
		exe = /[a-z]/;
		if(!exe.test(elemValue)) 
		{
			alert("Error: password must contain at least one lowercase letter (a-z)!");
			return false;
		}
		exe = /[A-Z]/;
		if(!exe.test(elemValue)) 
		{
			alert("Error: password must contain at least one uppercase letter (A-Z)!");      
			return false;
		}
		else
			return true;
	}
	else 
	{
		alert("Error: Please check that you've entered and confirmed your password!");
		return false;
	}
}


function confirmPassword(elemValue)
{
	if(elemValue == document.forms["myForms"]["fpw"].value ) 
	{
		return true;
	}
	else
	{
		alert("Error: Please check cofirmed password");
		return false;
	}
}
function regNoValidation(elemValue)
{
	if(!isEmpty(elemValue,"Registration Number"))
	{
		if(elemValue != '' && elemValue.length > 2)
		{
            var shortRegNo = elemValue.substring(0,2);
            var validRegNo = /^(R|E|A)/;
            if(!shortRegNo.match(validRegNo))
			{
                alert("Error: Registration number must start with R / E / A");
                return false;
            }
			exe = /[0-9]/;
			if(!exe.test(elemValue)) 
			{
				alert("Error: Registration number must number!");
				return false;
			}
			
			if(elemValue.length < 10 ) 
			{
				alert("Error: Registration number must 10 numbers");      
				return false;
			}
			else
				return true;
        }
		else false;
	}
	else
		return false;
}



function validContactNum(elemValue)
	{
		if(!isEmpty(elemValue,"Contact Number"))
		{
			var exp = /^[0-9]+$/;
			if(!elemValue.match(exp))
			{
				alert("Error: Contact number must numbers!");
				return false;
			}
			if(elemValue.length < 10 ) 
			{
				alert("Error: Contact Number must 10 numbers");      
				return false;
			}
			if(elemValue.length > 10 ) 
			{
				alert("Error: Contact Number must 10 numbers");      
				return false;
			}
			else
			{
				return true;
			}
		}
		else
			return false;
	}
function valid2ndContactNum(elemValue)
	{
		if(!isEmpty(elemValue,"Contact Number"))
		{
			var exp = /^[0-9]+$/;
			if(!elemValue.match(exp))
			{
				alert("Error: Contact number must numbers!");
				return false;
			}
			if(elemValue.length < 10 ) 
			{
				alert("Error: Contact Number must 10 numbers");      
				return false;
			}
			if(elemValue.length > 10 ) 
			{
				alert("Error: Contact Number must 10 numbers");      
				return false;
			}
			else
			{
				return true;
			}
		}
		else
			return false;
	}

function emailValidation(elemValue)
	{
		if(!isEmpty(elemValue,"Email"))
		{
			var atops = elemValue.indexOf("@");
			var dotops = elemValue.indexOf(".");
			
			if(atops < 1 ||  dotops + 2 >= elemValue.length || atops +2 > dotops)
			{
				alert(" Enter a valid email address");
				return false;
			}
			else
				return true;
		}
		else
			return false;
	}
	
</script>	
</head>
<body>
	<header>
		<!-- header image -->
		
		<img src="images/logoo.png"></a>
		<form>
		<ul id="login">
			<li><a href="next page12.php">Register</a></li>
			<li><a href="login.php">Log in</a></li>
		</ul>
		</form>

		<!-- header 1 -->
		<h2>Staff Register Form</h2>
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
			<li><a href="food.php">Food Details </a></li><br>
			<li><a href="games.php">Games Details</a></li><br>
			
				
		</ul>
		</div>
		
		
		<h3 align="center">Application for Carre four staff</h3>
		
		<form name="myForms" onsubmit="return formValidate()">
		<table align="center">
		
		<tr><td> First name: </td>
		<td><input type="text" name="fname" placeholder="First Name" id="fname"></td><br>
		</tr>
		<tr><td>Status </td>
		<td><select id="Status" name="status"><br>
		<option >Mr</option> <option >Mrs</option> <option >Miss</option>
		</select><br></td>
		</tr>
		<tr><td> User Name: </td>
		<td><input type="text" name="username" placeholder="User Name" id="username"></td>
		</tr>
		<tr><td> Password: </td>
		<td><input type="password" name="fpw" id="fpw" ></td>
		</tr>
		<tr><td> Confirm Password: </td>
		<td><input type="password" name="cpw" id="cpw"></td></td>
		</tr>
		<tr><td> Staff Reg No: </td>
		<td><input type="text" name="regNo" id="regno" placeholder="IT/BM/EN/17000000"></td>
		</tr>
		<tr><td>Postal Address: </td>
		<td><textarea name="address" id="pa" rows="3"></textarea></td>
		</tr>
		<tr><td>Contact Number: </td>
		<td><input type="text" id="cnum" name="cnumber" placeholder="0112000000"> <br><br>
		</tr>
		<tr><td>E-mail Address:</td>
		<td><input type="email" name="email" id="email"></td>
		</tr>
		<tr><td>
			<input  type="Reset" value="Reset" Onclick="window.location.href='next page12.php'">
			<input  type="Submit" value="Submit" onclick="formValidate()" id="im3" >
			<input  type="button" name="Back" value="Back" Onclick="window.location.href='staff_home.php'"></td>
		</tr>
		</table>
		</form>
		</div>
		 <?php
        if(isset($_POST["im3"])) 
		{
            $fname = $_POST["fname"];
            $status = $_POST["status"];
			$username = $_POST["username"];
			$fpw = $_POST["fpw"];
			$cpw = $_POST["cpw"];
			$regNo = $_POST["regNo"];
			$address = $_POST["address"];
			$cnumber = $_POST["cnumber"];
            $email = $_POST["email"];
            

            if ($fname!="" && $status!="" && $username!="" && $fpw!="" && $cpw!="" && $regNo!=""  && $address!="" && $cnumber!="" && $email!="" ) {
                $select = "INSERT INTO staff(fname,status,username,fpw,cpw,regNo,address,cnumber,email) VALUES ('".$fname."','".$status."','".$username."','".$cnumber."','".$fpw."','".$cpw."','".$regNo."','".$address."','".$cnumber."','".$email."')";

                if  ($con->query($sql))
					{
						echo '<script type="text/javascript"> alert("Successfully Registered");</script>');
					}
				else 
					{
						echo '<script type="text/javascript">alert("Try Again");</script>';
					}
		}					
		else($con->query())
					{
						echo '<script type="text/javascript">alert("Files Not Filled!");</script>';
					}
        
		}
        ?>
	<footer>
    © 2017 by Carrefour. All Rights Reserved
	</footer>

</body>

</html>