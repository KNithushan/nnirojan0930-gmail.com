<?php

	$text = $_GET ['text'];
	$name = $_GET ['name'];
	$card_number= $_GET ['card_number'];
	$expiry_date = $_GET ['expiry_date'];
	$security_code = $_GET ['security_code'];
    $security_number = $_GET ['security_number'];
	payment_func($text, $name, $card_number, $expiry_date, $security_code,$security_number);	
?>
<?php
function payment_func($text, $name, $card_number, $expiry_date, $security_code,$security_number) {
	include 'dbcon.php';
	

	$query = "INSERT INTO payment (card_type, name, card_number, expiry_date, security_code,security_number)
	VALUES ('".$text."','".$name."','".$card_number."','".$expiry_date"','".$security_code."','".$security_number."')";

	mysqli_query($con, $query) or die (mysqli_error($con));
	
	header('location: signIn.php');	
    }
?>
