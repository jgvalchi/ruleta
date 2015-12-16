<?php
$q = $_POST["qq"];

		include ("conexion.php"); 
           $conect = conectar();

            if (!$conect){
		echo ("No se Pudo Abrir la Conexion con la Base de Datos");
            }
            else{


 
$sql="select * from dbproductos.cod_productos cp, dbproductos.modelos model
where cp.id_modelo = model.id_modelo and cp.cod_producto = '$q'";
$res=mysql_query($sql,$conect);

	
	//echo $sql;
	
if(mysql_num_rows($res)>0){
    
	//echo"<option value=\"ninguno\" selected>Seleccione Un Producto....</option>\n";
     while ($line = mysql_fetch_array($res)) {
			$codigo = $line["cod_producto"];
            $nombre_client = $line["nombre_modelo"];
			;
         }  
  echo "<p align=\"center\">$codigo &nbsp; $nombre_client</p><input type=\"hidden\" id=\"codigo\" value=\"$codigo\" /><input type=\"hidden\" id=\"desc\" value=\"$nombre_client\" />";
  	
}


else{
    
    
 
//while($fila=mysql_fetch_array($res)){
	$cod_prod = base64_encode($q);
	//echo " <button class=\"btn btn-success btn-small\" data-toggle=\"modal\" data-target=\"#modalIngreso\">Large modal</button><input type=\"hidden\" id=\"categoria\" value=\"null\" />";
echo "<a href=\"javascript:agregarProduto('$q')\" class=\"btn btn-small btn-success\">Sin Registro, Agregar?</a><input type=\"hidden\" id=\"desc\" value=\"null\" />";
// echo $fila['nombre'].'<br />';

//}
}
}

?>

