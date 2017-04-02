<?php


if(isset ($_REQUEST["id_estado"])){
    $id_estado = $_REQUEST["id_estado"]; // modificar

}else{

    $id_estado = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM estado WHERE  id_estado=".$id_estado;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $nombre = $reg["nameEstado"];
                                
                            } else {
                                $nombre = "";
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
        <section class="centrado">
            
            <?php
                if($id_estado == "-1"){
            ?>
            <h1>Alta Estado</h1>
            <form action="guardarEstado.php" name="formulario" method="GET" id="formulario" >

                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Estado</h1>
                 <form action="modificarEstado.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="id_estado" value="<?php echo $id_estado;?>" />

                 <?php
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Estado</legend>
                    Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /><br/>
                    
                    <input type="submit" id="guardar" value="Guardar">
                </fieldset>
            </form>
            <br/>
            <div id="botones">
                
                <button onClick="window.open('consultaEstado.php', '_self');">Cancelar</button>
            </div>
        </section>