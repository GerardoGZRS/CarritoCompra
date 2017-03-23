<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>INICIO DE SESION</title>
    </head>
    <body>
        <h1>INICIO DE SESION</h1>
        <table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label ><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success"  type="text" name="mail"></td></tr>
		<tr><td><label ><b>Contraseña: </b></label></td>
			<td witdh=80><input  type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  ><b>Registro</b></legend>
    
      <label ><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" placeholder="Ingresa tu nombre" />
    
 
      <label ><b>Ingresa tu email</b></label>
      <input type="text" name="nick"   required placeholder="Ingresa mail"/>
  
    
      <label ><b>Ingresa tu Password</b></label>
      <input type="password" name="pass"   placeholder="Ingresa contraseña" />
   
   
      <label ><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
  
      
    </div>
   
    <input   type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

    </body>
</html>
