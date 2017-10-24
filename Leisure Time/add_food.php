<?php
session_start();
include 'dbcon.php'; 
?>
<html>
<head>
	<title>Addfood</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div id="background">
<div id="page">
			<div id="header">
				<div id="logo">
					<a href="home.php"><img src="images/logo.png" alt="LOGO" height="30" width="98.5%"></a>
				
                  
                <div align="center" style="padding-top:150px;">
					<div style="border:solid; color:#FFFFFF; width:400px;" >
             				 <div  style="text-align: center;">
                   				<img src="images/logo.png" width="60" height="60" />
								<h2>Add a Food to the Database</h2>
              				 </div>
      				
							<form action="food.php?job=save" method="post" enctype="multipart/form-data">
                               	
								<div style="padding-top:10px;" align="center">
									<input style="width:300px; height:30px;" type="text" name="food_id" class="form-control" placeholder="Food ID">
								</div>
						   						
								<div style="padding-top:10px;" align="center">
									<input style="width:300px; height:30px;" type="text" name="fdname" class="form-control" placeholder="Name Of The Food">
								</div>
             				
								<div style="padding-top:10px;" align="center">
									<input style="width:300px; height:30px;" type="text" name="price" class="form-control" placeholder="Price Of The Food">
								</div>
							 
								<div style="padding-top:10px;" align="center">
									<input style="width:300px; height:30px;" type="file" name="image" class="form-control" placeholder="Image">
								</div>
							
								<div  align="center"  style="padding-top:10px; padding-bottom:10px; ">     
									<input type="submit" style=" width:200px; height:30px; color: white; background-color: DodgerBlue; " Value="   Add  "/>
								</div>		 
							</form>

								<?php
								include 'food_function.php';
								list_food()
								?>
					</div>
				</div>           
</div>
</body>
</html>
