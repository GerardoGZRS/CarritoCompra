<?php

include '../bd/conexion.php';

$q=$_POST['q'];


$sql="select * from categorias where categoria LIKE '".$q."%'";

$resultado = $mysqli->query($sql);

if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Categoria</td>
                       
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>';
                            	echo '<tr>';
                                echo '<td>' . $reg["id_categoria"] . '</td>';
                                echo '<td>' . $reg["categoria"] . '</td>';
                                
                                echo '<td><a href="agregarCategorias.php?id_categoria='. $reg["id_categoria"] .'"><img src="../imagenes/editar.png" title="Editar" width="50px"/></a></td>';
                                echo '<td><a href="eliminarCategorias.php?id_categoria='. $reg["id_categoria"] .'"><img src="../imagenes/trash.png" title="Eliminar" width="50px"/></a></td>';
                                echo '</tr>';
                                echo '</tbody>
            </table>';
                            
                            }
                        }

$mysqli->close();
?>

