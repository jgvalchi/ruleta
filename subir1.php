<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema Intcomex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   <link href="../css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../js/bootstrap.min.js"></script>
    <script src="../js/gus_calendar.js"></script>
   <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    
    
    </head>
<body>



<div class="container">


      
<div class="span12">
	<form action="subir1.php" method="post" enctype="multipart/form-data">
    <p align="center"><input type="file" name="archivo" id="archivo"></input></p>
    <p align="center"><button class="btn btn-large btn-primary"  type="submit" name="subir" value="Subir archivo">Subir Archivo Excel</button></p>
    </form>
    
    
    
    <?php
	//echo $_POST["subir"];
	if(isset($_POST["subir"])){
		//echo"hola";
	
	 	$archivo = $_FILES["archivo"]['name'];
		$posPunto = strpos($archivo, ".") + 1;
		$pp = (strlen($archivo) - $posPunto)  * -1;
		$extension = substr($archivo, $pp);
		
		  if(($archivo != "") && ($extension != "xls") && ($extension != "xlsx")){
			echo"<script languaje='javascript'>";
			echo"alert(\"El Archivo subido no es un archivo de Excel.\")";
			echo"</script>";
			echo"<h4>El Archivo subido no es un archivo de Excel.</h4>";
		}
		if ($archivo == ""){
			echo"<script languaje='javascript'>";
			echo"alert(\"No ingreso ningun archivo\")";
			echo"</script>";
			echo"<h4>No ingreso ningun archivo.</h4>";
           
		}
		
		
        if (($archivo != "")  && (($extension == "xls") || ($extension == "xlsx"))){
            // guardamos el archivo a la carpeta files
            $destino =  "excelSubido.xls";
            if (copy($_FILES['archivo']['tmp_name'],$destino)) {
                $status = "Archivo subido: ".$archivo;
				echo"<script languaje='javascript'>";
				echo"alert(\"$status\")";
				echo"</script>";
				echo"<h4>$status</h4>";
				leerExcel();
            } else {
                $status = "Error al subir el archivo";
				echo"<script languaje='javascript'>";
				echo"alert(\"$status\")";
				echo"</script>";
				echo"<h4>$status</h4>";
            }
        } 
	
}
	
	?>
    
    
    
    
    
    

		<?php
		
					
				function leerExcel(){
					require_once 'phps/ext/PHPExcel-1.7.7/Classes/PHPExcel/IOFactory.php';
					
					echo"<table width=\"100%\" class=\"table table-striped\">\n";
					echo"<thead>\n";
					echo"<tr>\n";
					echo"<td>Operador</td>\n";
					echo"</thead>\n";
					echo"<tbody>\n";
					
					
					
					$objPHPExcel = PHPExcel_IOFactory::load('excelSubido.xls');
					$objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
					include ("phps/conexion.php"); 
            		$conexion = conectar();
					foreach ($objHoja as $iIndice=>$objCelda) {
						
						if(isset($objCelda['A'])){
							$idopoerador = $objCelda['A'];
							
							echo "
								<tr>
									<td>$idopoerador</td>
								</tr>
							";
							
							$sql = "INSERT INTO `dbruleta`.`empleados` (`id`, `filename`, `nombre_producto`, `position`, `insertTS`, `updateTS`, `amount`, `special`) VALUES ('0', '$idopoerador', '$idopoerador', '1', '2015-12-12', '2015-12-12', '1', '0');";
							if (!$conexion){
									echo ("No se Pudo Abrir la Conexion con la Base de Datos");
										}
							else{
								$resultado = mysql_query($sql, $conexion) or die("Error in query: $query." . mysql_error());
							}
											
							
						}
						
					}
					echo"</tbody>\n";
					echo"</table>\n";
					echo"<p align=\"center\"><font size=\"+2\">Archivo de Excel Ingresado al Sistema Correctamente</p></font>";
					
				}
				
				
				?>




		
        
        
  

</div>



<footer>
        <p align="center">Copyright © 2013  - Intcomex Guatemala</p>
      </footer>
					
</body>
</html>



