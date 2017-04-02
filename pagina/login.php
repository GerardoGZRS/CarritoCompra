<!Doctype html>
<html lang="es">
<head>
	<title>VENTAS TIENDA</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
</head>

<body>
	
	<?php include("header.php"); ?>

<!-- FIN DEL HEADER -->



<div class="contenedor-general">


	<div class="formContact">
<center>
	<div class="login-card">
			Iniciar Sesion<br>
			<br>
		  <form name="flogin" method="post" action="../Administrador/validar.php">
			<h3>Usuario</h3>
			<input type="mail" name="mail" placeholder="" required><br>
			<h3>Contraseña</h3>
			<input type="password" name="pass" id="pass" placeholder="" required><br><br>
			<input type="submit" value="Login" class="login login-submit">
			<br>
			<a href="recuperarContrasenia.php"><h3>¿Olvidaste tu contraseña?</h3></a>
			
			<br>
			¿eres nuevo en SalesPoint? <br>
			<input type="button" onclick="window.open('registro.php', '_self')" value="Registrate">
			
		  </form>
		 
		</div>
</center>
	</div>



</div>










<!-- INICIO DEL FOOTER -->
<?php include("footer.php"); ?>
