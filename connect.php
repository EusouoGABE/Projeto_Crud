<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "crud";
	$link = mysqli_connect($host,$user,$pass,$db); 

	if(mysqli_errno($link)) {
		echo "<script>alert('Não foi possivel conectar');</script>";
	} 
?>