<?php

include '../bd/conexion.php';

$q=$_POST['q'];


$sql="select * from proveedor where empresa LIKE '".$q."%'";

$resultado = $mysqli->query($sql);

if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<table>
                <thead>
                    <tr>
                        <td>ID proveedor</td>
                        <td>Empresa </td>
                        <td>Rfc </td>
                        <td>Direccion </td>
                        <td>Telefono</td>
                        <td>Correo</td>
                        <td>Celular</td>
                        <td>id_estado</td>
                        <td>id_municipio</td>
                        <td>id_colonia</td>
                        <td>id_codigop</td>
                       
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>';
                            	echo '<tr>';
                                echo '<td>' . $reg["idproveedor"] . '</td>';
                                echo '<td>' . $reg["empresa"] . '</td>';
                                 echo '<td>' . $reg["rfc"] . '</td>';
                                  echo '<td>' . $reg["direccion"] . '</td>';
                                 echo '<td>' . $reg["telefono"] . '</td>';
                                  echo '<td>' . $reg["correo"] . '</td>';
                                   echo '<td>' . $reg["celular"] . '</td>';
                                   echo '<td>' . $reg["id_estado"] . '</td>';
                                   echo '<td>' . $reg["id_minicipio"] . '</td>';
                                   echo '<td>' . $reg["id_colonia"] . '</td>';
                                   echo '<td>' . $reg["id_codigop"] . '</td>';
                                   echo '<td><a href="agregarProveedores.php?idproveedor='. $reg["idproveedor"] .'"><img src="../imagenes/editar.png" title="Editar" width="50px"/></a></td>';
                                echo '<td><a href="eliminarProveedores.php?idproveedor='. $reg["idproveedor"] .'"><img src="../imagenes/trash.png" title="Eliminar" width="50px"/></a></td>';
                                echo '</tr>';
                                echo '</tbody>
            </table>';
                            
                            }
                        }

$mysqli->close();
?>
