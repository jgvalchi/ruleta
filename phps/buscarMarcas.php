<?php
$q = $_GET["code"];

		include ("conexion.php"); 
           $conect = conectar();

            if (!$conect){
		echo ("No se Pudo Abrir la Conexion con la Base de Datos");
            }
            else{


 
$sql="SELECT * FROM dbproductos.marcas where id_categoria = '$q'";
$res=mysql_query($sql,$conect);

	
	//echo $sql;
	
if(mysql_num_rows($res)>0){
    
	//echo"<option value=\"ninguno\" selected>Seleccione Un Producto....</option>\n";
     while ($line = mysql_fetch_array($res)) {
			$id = $line["id_marca"];
			$nombre = $line["nombre_marca"];
			
			echo"<option value=\"$id\">$nombre</option>\n";
            
         }  
 
  	
}


else{
    
     
 
//while($fila=mysql_fetch_array($res)){
	
echo "";
// echo $fila['nombre'].'<br />';

//}
}
}

?>

