<?php
include '../bd/conexion.php';
$id_producto = $_REQUEST["id_producto"];
              

                $sentencia = "DELETE FROM productos WHERE  id_producto=".$id_producto;
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
                    echo "<br/><div id='mensaje'>El Resultado ha sido eliminado exitosamente<br/><a href='consultaProductos.php'>Volver</a>		</div>";
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
                $mysqli->close();
                
?>
