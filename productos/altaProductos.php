<?php


if(isset ($_REQUEST["id_producto"])){
    $id_producto = $_REQUEST["id_producto"]; // modificar

}else{

    $id_producto = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM productos WHERE  id_producto=".$id_producto;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $nombre = $reg["producto"];
                                $descripcion = $reg["caracteristicas"];
                                $idCategoria = $reg["id_categoria"];
                             
                                $idProveedor = $reg["id_proveedor"];
                                $precioVenta = $reg["precio_venta"];
                                $precioCompra = $reg["precio_compra"];
                                $imagen = $reg["imagen"];
                                
                                
                            } else {
                                $nombre = "";
                                $descripcion = "";
                                $idCategoria = "";
                                $idProveedor = "";
                                $precioVenta = "";
                                $precioCompra = "";
                                $imagen = "";
                           
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
		<?php include '../estilosAdmin/header.php';?>

        <section class="centrado">
            
            <?php
                if($id_producto == "-1"){
            ?>
            <h1>Alta Productos</h1>
            <form action="guardarProducto.php" name="formulario" method="post" enctype="multipart/form-data"> 
                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Productos</h1>
                 <form action="modificarProductos.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="id_producto" value="<?php echo $id_producto;?>" />

                 <?php
                
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Productos</legend>
                    
                    Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /><br/>
                    Descripci&oacuten : <input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion; ?>" /><br/>
                    id Categoria : <select name="idCategoria">
                    <option value="">Selecciona...</option>
                    <?php 
                    include '../bd/conexion.php';
                    
                    $sentencia = "select * from categorias";
                     $resultado = $mysqli->query($sentencia);
                    if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else{
                        	while($fila = mysqli_fetch_array($resultado)){
                        		 
                        	$categoria = $fila["categoria"];
                        	
                        	
                        		

                        		echo '<option value="'.$fila['id_categoria'].'">'.$categoria.'</option>';
                        	
                        	
                        	}
                        }
                        $mysqli->close();
                    ?>
                    </select><br/><br>
                    id Proveedor : <select name="idProveedor">
                    <option value="">Selecciona...</option>
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "select * from proveedor";
                     $resultado = $mysqli->query($sentencia);
                    if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else{
                        	while($fila = mysqli_fetch_array($resultado)){
                        		$idProveedor = $fila['idproveedor'];
                        		echo '<option value="'.$idProveedor.'">'.$fila["empresa"].'</option>';
                        	}
                        }
                        $mysqli->close();
                    ?>
                    </select><br/>
                    <br/>
                    precio venta : <input type="text" name="precioVenta" id="precioVenta" value="<?php echo $precioVenta; ?>" /><br/>
                    precio compra : <input type="text" name="precioCompra" id="precioCompra" value="<?php echo $precioCompra; ?>" /><br/>
                    imagen : <input type="file" name="archivo" size="35" /><br />
                    
                    <input type="submit" id="guardar" value="Guardar" name="submit">
                    <input name="action" type="hidden" value="upload" />
                </fieldset>
            </form>
            <br/>
            <div id="botones">
                
                <button onClick="window.open('consultaProductos.php', '_self');">Cancelar</button>
            </div>
        </section>

<?php include '../estilosAdmin/footer.php';?>