
<title>Panel Administrativo</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/estilos2.css">
<link rel="stylesheet" type="text/css" href="../css/iconos">


<header class="centrado">
<div class="menu1 ocu">Menu</div>
			<nav>
				<input type="checkbox" id="nav" /><label for="nav"></label>
				<ul>
					<li><a href="#" class="menu stel">REGISTRATE</a></li>
					<li><a href="#" class="menu stel">INGRESAR</a></li>
					<li><a href="#" class="menu stel">CARRITO</a></li>
					<?php
					$nivel="";
						if(isset($_SESSION["nivel_bouti"])){
							$nivel=$_SESSION['nivel_bouti'];
						}
						if ($nivel=="" or $nivel<>1){
					?>
					
                                        <li><a href="../productos/consultaProductos.php" class="menu">PRODUCTOS</a></li>
                                        <li><a href="../proveedores/consultaProveedores.php" class="menu">PROVEEDORES</a></li>
					<li><a href="../categorias/consultaCategorias.php" class="menu">CATEGORIAS</a></li>
                                        <li><a href="../Administrador/admin.php" class="menu">USUARIOS</a></li>
                                       <li><a href="../banner/banner.php" class="menu">BANNER</a></li>
					<?php
						}else if ($nivel==1){
					?>
						<li><a href="index.php" class="menu">INICIO</a></li>
						<li><a href="consulta.php" class="menu">PRODUCTOS</a>
						<ul>
						<li><a href="#">Mas imagenes</a></li>
						</ul>
						</li>
						<li><a href="#" class="menu">CLIENTE</a></li>
						<li><a href="proveedores.php" class="menu">PROVEEDORES</a></li>
						<li><a href="#" class="menu">SLIDER</a></li>
					<?php
					}
					?>
				</ul>
			</nav>
			<br>
			
			<?php
			session_start();
if (@!$_SESSION['rol']==1) {
	header("Location: /Carrito_Compra/Administrador/index.php");
}elseif (@!$_SESSION['rol']==2) {
	header("Location: /Carrito_Compra/Administrador/index.php");
}
?>

<a href="../Administrador/Administrador.php"><img src="../imagenes/inicio.png" align="left" width="40px"></a> Bienvenido  <strong><?php echo $_SESSION['user'];?></strong>
<a href="../Administrador/desconectar.php"> <img src="../imagenes/cerrar_sesion.png" align="right" title="Editar" width="100px" height="20px"/> </a>
			</header>
			
	