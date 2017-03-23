<?php
include '../bd/conexion.php';
$idproveedor = $_REQUEST["idproveedor"];
              

                $sentencia = "DELETE FROM proveedor WHERE  idproveedor=".$idproveedor;
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
                    echo "<br/><div id='mensaje'>El Resultado ha sido eliminado exitosamente<br/><a href='consultaProveedores.php'>Volver</a>		</div>";
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
                $mysqli->close();
                
?>