<
<?php 
            include '../bd/conexion.php';   
              
              
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
                
                $tipo = 'banner';
                $producto = '1';
                $prefijo = substr(md5(uniqid(rand())),0,6);
               if($destino != ""){
             $Image = imagecreatefromjpeg($destino);
list($width, $height) = getimagesize($destino);
$scale = 0.1;
$ImageZoom=imagecreatetruecolor(980, 300);
$b=imagecopyresampled($ImageZoom,$Image,0,0,0,0,980,300,$width,$height);
$ruta = "../files/banner/".$prefijo."_mini.jpg";
$imagen= imagejpeg( $ImageZoom, $ruta );
               }
                $sentencia = "INSERT INTO imagenes () VALUES (null,"
                        ." '$ruta', '$tipo', $producto )";
                $resultado = $mysqli->query($sentencia);
                if ($resultado) {
echo '<script>alert("Registro guardado")</script> ';
		
		echo "<script>location.href='banner.php'</script>";	
                	            } else {
                    echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                }
                $mysqli->close();
                ?>