<!Doctype html>
<html lang="es">
<head>
	<title>VENTAS TIENDA</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosLogin.css">

</head>
</head>

<body>
	
	<?php include("../estilosAdmin/headerL.php"); ?>

<!-- FIN DEL HEADER -->



<div class="contenedor-general">


	<div class="formContact">

	<section  class="centrado">
	<div>
		<div class="md12 s12">&nbsp;</div>
		<div class="login-card">
			Iniciar Sesion<br>
			<br>
		  <form name="flogin" method="post" action="validar.php">
			<label>Usuario</label>
			<input type="mail" name="mail" placeholder="example@domine.com" required>
			<label>Contraseña</label>
			<input type="password" name="pass" id="pass" placeholder="" required>
			<input type="submit" value="Login" class="login login-submit">
			<br>
			<a href="recuperarContrasenia.php">Recuperar ContraseÃ±a</a>
		  </form>
		 
		</div>
		<div class="m12 s12">&nbsp;</div>
	</div>
	
</section>

	</div>



</div>










<!-- INICIO DEL FOOTER -->
<?php include("../pagina/footer.php"); ?>
