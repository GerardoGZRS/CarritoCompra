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
                

                $sentencia = "INSERT INTO municipio () VALUES (null,'$nombre', $id_estado)";
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                  echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='consultaMunicipio.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>