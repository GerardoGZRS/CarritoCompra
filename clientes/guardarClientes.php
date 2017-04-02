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
            	
                $nombre = $_REQUEST["nombre"];
                $telefono = $_REQUEST["telefono"];
                $celular = $_REQUEST["celular"];
                $correo = $_REQUEST["correo"];
                $id_estado = $_REQUEST["id_estado"];
                $id_municipio = $_REQUEST["id_municipio"];
                $id_colonia = $_REQUEST["id_colonia"];
                $id_codigoP = $_REQUEST["id_codigop"];
                $contrasenia = $_REQUEST["password"];
                $rol = '3';

                $sentencia = "INSERT INTO clientes () VALUES (null, '$nombre', '$telefono', '$celular', '$correo', $id_estado, $id_municipio, $id_colonia, $id_codigoP)";
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                  echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='consultaCP.php'</script>";	
                } 
                $sentencias = "insert into login () VALUES (null, '$nombre', '$contrasenia', '$correo', '$contrasenia', '$rol')";
                $resul = $conexion->query($sentencias);
                 if(!$resul){
                 	echo '<script>alert("Registro guardado")</script> ';
                 }
                	else {
                }
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            
            //cerrar conexión
            $conexion->close();
            ?>
        </section>