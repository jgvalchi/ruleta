<?php
 function conectar(){
        // Conectar con MySQL:
         $conexion = mysql_connect( "localhost", "servicioCliente", "servidor" ) or die ( "Error al conectar: ".mysql_error() );
        // Seleccionar a la base de datos deseada
        // mysql_select_db("upana", $conexion) or die ( "Error seleccionar la BD : ".mysql_error() );
		mysql_select_db("dbServicioCliente") or die ( "Error seleccionar la BD : ".mysql_error() );
        //mysql_select_db("dbservicio") or die ( "Error seleccionar la BD : ".mysql_error() );
        return $conexion;
    }
	
	function conectarDBNo(){
        // Conectar con MySQL:
         $conexion = mysql_connect( "localhost", "servicioCliente", "servidor" ) or die ( "Error al conectar: ".mysql_error() );
        // Seleccionar a la base de datos deseada
        // mysql_select_db("upana", $conexion) or die ( "Error seleccionar la BD : ".mysql_error() );
		//mysql_select_db("dbServicioCliente") or die ( "Error seleccionar la BD : ".mysql_error() );
        //mysql_select_db("dbservicio") or die ( "Error seleccionar la BD : ".mysql_error() );
        return $conexion;
    }

/*
function conectar($usuario, $contrasena, $db) {
$conect = mysql_connect("localhost", $usuario, $contrasena);
mysql_select_db($db, $conect);

	if (!$conect){
                
		return "noconecto";
	}
        else{
                return "conecto";
            }
        
}*/
function cerrar($conect) {
	mysql_close($conect);
}


function enviarCorreo($no_caso, $cod_cliente, $nombre, $tel, $email, $categoria, $descripcion, $cant_cat, $no_parte, $obsernoventa){
	
	
	$destinatario = "mdeluna@intcomex.com; jcramirez@intcomex.com; Luis.Calderon@intcomex.com; gboleres@intcomex.com";
	$asunto = "CLIENTE BUSINESS CASE CASO ".$no_caso."";
	$cuerpo = '
	<html>
	<head>
	   <title>BUSINESS CASE</title>
	</head>
	<body style="font-family: Calibri;">
	<table width="70%" align="center" border="1" bordercolor="black" style="border-collapse: collapse; empty-cells: show; //font-family: Calibri;">
	<tr style="background-color: #990000; color: white;"><td colspan="2"><h3 align="center">BUSINESS CASE</h3></td></tr>
	<tr style="background-color: #333333; color: white;"><td colspan="2"><center><b>DATOS GENERALES</b></center></td></tr>
	<tr><td width="50%">Cliente</td><td>'.$cod_cliente.'</td></tr>
	<tr><td>Nombre</td><td>'.$nombre.'</td></tr>
	<tr><td>Telefono</td><td>'.$tel.'</td></tr>
	<tr><td>E-mail</td><td>'.$email.'</td></tr>
	<tr style="background-color: #333333; color: white;"><td colspan="2"><center><b>DETALLE</b></center></td></tr>
	<tr><td style="background-color: #006699; color: white;">Categoria</td><td>'.$categoria.'</td></tr>
	<tr><td style="background-color: #006699; color: white;">Descripcion</td><td>'.$descripcion.'</td></tr>
	<tr><td style="background-color: #006699; color: white;">Cantidad</td><td>'.$cant_cat.'</td></tr>
	<tr><td style="background-color: #006699; color: white;">Numero de Parte</td><td>'.$no_parte.'</td></tr>
	<tr style="background-color: #333333; color: white"><td colspan="2"><center><b>Observaciones</b></center></td></tr>
	<tr><td colspan="2"><textarea cols="70" rows="4" style="font-family: Calibri; border: none;">'.$obsernoventa.'</textarea></td></tr>
	</table>
	</body>
	</html> 
	';
	
	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
	//dirección del remitente
	$headers .= "From: <Operador@intcomex.com>\r\n";
	$headers .= "Reply-To: Operador@intcomex.com\r\n";
	$headers .= "Return-path: Operador@intcomex.com\r\n";
	mail($destinatario,$asunto,$cuerpo,$headers);
		
	
	
}

?>