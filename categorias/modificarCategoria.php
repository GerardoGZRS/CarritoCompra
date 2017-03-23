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
                $id_categoria = $_REQUEST["id_categoria"];
                $nombre = $_REQUEST["nombre"];
                $sentencia = "UPDATE categorias SET "
                ." categoria='$nombre' "
                ." WHERE id_categoria=".$id_categoria;
        echo $sentencia;
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                   echo '<script>alert("Registro modificado")</script> ';
		
		echo "<script>location.href='consultaCategorias.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section