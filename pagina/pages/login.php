<?php
	session_start();
	include '../conexion.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="../admin.php"; </script>';
	}
?>
    <html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <body class="bo">
        <header>
            <div class="logo">
                <img src="../img/logo.png">
            </div>
        </header>

       <form action="lov.php" name="formulario" method="post">
           <br><br>
           <center>
				  <div>
					<label>Correo Electronico</label>
                      <br>
				<input type="text" name="user" placeholder="correo@dominio" />

				  </div>
               <br><br>
				  <div>
					<label>Contraseña</label>
                      <br>
					<input type=password name="pw" placeholder="contraseña" />      
				  </div>
               <br><br>
				  <a class="forgot" href="../usuarios/captcha.php">Olvidaste la contraseña?</a>
				  	<br><br>			  
				<input type="submit" value="Login">
               </center>
			    </form>
    </body>

    </html>