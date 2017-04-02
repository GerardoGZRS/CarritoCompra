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
                $id_municipio = $_REQUEST["id_municipio"];
                $nombre = $_REQUEST["nombre"];
                $id_estado = $_REQUEST["id_estado"];
                $sentencia = "UPDATE municipio SET "
                ." nameMunicipio='$nombre', "
                ."id_estado=$id_estado"
                ." WHERE idMunicipio=".$id_municipio;
        echo $sentencia;
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                   echo '<script>alert("Registro modificado")</script> ';
		
		echo "<script>location.href='consultaMunicipio.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>