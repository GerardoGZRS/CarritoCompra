<?php

include '../bd/conexion.php';

$q=$_POST['q'];


$sql="select * from productos where id_categoria LIKE '".$q."%'";
$resultado = $mysqli->query($sql);

if (!$resultado) {
                            echo '<br/> <b/>Error BD: </b> <br/>' . $mysqli->error;
                        } else {
                            while ($reg = mysqli_fetch_array($resultado)) {
                            	echo '<div class="pro">';
                            	echo '<div class="card">
                            <div class="card-image">';
                            	echo '<a href="productos.php"> <img id="imgag" src="'.$reg["imagen"].'" alt="Norway" width="100%" height="70%"> </a>';
                            	echo '<span class="card-title">';
                            	echo '"'.$reg["producto"].'"</span>';
                            	echo '</div>';
                            	echo '<div class="coll-prod-caption">';
                            	echo '<form  method="post" action="productos.php">
                                        <input type="text" name="producto" value="'.$reg["producto"].'" style="display:  none"/>
                                        <input value="'.$reg["imagen"].'" name="urlImagen" style="display: none">
                                        <input type="text" value="'.$reg["precio_venta"].'" name="precio" style="display: none" />
                                        <input type="text" value="'.$reg["caracteristicas"].'" name="descripcion" style="display: none" />
                                        <a class="coll-prod-buy styled-small-button" href="productos.php" type="" ><input type="submit" value="detalles" class="coll-prod-buy styled-small-button">
                                        </a>
                                
                                    </form>
				
				
				<div class="coll-prod-meta ">
				  <p class="coll-prod-price on-sale accent-text">
                                     
					<span class="money">$ '.$reg["precio_venta"].'</span>
					
				  </p>
				 
				</div><!-- .coll-prod-meta -->
			  </div>
			</div>
                                
                            </div>';
                            	
                            
                            }
                        }

$mysqli->close();
?>