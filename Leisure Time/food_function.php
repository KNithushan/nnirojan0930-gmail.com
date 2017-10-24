<?php
function search_food($name){
	include 'dbcon.php';

	if($name){
		$result=mysqli_query($conn, "SELECT * FROM food WHERE cancelstatus='0' AND name LIKE '"%$name%"'");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			echo '
			<div style="padding: 30px; background-color: #ecf0f1; border: solid 5px white;">
					<div>
						<div>
								 <img src="http://localhost/Leisure/admin/'.$row['image'].'" width=100px height=100px style="margin-left: 5px;"/>
						</div>
							<div>
								<h2>'.$row[food_id].' </h2>
								<h2>'.$row[fdname].' </h2>
								<h2>'.$row[price].' </h2>
							</div>
					</div>
			</div>';
		}

	}
}

