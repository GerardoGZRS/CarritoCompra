<html>
<head>
<script type="text/javascript" src="../js/busquedaProveedor.js">
</script>
</head>
<body>

<?php include '../estilosAdmin/header.php';?>

<section class="centrado">
            <h1>Proveedores </h1>
            <div id="miniMenu">
                <a href="agregarProveedores.php">
                    <img id="agregar" src="../imagenes/agregar.png" title="Agregar Nuevo" width="50px" />
                </a>
            </div>
            <center>
            <div>
            <input type="text" placeholder="Buscar" id="bus" name="bus" onkeyup="loadXMLDoc();"/>
            <div id="myDiv"></div>
            </div>
            </center>
            <table>
                <thead>
                    <tr>
                        
                        <td>Empresa </td>
                        <td>Rfc </td>
                       
                        <td>Telefono</td>
                        <td>Correo</td>
                        
                        <td>id_estado</td>
                        <td>id_municipio</td>
                        <td>id_colonia</td>
                        <td>id_codigop</td>
                       
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $page = 1; //inicializamos la variable $page a 1 por default
		    if(array_key_exists('pg', $_GET)){
		        $page = $_GET['pg']; //si el valor pg existe en nuestra url, significa que estamos en una pagina en especifico.
		    }
		    
                    include '../bd/conexion.php';
                    $conteo_query =  $mysqli->query("SELECT COUNT(*) as conteo FROM proveedor ");
		    $conteo = "";
		    if($conteo_query){
		    	while($obj = $conteo_query->fetch_object()){ 
		    	 	$conteo =$obj->conteo; 
		    	}
		    }
		    $conteo_query->close(); 
		    unset($obj); 
			 $max_num_paginas = intval($conteo/3); //en esto caso 10
                    //conexion
                        $sentencia = "SELECT * FROM proveedor LIMIT " .(($page-1)*4).", 4";
                        $resultado = $mysqli->query($sentencia);
                        $nom = "";
                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                                echo '<tr>';
                                
                                echo '<td>' . $reg["empresa"] . '</td>';
                                 echo '<td>' . $reg["rfc"] . '</td>';
                                  
                                 echo '<td>' . $reg["telefono"] . '</td>';
                                  echo '<td>' . $reg["correo"] . '</td>';
                               
                                   echo '<td>' . $reg["id_estado"] . '</td>';
                                   echo '<td>' . $reg["id_minicipio"] . '</td>';
                                   echo '<td>' . $reg["id_colonia"] . '</td>';
                                   echo '<td>' . $reg["id_codigop"] . '</td>';
                                   echo '<td><a href="agregarProveedores.php?idproveedor='. $reg["idproveedor"] .'"><img src="../imagenes/editar.png" title="Editar" width="50px"/></a></td>';
                                echo '<td><a href="eliminarProveedores.php?idproveedor='. $reg["idproveedor"] .'"><img src="../imagenes/trash.png" title="Eliminar" width="50px"/></a></td>';
                                echo '</tr>';
                            }
                        }
                    
                    $mysqli->close();
                    ?>
                </tbody>
            </table>
            <?php 
            echo '<br>';
		    
                                                                        echo '<br>';
                                   echo '<center>';             
                        for($i=0; $i<$max_num_paginas;$i++){
                        
		       echo '<a href="consultaProveedores.php?pg='.($i+1).'">'.($i+1).'</a> | ';
                        }   
                        echo '</center>';
            ?>
           
            
        </section>
        <?php include '../estilosAdmin/footer.php';?>
        </body>
</html>
