<html>
<head>
<title>Consulta Colonia</title>
</head>
<body>
<a href="agregarColonia.php"><img src="../imagenes/agregar.png" width="50px"></a>
<br>
<a href="importar.php"><h3>Importar CSV</h3></a>
<table>
<thead>
<tr>
<td>
Id colonia
</td>
<td>
Colonia
</td>
<td>
Id municipio
</td>
<td>
Editar
</td>
<td>
Eliminar	
</td>
</tr>
</thead>
<tbody>
<?php 
 $page = 1; //inicializamos la variable $page a 1 por default
		    if(array_key_exists('pg', $_GET)){
		        $page = $_GET['pg']; //si el valor pg existe en nuestra url, significa que estamos en una pagina en especifico.
		    }
include '../bd/conexion.php';
$conteo_query =  $mysqli->query("SELECT COUNT(*) as conteo FROM colonia ");
		    $conteo = "";
		    if($conteo_query){
		    	while($obj = $conteo_query->fetch_object()){ 
		    	 	$conteo =$obj->conteo; 
		    	}
		    }
		    $conteo_query->close(); 
		    unset($obj); 
			 $max_num_paginas = intval($conteo/999); //en esto caso 10
$sentencia = "select * from colonia LIMIT " .(($page-1)*1000).", 1000";
$resultado = $mysqli->query($sentencia);
if (!$resultado){
	echo '<a>Error bd: '.$mysqli->error.'</a>';
}else{
	while($row=mysqli_fetch_array($resultado)){
		echo '<tr>
		
		<td>'.$row["id_colonia"].'</td>
		<td>'.$row["colonia"].'</td>
		<td>'.$row["idMunicipio"].'</td>
		<td><a href="agregarColonia.php?id_colonia='.$row["id_colonia"].'"><img src="../imagenes/editar.png" width="50px"></a></td>
		<td><a href="eliminarColonia.php?id_colonia='.$row["id_colonia"].'"><img src="../imagenes/trash.png" width="50px"></a></td>
		</tr>';
	}
}
?>
</tbody>
</table>
<?php echo '<br>';
		    
                                                                        echo '<br>';
                                   echo '<center>';             
                        for($i=0; $i<$max_num_paginas;$i++){
                        
		       echo '<a href="consultaColonia.php?pg='.($i+1).'">'.($i+1).'</a> | ';
                        }   
                        echo '</center>';?>
</body>
</html>