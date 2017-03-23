<section>
            <?php
            //CONEXIÓN
            $host = "localhost";
            $usuario = "root";
            $password = "";
            $base = "carrito_compra";

            //Crear la conexión
            $conexion = new mysqli($host, $usuario, $password, $base);
            if ($conexion->connect_error) {
                echo 'Error: ' . $conexion->connect_error;
            } else {
                $realname=$_REQUEST['realname'];
	$mail=$_REQUEST['nick'];
	$pass= $_REQUEST['pass'];
	$rpass=$_REQUEST['rpass'];;
                

                $sentencia = "INSERT INTO login VALUES(null,'$realname','$pass','$mail','$pass','2')";
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                  echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='agregarUsuario.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>