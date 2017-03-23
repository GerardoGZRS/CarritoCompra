
<head>
<script type="text/javascript" src="../js/busquedaP.js"></script>
</head>
<?php include '../estilosAdmin/header.php';?>


<section class="centrado">
            <h1>Productos </h1>
            <div id="miniMenu">
                <a href="altaProductos.php">
                    <img id="agregar" src="../imagenes/agregar.png" title="Agregar Nuevo" width="50px" />
                </a>
            </div>
            
            <div>
            <input type="text" placeholder="Buscar" id="bus" name="bus" onkeyup="loadXMLDoc();"/>
            <div id="myDiv"></div>
            </div>
            <table>
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
                <tbody>
                    <?php
                    
                    $page = 1; //inicializamos la variable $page a 1 por default
		    if(array_key_exists('pg', $_GET)){
		        $page = $_GET['pg']; //si el valor pg existe en nuestra url, significa que estamos en una pagina en especifico.
		    }
                    include '../bd/conexion.php';
                    $conteo_query =  $mysqli->query("SELECT COUNT(*) as conteo FROM productos ");
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
                        $sentencia = "SELECT * FROM productos LIMIT " .(($page-1)*4).", 4";
                        $resultado = $mysqli->query($sentencia);
                        $nom = "";
                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
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
                        
		       echo '<a href="consultaProductos.php?pg='.($i+1).'">'.($i+1).'</a> | ';
                        }   
                        echo '</center>';
            ?>
        </section>
<?php include '../estilosAdmin/footer.php';?>