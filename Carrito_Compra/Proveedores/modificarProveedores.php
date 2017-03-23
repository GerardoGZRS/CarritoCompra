<section>
            <?php
include '../bd/conexion.php';
$idProveedor = $_REQUEST["idproveedor"];
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
                $sentencia = "UPDATE proveedor SET "
                ." empresa='$empresa' "
                .", rfc ='$rfc'"
                .", direccion = '$direccion'"
                .", telefono = '$telefono'"
                .", correo = '$correo'"
                .", celular = '$celular'"
                .", id_estado= '$estado'"
                .", id_minicipio = '$municpio'"
                .", id_colonia = '$colonia'"
                .", id_codigop = '$codigoPostal'"
                ." WHERE idproveedor=".$idProveedor;
        echo $sentencia;

                $resultado = $mysqli->query($sentencia);
                echo $sentencia;
                if ($resultado) {
echo '<script>alert("Registro modificado")</script> ';
		
		echo "<script>location.href='consultaProveedores.php'</script>";                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
            
            //cerrar conexión
            $mysqli->close();
            ?>
        </section>
