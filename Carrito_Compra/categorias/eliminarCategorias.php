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
              

                $sentencia = "DELETE FROM categorias WHERE  id_categoria=".$id_categoria;
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                    echo "<br/><div id='mensaje'>El Resultado ha sido eliminado exitosamente<br/><a href='consultaCategorias.php'>Volver</a>		</div>";
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>