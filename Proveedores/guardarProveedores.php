<section>
            <?php
include '../bd/conexion.php';
                $empresa = $_REQUEST["empresa"];
                $rfc = $_REQUEST["rfc"];
                $direccion = $_REQUEST["direccion"];
                $telefono = $_REQUEST["telefono"];
                $correo = $_REQUEST["correo"];
                $celular = $_REQUEST["celular"];
                $estado = $_REQUEST["estado"];
                $municpio = $_REQUEST["municipio"];
                $colonia = $_REQUEST["colonia"];
                $codigoPostal = $_REQUEST["codigoPostal"];
                

                $sentencia = "INSERT INTO proveedor () VALUES (null ,'$empresa', '$rfc',
                '$direccion', '$telefono', '$correo', $celular, $estado, $municpio, $colonia, $codigoPostal)";
                $resultado = $mysqli->query($sentencia);
                echo $sentencia;
                if ($resultado) {
                    echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='consultaProveedores.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
            
            //cerrar conexión
            $mysqli->close();
            ?>
        </section>