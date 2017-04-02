<?php


if(isset ($_REQUEST["id_colonia"])){
    $id_colonia = $_REQUEST["id_colonia"]; // modificar

}else{

    $id_colonia = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM colonia WHERE  id_colonia=".$id_colonia;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $nombre = $reg["colonia"];
                                
                            } else {
                                $nombre = "";
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
        <section class="centrado">
            
            <?php
                if($id_colonia == "-1"){
            ?>
            <h1>Alta Colonia</h1>
            <form action="guardarColonia.php" name="formulario" method="GET" id="formulario" >

                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Colonia</h1>
                 <form action="modificarColonia.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="id_colonia" value="<?php echo $id_colonia;?>" />

                 <?php
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Colonia</legend>
                    Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /><br/>
                    Id Municipio <select name="id_municipio">
                    <option>Elige..
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "select * from municipio";
                    $resultado = $mysqli->query($sentencia);
                    if(!$resultado){
                    	echo '<a>Error bd: '.$mysqli->error.'</a>';
                    } else{
                    	while ($row=mysqli_fetch_array($resultado)){
                    		echo '<option value="'.$row["idMunicipio"].'">'.$row["nameMunicipio"].'</option>';
                    	}
                    }
                    ?>
                    </option>
                    </select><br>
                    <input type="submit" id="guardar" value="Guardar">
                </fieldset>
            </form>
            <br/>
            <div id="botones">
                
                <button onClick="window.open('consultaEstado.php', '_self');">Cancelar</button>
            </div>
        </section>