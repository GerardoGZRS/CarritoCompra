<?php

function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 8){
      $error_clave = "La clave debe tener al menos 8 caracteres";
      return false;
       
   }
   if(strlen($clave) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un carácter numérico";
      return false;
   }
    
   $error_clave = "";
   return true;
}

if ($_POST){
   $error_encontrado="";
   if (validar_clave($_POST["pw"], $error_encontrado)){
      
if(isset($_POST["user"]) && isset($_POST["pw"])){

$nombre=$_REQUEST['user'];
$pass=$_REQUEST['pw'];
	
include 'conexion.php';

$mysqli->real_query("select id_u,tipou,correo,contrasena from usuario where correo= '".$nombre."' and contrasena='".$pass."'");
$comprobar = $mysqli->store_result();

    
if($row=mysqli_fetch_array($comprobar)){
    
    if($row['tipou']=='administrador'){
session_start();
$_SESSION['correo']=$row['correo'];
$_SESSION['id_u']=$row['id_u'];        
$_SESSION['contrasena']=$row['contrasena'];        
   echo "<script type='text/javascript'>
		
		alert('Bienvenido Administrador');
		document.location=('../admin.php');
	</script>";     
    }
    
    if($row['tipou']=='usuario'){
session_start();
$_SESSION['correo']=$row['correo'];
$_SESSION['id_u']=$row['id_u'];                
$_SESSION['contrasena']=$row['contrasena'];        
   echo "<script type='text/javascript'>
		
		alert('Bienvenido Usuario');
		document.location=('../usuario.php');
	</script>";     
    }
 
	?>
	<?php
	
}else{
    
echo "    
<script type='text/javascript'>
alert('Correo o Contraseña incorrecto, intenta de nuevo.');
document.location=('pages/login.php');
</script>		
";
}
}	       

   }else{
    echo $error_encontrado;
       
   }
}

?> 