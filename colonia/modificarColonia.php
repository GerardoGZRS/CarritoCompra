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
                $id_colonia = $_REQUEST["id_colonia"];
                $nombre = $_REQUEST["nombre"];
                $id_municipio = $_REQUEST["id_municipio"];
                $sentencia = "UPDATE colonia SET "
                ." colonia='$nombre', "
                ."id_municipio=$id_estado"
                ." WHERE id_colonia=".$id_colonia;
        echo $sentencia;
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                   echo '<script>alert("Registro modificado")</script> ';
		
		echo "<script>location.href='consultaColonia.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>