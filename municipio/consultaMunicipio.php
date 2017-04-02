<html>
<head>
<title>Consulta Municipio</title>
</head>
<body>
<a href="agregarM.php"><img src="../imagenes/agregar.png" width="50px"></a>
<br>
<a href="importar.php"><h3>Importar CSV</h3></a>
<table>
<thead>
<tr>
<td>
Id Municipio
</td>
<td>
Nombre Municipio
</td>
<td>
Id estado
</td>
<td>
Modificar
</td>
<td>
Eliminar
</td>
</tr>
</thead>
<tbody>
<?php 
include '../bd/conexion.php';
$sentencia = "select * from municipio";
$resultado = $mysqli->query($sentencia);
if(!$resultado){
	echo '<a>Error bd: '.$mysqli->error.'</a>';
}else{
	while($row=mysqli_fetch_array($resultado)){
		echo '
		<tr>
		<td>
		'.$row["idMunicipio"].'
		</td>
		<td>
		'.$row["nameMunicipio"].'
		</td>
		<td>
		'.$row["id_estado"].'
		</td>
		<td>
		<a href="../municipio/agregarM.php?id_municipio='.$row["idMunicipio"].'"><img src="../imagenes/editar.png" width="50px"></a>
		</td>
		<td>
		<a href="../municipio/eliminarMunicipio.php?id_municipio='.$row["idMunicipio"].'"><img src="../imagenes/trash.png" width="50px"></a>
		</td>
		</tr>';
	}
	
}
$mysqli->close();
?>
</tbody>
</table>
</body>
</html>