<?php


if(isset ($_REQUEST["id_municipio"])){
    $id_municipio = $_REQUEST["id_municipio"]; // modificar

}else{

    $id_municipio = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM municipio WHERE  idMunicipio=".$id_municipio;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $nombre = $reg["nameMunicipio"];
                                
                            } else {
                                $nombre = "";
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
        <section class="centrado">
            
            <?php
                if($id_municipio == "-1"){
            ?>
            <h1>Alta Municipio</h1>
            <form action="guardarMunicipio.php" name="formulario" method="GET" id="formulario" >

                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Municipio</h1>
                 <form action="modificarMunicipio.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="id_municipio" value="<?php echo $id_municipio;?>" />

                 <?php
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Municipio</legend>
                    Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /><br/>
                    Id Estado <select name="id_estado">
                    <option>Elige..
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "select * from estado";
                    $resultado = $mysqli->query($sentencia);
                    if(!$resultado){
                    	echo '<a>Error bd: '.$mysqli->error.'</a>';
                    } else{
                    	while ($row=mysqli_fetch_array($resultado)){
                    		echo '<option value="'.$row["id_estado"].'">'.$row["nameEstado"].'</option>';
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
                
                <button onClick="window.open('consultaMunicipio.php', '_self');">Cancelar</button>
            </div>
        </section>