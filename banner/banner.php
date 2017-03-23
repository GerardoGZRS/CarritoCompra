<html>
<head><title>
Banner Administrable
</title></head>
<?php include '../estilosAdmin/header.php';?>
<body>
<section class="centrado">
<form action="agregarBanner.php" method="POST" enctype="multipart/form-data">
<fieldset>
<legend>Agregar Banner</legend>
<label>Selecciona una imagen...</label>
<input type="file" name="archivo" size="35">
 <input name="action" type="hidden" value="upload" /><br>
<input type="submit" value="Guardar" >
<input type="button" value="Regresar" onclick="window.open('../Administrador/Administrador.php')">
 
</fieldset>
</form>
</section>
<?php include '../estilosAdmin/footer.php';?>
</body>
</html>