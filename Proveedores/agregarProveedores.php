<?php include '../estilosAdmin/header.php';?>
<?php


if(isset ($_REQUEST["idproveedor"])){
    $idproveedor = $_REQUEST["idproveedor"]; // modificar

}else{

    $idproveedor = "-1"; // indica nuevo reistro

}


 $conexion = new mysqli("localhost", "root", "", "carrito_compra");
                    if ($conexion->connect_error) {
                        echo 'Error: ' . $conexion->connect_error;
                    } else {
                        $sentencia = "SELECT * FROM proveedor WHERE  idproveedor=".$idproveedor;
                        $resultado = $conexion->query($sentencia);

                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                        } else {
                            if ($reg = mysqli_fetch_array($resultado)) {

                                $empresa = $reg["empresa"];
                                $rfc = $reg["rfc"];
                                $direccion = $reg["direccion"];
                                $telefono = $reg["telefono"];
                                $correo = $reg["correo"];
                                $celular = $reg["celular"];
                                
                                
                            } else {
                                $empresa = "";
                                $rfc = "";
                                $direccion = "";
                                $telefono = "";
                                $correo = "";
                                $celular = "";
                                
                            }
                               
                            }
                        
                    }
                    $conexion->close();

?>
        <section class="centrado">
            
            <?php
                if($idproveedor == "-1"){
            ?>
            <h1>Alta Provedores</h1>
            <form action="guardarProveedores.php" name="formulario" method="GET" id="formulario" >

                 <?php

                } else {
            
                    ?>

                 <h1>Modificar Proveedor</h1>
                 <form action="modificarProveedores.php" name="formulario" method="GET" id="formulario">
                 <input type="hidden" name="idproveedor" value="<?php echo $idproveedor;?>" />
                 

                 <?php
                
                 
                }

                ?>
           
            
                <fieldset>
                    <legend>Proveedores</legend>
                    Empresa: <input type="text" name="empresa" id="empresa" value="<?php echo $empresa; ?>" /><br/>
                    Rfc : <input type="text" name="rfc" value="<?php echo $rfc;?>" ><br>
                    Direccion : <input type="text" name="direccion" value="<?php echo $direccion;?>"><br>
                    Telefono : <input type="number" name="telefono" value="<?php echo $telefono;?>"><br />
                    Correo: <input type="email" name="correo" value="<?php echo $correo;?>"><br>
                    Celular <input type="number" name="celular" value="<?php echo $celular;?>"><br>
                    Estado: <select name="estado"><option>Selecciona...</option>
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "SELECT * FROM estado";
                        $resultado = $mysqli->query($sentencia);
                        $nom = "";
                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<option value="'.$reg["id_estado"].'">'.$reg["nameEstado"].'</option>';
                            }
                        }
                    $mysqli->close();
                    ?>
                    </select><br>
                    Municipio: <select name="municipio"><option>Selecciona...</option>
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "SELECT * FROM municipio";
                        $resultado = $mysqli->query($sentencia);
                        $nom = "";
                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<option value="'.$reg["idMunicipio"].'">'.$reg["nameMunicipio"].'</option>';
                            }
                        }
                    $mysqli->close();
                    ?>
                    
                    </select><br>
                    Colonia: <select name="colonia"><option>Selecciona...</option>
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "SELECT * FROM colonia";
                        $resultado = $mysqli->query($sentencia);
                        $nom = "";
                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<option value="'.$reg["id_colonia"].'">'.$reg["colonia"].'</option>';
                            }
                        }
                    $mysqli->close();
                    ?>
                    
                    
                    </select><br>
                    Codigo Postal: <select name="codigoPostal"><option>Selecciona...</option>
                    <?php 
                    include '../bd/conexion.php';
                    $sentencia = "SELECT * FROM codigo_postal";
                        $resultado = $mysqli->query($sentencia);
                        $nom = "";
                        if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<option value="'.$reg["id_codigop"].'">'.$reg["codigo_postal"].'</option>';
                            }
                        }
                    $mysqli->close();
                    ?>
                    </select><br>
                    <input type="submit" id="guardar" value="Guardar">
                </fieldset>
            </form>
            <br/>
            <div id="botones">
                
                <button onClick="window.open('consultaProveedores.php', '_self');">Cancelar</button>
            </div>
        </section>
<?php include '../estilosAdmin/footer.php';?>