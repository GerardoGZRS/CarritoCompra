<?php


if(isset ($_REQUEST["id_CP"])){
    $id_codigoP = $_REQUEST["id_CP"]; // modificar

}else{

    $id_codigoP = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM codigo_postal WHERE  id_codigop=".$id_codigoP;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $nombre = $reg["codigo_postal"];
                                
                            } else {
                                $nombre = "";
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
        <section class="centrado">
            
            <?php
                if($id_codigoP == "-1"){
            ?>
            <h1>Alta Municipio</h1>
            <form action="guardarCP.php" name="formulario" method="GET" id="formulario" >

                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Codigo Postal</h1>
                 <form action="modificarCP.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="id_codigop" value="<?php echo $id_codigoP;?>" />

                 <?php
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Municipio</legend>
                    Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /><br/>
                    Id Colonia <select name="id_colonia">
                    <option>Elige..
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "select * from colonia";
                    $resultado = $mysqli->query($sentencia);
                    if(!$resultado){
                    	echo '<a>Error bd: '.$mysqli->error.'</a>';
                    } else{
                    	while ($row=mysqli_fetch_array($resultado)){
                    		echo '<option value="'.$row["id_colonia"].'">'.$row["colonia"].'</option>';
                    	}
                    }
                    $mysqli->close();
                    ?>
                    </option>
                    </select><br>
                    
                    <input type="submit" id="guardar" value="Guardar">
                </fieldset>
            </form>
            <br/>
            <div id="botones">
                
                <button onClick="window.open('consultaCP.php', '_self');">Cancelar</button>
            </div>
        </section>
