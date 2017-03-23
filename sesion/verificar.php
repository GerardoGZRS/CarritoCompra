<?php
   	include '../bd/conexion.php';
   	if (!isset($_SESSION)) {
  	session_start();
	}
   	$usuario=$_POST["usuario"];
   	$contra=$_POST["password"];
	$contra = sha1($contra);
	
	$mysqli->query("Select * from usuarios WHERE usuario='".$usuario."' AND contrasenia='".$contra."'"); 
	$query=$mysqli->store_result();
   	
	$fila = $query->fetch_array(MYSQLI_NUM);
	

if (!$fila[0]){
		echo '<script language = javascript>
		alert("Usuario o Password incorrectos, por favor verifique.")
		self.location = "../login.php"
		</script>';	
	}else{
		$_SESSION['usario_boutique'] = $fila[1];
		$_SESSION['nivel_bouti'] = $fila[3];
		header("Location: ../index.php");
	}
?>