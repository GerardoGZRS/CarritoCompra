
<?php
include '../bd/conexion.php';
$id_municipio = $_REQUEST["id_municipio"];
              

                $sentencia = "DELETE FROM municipio WHERE  idMunicipio=".$id_municipio;
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
                    echo "<br/><div id='mensaje'>El Resultado ha sido eliminado exitosamente<br/><a href='consultaMunicipio.php'>Volver</a>		</div>";
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
                $mysqli->close();
                
?>

