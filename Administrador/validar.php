
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	include '../bd/conexion.php';

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO '.$f2["user"].'")</script> ';
			echo "<script>location.href='Administrador.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username' and rol='2'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pasadmin']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			echo '<script>alert("BIENVENIDO '.$f["user"].'")</script> ';
			echo "<script>location.href='Administrador.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../pagina/login.php'</script>";
		}
	}
	
	$sentencia=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username' and rol='3'");
	if($f1=mysqli_fetch_assoc($sentencia)){
		if($pass==$f1['password']){
			$_SESSION['id']=$f1['id'];
			$_SESSION['user']=$f1['user'];
			$_SESSION['rol']=$f1['rol'];

			echo '<script>alert("BIENVENIDO '.$f1["user"].'")</script> ';
			echo "<script>location.href='../pagina/index.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../pagina/login.php'</script>";
		}
	}
	
	else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../pagina/index.php'</script>";	

	}

?>