<?php
    $mysqli=new mysqli('localhost','root','','carrito_compra');
	$mysqli->query("SET NAMES 'utf8'");
	if($mysqli->connect_error){
		echo 'Error: ' . $mysqli->connect_error;
	}else{
		
	}
?>
