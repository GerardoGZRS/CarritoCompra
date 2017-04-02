<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location: /Carrito_Compra/pagina/index.php");
}
else{
	header("location:/Carrito_Compra/pagina/index.php");
}
?>