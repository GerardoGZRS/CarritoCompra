<?php

include '../bd/conexion.php';

$q=$_POST['q'];


$sql="select * from productos where producto LIKE '".$q."%'";

$resultado = $mysqli->query($sql);

if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>producto</td>
                        <td>caracteristicas</td>
                        <td>id categoria</td>
                        <td>id proveedor</td>
                        <td>precio venta</td>
                        <td>precio compra</td>
                        <td>imagen</td>
                       
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>';
                            	echo '<tr>';
                                echo '<td>' . $reg["id_producto"] . '</td>';
                                echo '<td>' . $reg["producto"] . '</td>';
                                 echo '<td>' . $reg["caracteristicas"] . '</td>';
                                  echo '<td>' . $reg["id_categoria"] . '</td>';
                                 echo '<td>' . $reg["id_proveedor"] . '</td>';
                                  echo '<td>' . $reg["precio_venta"] . '</td>';
                                   echo '<td>' . $reg["precio_compra"] . '</td>';
                                   echo '<td><img width="100px" src="'.$reg['imagen'].'"/></td>';
                                echo '<td><a href="altaProductos.php?id_producto='. $reg["id_producto"] .'"><img src="../imagenes/editar.png" title="Editar" width="50px"/></a></td>';
                                echo '<td><a href="eliminarProductos.php?id_producto='. $reg["id_producto"] .'"><img src="../imagenes/trash.png" title="Eliminar" width="50px"/></a></td>';
                                echo '</tr>';
                                echo '</tbody>
            </table>';
                            
                            }
                        }

$mysqli->close();
?>