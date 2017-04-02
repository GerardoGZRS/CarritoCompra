<?php
session_start();
include '../serv.php';
if(empty($_SESSION['user'])) {
echo '<script> window.location="login.php"; </script>';
}
?>
<html>
    <style>
        .fecha{margin-top: -7px; margin-left: -10px;}
  
    </style>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <script src="pages/estado/script.js"></script>
    <script src="../../js/ajax.js"></script>
</head>

<body>
    <div class="logo">
        <img src="../../img/logo.png">
    </div>
    <div class="fecha">
        <?php include "../fecha.php";
            echo $dia_nombre." ".$dia_mes." de ".$mes_nombre." de ".$year;?>
    </div>
    <div class="ses">
        <?php echo 'Bienvenido:'.$_SESSION['user'].'';?>
    </div>
    <div class="salir">
        <a href="../cierre.php">Cerrar Sesión</a>
    </div>
    <hr>
    
    <div id="menucss">
        <nav>
            <ul class="menu">
                <li>
                    <a href="#">Proveedores</a>
                    <ul class="sub-menu">
                        <li><a href="pages/estados/agprov.php">Registro</a></li>
                        <li><a onClick="f2()">Consulta</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Productos</a>
                    <ul class="sub-menu">
                        <li><a onClick="f3()">Registro</a></li>
                        <li><a onClick="f4()">Consulta</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Inventario</a>
                    <ul class="sub-menu">
                        <li><a onClick="f5()">Registro</a></li>
                        <li><a onClick="f6()">Consulta</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Banner</a>
                    <ul class="sub-menu">
                        <li><a onClick="f7()">Nuevo banner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Ventas</a>
                    <ul class="sub-menu">
                        <li><a onClick="f8()">Consulta</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <hr>

    <div id="myDiv">
        
        <center>
    	<form action="provedor/enlaceprov.php" method="post">
    		<br><br>
            <label>Proveedor</label>
    		<input type="text" name="c1" required>
    		<br><br>
            <label>Contacto</label>
    		<input type="text" name="c2" required>
    		<br><br>
            <label>RFC</label>
    		<input type="number" name="c3" required>
    		<br><br>
            <label>Telefono</label>
    		<input type="number" name="c4" required>
    		<br><br>
            <label>Correo</label>
    		<input type="email" name="c5" required>
    		<br><br>
            <label>Direccion</label>
            
            <select id="Estado">
				<option value="0">Selecionar Estado</option>
			</select>
           
            <select id="Municipio">
				<option value="0">Selecionar Municipio</option>
			</select>
            
            <select id="Colonia">
				<option value="0">Selecionar Colonia</option>
			</select>
          <br><br>
            <label>C.P</label>
            <input type="text" id="Cp" placeholder="Codigo Postal">
    		<br><br>
    		<input type="submit" value="Enviar" name="bt1">
    	</form> 
        </center> 
    
<script src="script.js"></script>
        
    </div>

</body>

</html>

    
    
