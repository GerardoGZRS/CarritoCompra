<?php
include '../bd/conexion.php';
$service = $_GET['buscarProducto'];
echo '<select>';
$sentencia = "SELECT * FROM municipio where id_estado = ".$service;
                        $resultado = $mysqli->query($sentencia);
                         if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                        	while ($reg = mysqli_fetch_array($resultado)) {
					echo '<option value="'.$reg["id_municipio"].'">'.$reg["nameMunicipio"].'</option>';
					
                        	}
                        	echo '</select>';
                        	
                        }
                        $mysqli->close();
?>