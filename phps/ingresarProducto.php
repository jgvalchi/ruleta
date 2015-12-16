<?php
	include("seguridad.php");
	include ("conexion.php"); 
    $conexion = conectar();

	if(isset($_GET["ingresar"])){

   	if (!$conexion){
		echo ("No se Pudo Abrir la Conexion con la Base de Datos");
     }
     else{


	
		
			$cod = $_GET["cod_prod"];
			$desc = $_GET["desc"];
			$categoria = $_GET["categoria"];
			$marca = $_GET["marca"];
			$noParte = $_GET["noParte"];
			$precio = $_GET["precio"];
			
			
			mysql_query("BEGIN");
			
			$insertar_desc = " INSERT INTO `dbproductos`.`modelos` (`id_modelo` ,`nombre_modelo` ,`id_marca` ,`id_categoria`)VALUES ('0', '$desc', '$marca', '$categoria')";
			$insertarDesc = mysql_query($insertar_desc, $conexion) or die("<br>$insertar_desc<br>" . mysql_error());
			
			$sql="select max(id_modelo) as max from dbproductos.modelos";
			$res=mysql_query($sql,$conexion);
 			while ($line = mysql_fetch_array($res)) {
		 
				$idModelo = $line["max"];
			
         	}  
 
			
			
			$insertar_prod = " INSERT INTO `dbproductos`.`cod_productos` (`cod_producto` ,`id_categoria` ,`id_marca` ,`id_modelo` ,`no_parte`, `precio`)VALUES ('$cod', '$categoria', '$marca', '$idModelo', '$noParte', '$precio')";
			$insertarProd = mysql_query($insertar_prod, $conexion) or die("<br>$insertar_prod<br>" . mysql_error());
			
			
			
			if (($insertarDesc) && ($insertarProd)) {
				mysql_query("COMMIT");
				echo"<p align=\"center\"><div class=\"bs-example\"><div class=\"alert alert-success fade in\" role=\"alert\"><p>Producto Ingresado Exitosamente</p></div></div></p>";
				echo"<p align=\"center\"><a href=\"agregarProducto\" class=\"btn-large btn-success\">Ingresar Nuevo Producto</a>";
				
			} else {
				mysql_query("ROLLBACK");
				echo"<p align=\"center\"><div class=\"bs-example\"><div class=\"alert alert-danger fade in\" role=\"alert\"><p>No Se Pudo Ingresar El Producto</p></div></div></p>";
				echo"<p align=\"center\"><a href=\"agregarProducto\" class=\"btn-large btn-success\">Ingresar Nuevo Producto</a>";
			} 
		
		
		}
		
		
		
		
	}
	
	

?>

