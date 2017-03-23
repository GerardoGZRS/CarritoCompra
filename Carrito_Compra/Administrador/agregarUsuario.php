<!-- formulario registro -->
<?php include '../estilosAdmin/header.php';?>
<form method="GET" action="registro.php" >
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

		
		</div></center></div></center>
		</section>
<?php include '../estilosAdmin/footer.php';?>