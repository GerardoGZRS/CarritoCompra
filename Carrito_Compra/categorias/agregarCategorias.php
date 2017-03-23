<?php include '../estilosAdmin/header.php';?>
<?php


if(isset ($_REQUEST["id_categoria"])){
    $id_categoria = $_REQUEST["id_categoria"]; // modificar

}else{

    $id_categoria = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM categorias WHERE  id_categoria=".$id_categoria;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $nombre = $reg["categoria"];
                                
                            } else {
                                $nombre = "";
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
        <section class="centrado">
            
            <?php
                if($id_categoria == "-1"){
            ?>
            <h1>Alta Categorias</h1>
            <form action="guardarCategoria.php" name="formulario" method="GET" id="formulario" >

                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Productos</h1>
                 <form action="modificarCategoria.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="id_categoria" value="<?php echo $id_categoria;?>" />

                 <?php
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Categoria</legend>
                    Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /><br/>
                    
                    <input type="submit" id="guardar" value="Guardar">
                </fieldset>
            </form>
            <br/>
            <div id="botones">
                
                <button onClick="window.open('consultaCategorias.php', '_self');">Cancelar</button>
            </div>
        </section>
        <?php include '../estilosAdmin/footer.php';?>