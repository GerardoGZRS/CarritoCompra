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

	<?php
		if (isset($_POST['txtnom'])) {
		$asunto="Envio de Informacion ";
		$mensaje="El usuario: ".$_POST['txtnom']." envio informacion para usted ".
		"Mensaje: ".$_POST['txtobs']." Numero de telefono:".$_POST['txttel'];
		$destino="alfaweb@live.com.mx,MI_CORREO@hotmail.com";
		$remitente="De: MI_CORREO@hotmail.com";

		mail($destino, $asunto, $mensaje,$remitente);

		echo " <h3>Se han enviado sus comentarios </h3>";
		}else {
		echo "<h4>Aun no se envia ninguna informacion</h4>";
		}
	?>

			<h1>Contacto</h1>
			
			<form method="post" action="contacto.php">
			<h3>Nombre</h3> 
			<input class="inpForm" type="text" name="txtnom" placeholder="Nombre" required/>
			<h3>Telefono</h3> 
			<input class="inpForm" type="number" name="txttel" placeholder="Telefono" required/>
			<h3>Correo</h3> 
			<input class="inpForm" type="email" name="txtmail" placeholder="E-mail" required/>
			<h3>Comentarios</h3> 
			<textarea class="inpFormA" name="txtobs" placeholder="Dejanos un comentario para mejorar"></textarea><br/>
			<br/>
			<input class="captc" type="number" name="captcha"  placeholder="Captura el codigo" required>
			<br/><img id="captImg" src="capt.php">

			<br/><br/>

			<input class="btnSubmit" type="submit" value="Enviar" />
			</form>

	</div>



</div>










<!-- INICIO DEL FOOTER -->
<?php include("footer.php"); ?>

