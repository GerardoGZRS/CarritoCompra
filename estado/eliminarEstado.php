
<?php
include '../bd/conexion.php';
$id_estado = $_REQUEST["id_estado"];
              

                $sentencia = "DELETE FROM estado WHERE  id_estado=".$id_estado;
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
                    echo "<br/><div id='mensaje'>El Resultado ha sido eliminado exitosamente<br/><a href='consultaEstado.php'>Volver</a>		</div>";
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
                $mysqli->close();
                
?>

