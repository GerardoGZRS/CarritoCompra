
<?php 
require '../estilosAdmin/headerL.php';
?>

<div class="contenedor-general">


	<div class="formContact">

	

			<h1>Registro</h1>
			
			<form method="post" action="insert.php" autocomplete="off">
        <center>
            <br><br>
            <label>Correo Electronico</label>
            <br>
            <input type="email" name="c1" size="25" required />
            <br><br>
            <label>Nombre</label>
            <br>
            <input type="text" name="c2" size="25" required />
            <br><br>
            <label>Apellido</label>
            <br>
            <input type="text" name="c3" size="25" required />
            <br><br>
            <label>Fecha de Nacimiento</label>
            <br>
            <input type="date" name="c4" size="25" required />
            <br><br>
            <label>Sexo</label>
            <br>
            <select name="c5">
            <option>Selecciona Sexo</option>
            <option>Masculino</option>
            <option>Femenino</option></select>
            <br><br>
            <label>Direccion</label>
            <br>
            <select id="Estado" name="c6">
				<option value="0">Selecionar Estado</option>
			</select>
<br><br>
            <select id="Municipio" name="c7">
				<option value="0">Selecionar Municipio</option>
			</select>
<br><br>
            <select id="Colonia" name="c8">
				<option value="0">Selecionar Colonia</option>
			</select>
            <br><br>
            <label>C.P</label>
            <br>
            <input type="text" id="Cp" name="c9">
            <br><br>
            <label>Telefono</label>
            <br>
            <input type="tel" name="c10" size="25" required />
            <br><br>
            <label>Contraseña</label>
            <br>
            <input type="password" name="c11" size="25" required maxlength="8"/>
            <br><br>
            <input type="hidden" name="c12" size="25" value="usuario" />
            <br><br>
            <input type="submit" class="btn btn-success" name="login" value="Enviar">
        </center>
    </form>

	</div>



</div>

<?php require '../estilosAdmin/footerL.php';?>