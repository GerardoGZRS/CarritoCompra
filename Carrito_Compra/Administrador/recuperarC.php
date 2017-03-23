<?php include '../estilosAdmin/headerLogin.php';?>
<section class="centrado">
<?php
include '../bd/conexion.php';
$a=$_POST['c1'];

$sql="SELECT email, pasadmin from login WHERE email LIKE '".$a."%'";
$res=$mysqli->query($sql);
if(mysqli_num_rows($res)==0){
 echo '<script languaje="JavaScript">
alert("No esta registrado");
document.location=("../Administrador/index.php");
</script>';
}else{
    
   
if($fila=mysqli_fetch_array($res)){
     
   /*echo '<script languaje="JavaScript">
alert("Tu usuario y contraseña son: '.$fila['email'].' y password '.$fila["pasadmin"].'");
document.location=("../Administrador/index.php");
</script>';*/
   //MNDAR CORREO
				$asunto ="Recuperación de datos";
				$mensaje ='Su password es: '.$fila['pasadmin'].' y correo: '.$fila['email'].'';
				echo "Su datos fueron enviados con exito. 
				<br>
				<a href='index.php'>Regresar</a>";
				$destino = $fila["email"];
				$remitente ="From: recupeRAc@pacific.com.mx";
				mail ($destino, $asunto, $mensaje, $remitente);
   echo $fila['email'].'<br>';
   echo $fila['pasadmin'].'<br>';
    
}
}
?>
</section>