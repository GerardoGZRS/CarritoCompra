<section>
            <?php
            if(isset($_POST['archivo'])){
echo $_FILES['archivo']['tmg_name'];
}

            //CONEXIÓN
            $host = "localhost";
            $usuario = "root";
            $password = "";
            $base = "carrito_compra";
$archivo_binario ="";
            //Crear la conexión
            $conexion = new mysqli($host, $usuario, $password, $base);
            if ($conexion->connect_error) {
                echo 'Error: ' . $conexion->connect_error;
            } else {
                $nombre = $_REQUEST["nombre"];
                $descripcion = $_REQUEST["descripcion"];
                $idCategoria = $_REQUEST["idCategoria"];
                $idProveedor = $_REQUEST["idProveedor"];
                $precioVenta = $_REQUEST["precioVenta"];
                $precioCompra = $_REQUEST["precioCompra"];
              //  $image = $_REQUEST["archivo"];
              //Subir archivos
                if($_POST["action"] == "upload"){
                    //obtenemos los datos del archivo
                    $tamanio = $_FILES["archivo"]["size"];
                    $tipo = $_FILES["archivo"]["type"];
                    $archivo = $_FILES["archivo"]["name"];
                }
                $prefijo = substr(md5(uniqid(rand())),0,6);
                if($archivo != ""){
                    //guardamos el archivo a la carpeta files
                    $destino = "../files/".$prefijo."_".$archivo;
                if(copy($_FILES["archivo"]["tmp_name"], $destino)){
                    $status = "Archivo subido: <br>".$archivo."<br />";
                } else {
                $status = "Error al subir el archivo";    
                }
                    
                } else{
                    $status = "Error al subir el archivo";
                }
                
              
                $sentencia = "INSERT INTO productos () VALUES (null,'$nombre', '$descripcion', $idCategoria, $idProveedor,"
                        ."$precioVenta, $precioCompra, '$destino')";
	echo $sentencia;
                $resultado = $conexion->query($sentencia);
                if ($resultado) {
                    echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='consultaProductos.php'</script>";	
                } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $conexion->error;
                }
            }
            //cerrar conexión
            $conexion->close();
            ?>
        </section>