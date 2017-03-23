<html>

	<head>
		<title>Paginador</title>
	</head>

	<body>
		<?php
		   
		    $page = 1; //inicializamos la variable $page a 1 por default
		    if(array_key_exists('pg', $_GET)){
		        $page = $_GET['pg']; //si el valor pg existe en nuestra url, significa que estamos en una pagina en especifico.
		    }
		    $mysqli = new mysqli("localhost","root","","carrito_compra");
		    if ($mysqli->connect_errno) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
			}


		    $conteo_query =  $mysqli->query("SELECT COUNT(*) as conteo FROM estado");
		    $conteo = "";
		    if($conteo_query){
		    	while($obj = $conteo_query->fetch_object()){ 
		    	 	$conteo =$obj->conteo; 
		    	}
		    }
		    $conteo_query->close(); 
		    unset($obj); 
    		
		    //ahora dividimos el conteo por el numero de registros que queremos por pagina.
		    $max_num_paginas = intval($conteo/10); //en esto caso 10
		    $segmento = $mysqli->query("SELECT *  FROM estado LIMIT ".(($page-1)*11).", 11 ");

		    if($segmento){
			    echo '<table>';
			    while($obj2 = $segmento->fetch_object())
			    {
			       echo '<tr>
			                   <td>'.$obj2->id_estado.'</td>
			                   <td>'.$obj2->nameEstado.'</td>
			             </tr>'; 
			    }
			    echo '</table><br/><br/>';
			}
	
		   
		    for($i=0; $i<$max_num_paginas;$i++){
		       echo '<a href="resultados.php?pg='.($i+1).'">'.($i+1).'</a> | ';
		    }      
		?>

	</body>

</html>