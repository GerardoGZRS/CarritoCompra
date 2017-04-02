<html>
<head>
<title>Consulta Estado</title>
</head>
<body>
<a href="agregarE.php"><img src="../imagenes/agregar.png" width="50px"></a>
<br>
<br>
<a href="importar.php">Importar CSV</a>
<table>
<thead>
<tr>
<td>
Id Estado
</td>
<td>
Nombre Estado
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
$sentencia = "select * from estado";
$resultado = $mysqli->query($sentencia);
if(!$resultado){
	echo '<a>Error bd: '.$mysqli->error.'</a>';
}else{
	while($row=mysqli_fetch_array($resultado)){
		echo '
		<tr>
		<td>
		'.$row["id_estado"].'
		</td>
		<td>
		'.$row["nameEstado"].'
		</td>
		<td>
		<a href="../estado/agregarE.php?id_estado='.$row["id_estado"].'"><img src="../imagenes/editar.png" width="50px"></a>
		</td>
		<td>
		<a href="../estado/eliminarEstado.php?id_estado='.$row["id_estado"].'"><img src="../imagenes/trash.png" width="50px"></a>
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