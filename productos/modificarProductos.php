<section>
            <?php
          include '../bd/conexion.php';
            
                $id_producto = $_REQUEST["id_producto"];
                $nombre = $_REQUEST["nombre"];
                $caracteristicas = $_REQUEST["descripcion"];
                $id_categoria = $_REQUEST["idCategoria"];
                $id_proveedor = $_REQUEST["idProveedor"];
                $precio_venta = $_REQUEST["precioVenta"];
                $precio_compra = $_REQUEST["precioCompra"];
                $imagen = $_REQUEST["archivo"];
                $sentencia = "UPDATE productos SET "
                ." producto='$nombre' "
                .", caracteristicas ='$caracteristicas'"
                .", id_categoria = '$id_categoria'"
                .", id_proveedor = '$id_proveedor'"
                .", precio_venta = '$precio_venta'"
                .", precio_compra = '$precio_compra'"
                .", imagen = '$imagen'"
                ." WHERE id_categoria=".$id_producto;
        echo $sentencia;
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
echo '<script>alert("Registro modificado")</script> ';
		
		echo "<script>location.href='consultaProductos.php'</script>";	                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
            
            //cerrar conexión
            $mysqli->close();
            ?>
        </section