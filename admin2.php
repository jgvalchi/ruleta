<?php
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
 ?>
<html>
	<head>
		<title>Intcomex</title>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<link href="css/bootstrap.css" rel='stylesheet' />
	</head>
	
	<body>
		<br />
		<div class="container">
			<!-- <div class="panel panel-info">
				<div class="panel-heading"> 
					<h3 class="panel-title"><a style ="display:inline-block; margin-right:800px;"href="index.php"><img src="images/intcomex.png" height="72px" alt=""></a>-->
					<a style="color:black" href="logout.php" ><img src="images/x.png" width="30px" height="30px" alt=""></a>
					</h3>
				<!--</div> -->
				<div class="panel-body">
					<div class="caption text-center">
						<center>
							<form action='admin.php' method='post' enctype='multipart/form-data'>
								<!-- <div class='form-group'>
									<label for='file'>Seleccionar Fotografia</label>
									<input class='btn btn-default' type='file' name='file' id='file'><br>
								</div>-->
								<div class='form-group'>
									<label>Nombre del Empleado</label><br>
									<input type='text'  name='nombre' required>
								</div>
								<!-- <div class="form-group">
									<label>Cantidad</label><br>
									<input type="number"  name="cantidad" >
								</div> -->
								<div class='form-group'>
									<input class='btn btn-default' type='submit' name='submit' value='Cargar'>
								</div>
							</form>
				<br><br>
				<?php

						$db = mysql_connect('localhost','servicioCliente','servidor') or die('Could not connect: ' . mysql_error());
							mysql_select_db('dbruleta') or die('Could not select database');
						
						//Handle Uploads
						if(isset($_FILES["file"])){
							//La lista de extensiones de archivos que se permitiran subir al sitio
							$allowedExts = array("gif", "jpeg", "jpg", "png");
							//Encontrar la extension del archivo subido
							$extension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
							
							//Solo permitir archivos de tipo imagen y verificar que su extension tambien sea valida
							if ((($_FILES["file"]["type"] == "image/gif")
								|| ($_FILES["file"]["type"] == "image/jpeg")
								|| ($_FILES["file"]["type"] == "image/jpg")
								|| ($_FILES["file"]["type"] == "image/pjpeg")
								|| ($_FILES["file"]["type"] == "image/x-png")
								|| ($_FILES["file"]["type"] == "image/png"))
								&& ($_FILES["file"]["size"] < 2097152)  // < 2MB
								&& in_array($extension, $allowedExts)) {
								
								//Si no hay archivo o hubo algun error, tronazon
								if ($_FILES["file"]["error"] > 0) {
									echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
								} else {

									//Verificamos que el archivo no exista. Si ya existe... pos tronazon
									if (file_exists("images/premios/" . $_FILES["file"]["name"])) {
										echo $_FILES["file"]["name"] . " already exists. ";
									} else {
										//Generemosle un nombre unico a este archivo, asi si ya ha subido un archivo con el mismo nombre anteriormente, no habra conflictos en la verificacion de file_exists despues... Entonces usamos la fecha =D
										$mydate=getdate(date("U"));
										$uniqueFileName = $mydate["year"] . $mydate["month"] . $mydate["mday"] . $mydate["hours"] . $mydate["seconds"] . $mydate["minutes"] . "." . $extension;
							
										//Usamos una funcion linda de php que mueve el archivo que se uploadeo magicamente a la carpeta de uploads.
										move_uploaded_file($_FILES["file"]["tmp_name"],  "images/premios/" . $uniqueFileName);
										
										$nombre = $_POST['nombre'];
										$cantidad = 1;//$_POST['cantidad'];
										
										$result = mysql_query("SELECT IFNULL(MAX(position),0) AS position FROM premios", $db);
										$row = mysql_fetch_assoc($result);
										$result= mysql_query("INSERT INTO premios (filename, nombre_producto, position, insertTS, updateTS, amount) VALUES ('".$uniqueFileName."', '".$nombre."', ".($row["position"]+1).", NOW(), NOW(), $cantidad)", $db);
									}
								}
							} else {
								//No era un archivo valido... deja de subir punto EXEs
								echo "Invalid file";
							}
							
							//echo '<script type="text/javascript">location.reload();</script>';
						}
						
						//Handle Move Up, Down and Delete
						if(isset($_POST["moveUp"]) && isset($_POST["id"])){
							//Get Position
							$result= mysql_query("SELECT position FROM premios WHERE id=".$_POST["id"], $db);
							$row = mysql_fetch_assoc($result);
								
							//If row exists
							if($row){
								$position = $row["position"];
							
								//Get Upper Position
								$result= mysql_query("SELECT id, position FROM premios WHERE position=".($position-1), $db);
								$row = mysql_fetch_assoc($result);
								
								//Switch Positions 
								if($row){
									mysql_query("UPDATE premios SET position=".($row["position"]+1)." WHERE ID='".$row["id"]."'");
									mysql_query("UPDATE premios SET position=".($position-1)." WHERE ID='".$_POST["id"]."'");
								}
							}
							
							//So session values are killed
							//echo '<script type="text/javascript">location.reload();</script>';
						}else{
							if(isset($_POST["moveDown"]) && isset($_POST["id"])){
								//Get Position
								$result= mysql_query("SELECT position FROM premios WHERE id=".$_POST["id"], $db);
								$row = mysql_fetch_assoc($result);
								
								//If row exists
								if($row){
									$position = $row["position"];
									
									//Get Upper Position
									$result= mysql_query("SELECT id, position FROM premios WHERE position=".($position+1), $db);
									$row = mysql_fetch_assoc($result);
									
									//Switch Positions 
									if($row){
										mysql_query("UPDATE premios SET position=".($row["position"]-1)." WHERE ID='".$row["id"]."'");
										mysql_query("UPDATE premios SET position=".($position+1)." WHERE ID='".$_POST["id"]."'");
									}
								}
								
								//So session values are killed
								//echo '<script type="text/javascript">location.reload();</script>';
							}else{
								if(isset($_POST["delete"]) && isset($_POST["id"])){
									//Get Position
									$result= mysql_query("SELECT position, filename FROM premios WHERE id=".$_POST["id"], $db);
									$row = mysql_fetch_assoc($result);

									//If row exists
									if($row){
										$filename = $row["filename"];
										$position = $row["position"];
									
										//Delete SQL
										$result = mysql_query("DELETE FROM premios WHERE id=".$_POST["id"]);
										
										//Delete File if it exists
										if(is_readable(realpath("images/premios/".$filename))){
											unlink(realpath("images/premios/".$filename));
										}
										
										//Move everyone else Up
										$result = mysql_query("SELECT id, position FROM premios WHERE position>".$position, $db);
										while($row = mysql_fetch_assoc($result)){
											mysql_query("UPDATE premios SET position=".($row["position"]-1)." WHERE ID='".$row["id"]."'");
										}
									}
									
									//So session values are killed
									//echo "<script type='text/javascript'>location.reload();</script>";
								}
							}
						}
						
						//Show Existing Pictures
						$result= mysql_query("SELECT * FROM premios ORDER BY position ASC", $db);
								
						//Show every picture with its action buttons
						while($row = mysql_fetch_assoc($result)){
							echo "<form action='admin.php' method='post'>
								<b>Imagen:</b> # ".$row["position"]."
								<br>
								<b>Nombre:</b> ".$row["nombre_producto"]."
								<br>
								<b>Cantidad:</b> ".$row["amount"]."
								<br>
								<input type='hidden' name='id' value='".$row["id"]."'>
								&nbsp; <button class='btn btn-default' type='submit' name='delete'>Borrar</button>
								<br />
								<br />
								<center>
									<img width='60%' src='images/premios/".$row["filename"]."' /><br />
								</center>
							</form>
							<br />";
						}
				mysql_close($db);
			?>
						</center>
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="footer">
				<p>Dise&#241;ado por <a target="_blank"href="http://coolcakesoft.com/">CoolCakeSoft</a></p>
			</div>
		</div>
	</body>
</html>