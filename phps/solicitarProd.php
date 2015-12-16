<?php

		
		include ("conexion.php"); 
           $conect = conectar();
		   
		   if(isset($_GET["solicitar"])){

            if (!$conect){
				echo ("No se Pudo Abrir la Conexion con la Base de Datos");
            }
            else{
			
			$prod = base64_decode($_GET["cod_prod"]);
			$desc = base64_decode($_GET["desc"]);
			
			$destinatario = "KMunoz@intcomex.com; CRodas@intcomex.com ";
			$asunto = "Solicitud de Ingreso de Producto $prod ".$no_caso."";
			$cuerpo = '
			<html>
			<head>
			   <title>Solicitud de Ingreso de Producto $prod </title>
			</head>
			<body style="font-family: Calibri;">
			<p align="center">Codigo a Ingresar: $prod</p>
			<p align="center">Descripcion: $desc</p>
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
			$respuesta = mail($destinatario,$asunto,$cuerpo,$headers);
			echo "hola";
			echo $respuesta;
 
	}
}

?>

