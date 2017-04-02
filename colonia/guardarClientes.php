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
                $nombre = $_REQUEST["txtnom"];
                $telefono = $_REQUEST["txttel"];
                $correo = $_REQUEST["txtemail"];
                $celular = $_REQUEST["txtcel"];
                $idEstado = $_REQUEST["id_estado"];
                $idMunicipio = $_REQUEST["id_municipio"];
                $idColonia = $_REQUEST["id_colonia"];
                $idCodigoPostal = $_REQUEST["id_codigoPostal"];
                

                $sentencia = "INSERT INTO estado () VALUES (null,'$nombre')";
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                  echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='consultaEstado.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>