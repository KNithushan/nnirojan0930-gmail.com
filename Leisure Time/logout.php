<?php
session_start();
session_destroy();
header("location:home.php?mes=You are Logout..");

?>