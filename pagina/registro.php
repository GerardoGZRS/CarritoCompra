<!Doctype html>
<html lang="es">
<head>
	<title>VENTAS TIENDA</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="../pages/estados/script.js"></script>

</head>
</head>

<body class="bo">
	
	<?php include("header.php"); ?>

<!-- FIN DEL HEADER -->



<div class="contenedor-general">


	<div class="formContact">

	 <form method="post" action="../clientes/guardarClientes.php" autocomplete="off">
        <center>
            <br><br>
            <label>Correo Electronico</label>
            <br>
            <input type="email" name="correo" size="25" required />
            <br><br>
            <label>Nombre</label>
            <br>
            <input type="text" name="nombre" size="25" required />
            <br><br>
            <label>Celular</label>
            <br>
            <input type="text" name="celular" size="25" required />
            <br><br>
            
            <label>Direccion</label>
            <br>
            <select id="Estado" name="id_estado" >
				<option value="0">Selecionar Estado</option>
			</select>
<br><br>
            <select id="Municipio" name="id_municipio">
				<option value="0">Selecionar Municipio</option>
			</select>
<br><br>
            <select id="Colonia" name="id_colonia">
				<option value="0">Selecionar Colonia</option>
			</select>
            <br><br>
            <label>C.P</label>
            <br>
            <input type="text" id="Cp" name="id_codigop">
            <br><br>
            <label>Telefono</label>
            <br>
            <input type="tel" name="telefono" size="25" required />
            <br><br>
            <label>Contraseña</label>
            <br>
            <input type="password" name="password" size="25" required maxlength="8"/>
            <br><br>
            <input type="hidden" name="c12" size="25" value="usuario" />
            <br><br>
            <input type="submit" class="btn btn-success" name="login" value="Enviar">
        </center>
    </form>

	</div>



</div>



   <script src="script.js"></script>






<!-- INICIO DEL FOOTER -->
<?php include("footer.php"); ?>
