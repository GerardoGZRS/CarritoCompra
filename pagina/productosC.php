<!Doctype html>
<html lang="es">
<head>
	<title>VENTAS TIENDA</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="../js/categoriaB.js"></script>
</head>

<body>
	
	<?php include("header.php"); ?>


		<div class="slider">
			<div class="menu-slider">
					<ul>
						<li class="opciont-slider opciont-slider-seleted">
							<a href="#">
								<img class="icon-flecha" src="images/flechaDerecha.png"> 50% Discount Insanity
							</a>
						</li>
						<li class="opciont-slider">
							<a href="#">
								<img class="icon-flecha" src="images/flechaDerecha.png"> Premium Products
							</a>
						</li>
						<li class="opciont-slider">
							<a href="#">
								<img class="icon-flecha" src="images/flechaDerecha.png"> Exclusive Offer
							</a>
						</li>
						<li class="opciont-slider">
							<a href="#">
								<img class="icon-flecha" src="images/flechaDerecha.png"> Red Hot Stuff
							</a>
						</li>
						<li class="opciont-slider">
							<a href="#">
								<img class="icon-flecha" src="images/flechaDerecha.png"> Summertime Discount
							</a>
						</li>
					</ul>
			</div>
			
			<div class="img-activa">
				<img id="imgFondopng" src="images/imgFondo1.png">
			</div>

		</div>

		<div class="contenedor-general">

			<div class="lista-izq">

				<div class="tags-cont">
					Categorias
				</div>

				<ul class="lista-categori">
				<?php include '../bd/conexion.php';
				
				$sentencia = "select * from categorias";
				$resultado = $mysqli->query($sentencia);
				while ($row=mysqli_fetch_array($resultado)){
				?>
					<li class="liListasLeft"><img src="images/flechalistLeft.png"><a  class="tag-product-uno" href="productosC.php?id_categoria=<?php echo $row["id_categoria"]?>"><?php echo $row["categoria"];?></a></li>
					
				<?php }?>
				</ul>

				<a href="#" class="img-publicidad">
					<img src="images/cellN.png">
				</a>

				<div class="tags-cont">
					Manufactura
				</div>

				<div class="info-extra-section">
					<input type="text" placeholder="Please Select">
					<button>
						<img src="images/feccha-abajo.png" />
					</button>
				</div>
			</div>

			<div class="productos-contenedor-der">
				
				<div class="tags-products">
					<h1>Featured <span>Productos</span></h1>
					<a href="#" class="btn-all-products-x">Ver todos los productos</a>
				</div>
<div id=""myDiv"">

</div>
				
				<?php
				if(isset ($_REQUEST["id_categoria"])){
    $id_categoria = $_REQUEST["id_categoria"]; // modificar

}else{
	
	$id_categoria = "";
}
				
				
				include '../bd/conexion.php';
				$sentencia = "select * from productos where id_categoria=".$id_categoria;
				$resultado = $mysqli->query($sentencia);
				
				while($row=mysqli_fetch_array($resultado)){
					
					    echo '<div class="producto-x">
								<a href="../pagina/detalleProducto.php?id_producto='.$row["id_producto"].'">
									<img class="img-product-x" src="'.$row["imagen"].'">
									<div class="info-product-x">
										<span>'.$row["producto"].'</span><br><br>
										<span class="color-price">$'.$row["precio_venta"].'</span>
									</div>
									</a>
								</div>';
					
				}
				?>

			</div>
		</div>


		<div class="content-our-spotlight">

			<div class="textantFooder">
				<h2><span id="our">Our </span> <span id="spotlight"> Spotlight</span></h2>
			</div>

			<div class="footer-slider-img">

				<ul>
					
					<li class="item-slider-footer">
						<img src="products/product13.jpg">
						<a href="#">
							<span class="txt-bold">Camcoders </span>
							<span class="txt-bold2"> Save $40</span>
						</a>
					</li>

					<li class="item-slider-footer">
						<img src="products/product14.jpg">
						<a href="#">
							<span class="txt-bold">Camcoders </span>
							<span class="txt-bold2"> Save $40</span>
						</a>
					</li>

					<li class="item-slider-footer">
						<img src="products/product10.jpg">
						<a href="#">
							<span class="txt-bold">Camcoders </span>
							<span class="txt-bold2"> Save $40</span>
						</a>
					</li>

					<li class="item-slider-footer">
						<img src="products/product16.jpg">
						<a href="#">
							<span class="txt-bold">Camcoders </span>
							<span class="txt-bold2"> Save $40</span>
						</a>
					</li>
					

			</div>
		</div>
		
	

<?php include("footer.php"); ?>