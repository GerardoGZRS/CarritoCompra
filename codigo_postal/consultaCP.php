<html>
<head>
<title>Consulta Codigo Postal</title>
</head>
<body>

<a href="agregarCP.php"><img src="../imagenes/agregar.png" width="50px"></a>
<br>
<a href="importar.php"><h3>Importar CSV</h3></a>
<table>
<thead>
<tr>
<td>Id Codigo Postal</td>
<td>Codigo Postal</td>
<td>Id Colonia</td>
<td>Editar</td>
<td>Eliminar</td>
</tr>
</thead>
<tbody>
<?php 
include '../bd/conexion.php';
$sentencia = " select * from codigo_postal";
$resultado = $mysqli->query($sentencia);
if(!$resultado){
	echo '<a>Error bd: '.$mysqli->error.'</a>';
}else {
	while ($row=mysqli_fetch_array($resultado)){
		echo '<tr>
		<td>'.$row["id_codigop"].'</td>
		<td>'.$row["codigo_postal"].'</td>
		<td>'.$row["idColonia"].'</td>
		<td><a href="../agregarCP.php?id_codigop='.$row["id_codigop"].'"><img src="../imagenes/editar.png" width="30px"></a></td>
<td><a href="../eliminarCP.php?id_codigop='.$row["id_codigop"].'"><img src="../imagenes/trash.png" width="30px"></a></td>		</tr>
		';
	}
}
$mysqli->close();
?>
</tbody>
</table>
</body>
</html>