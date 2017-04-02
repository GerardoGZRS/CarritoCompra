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
                $id_estado = $_REQUEST["id_estado"];
                $nombre = $_REQUEST["nombre"];
                $sentencia = "UPDATE estado SET "
                ." nameEstado='$nombre' "
                ." WHERE id_estado=".$id_estado;
        echo $sentencia;
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                   echo '<script>alert("Registro modificado")</script> ';
		
		echo "<script>location.href='consultaEstado.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>