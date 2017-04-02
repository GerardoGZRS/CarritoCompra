
<?php
include '../bd/conexion.php';
$id_colonia = $_REQUEST["id_colonia"];
              

                $sentencia = "DELETE FROM colonia WHERE  id_colonia=".$id_colonia;
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
                    echo "<br/><div id='mensaje'>El Resultado ha sido eliminado exitosamente<br/><a href='consultaColonia.php'>Volver</a>		</div>";
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
                $mysqli->close();
                
?>

