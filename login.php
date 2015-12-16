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
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><img src="images/intcomex.png" height="72px" alt=""></h3>
				</div>
				<div class="panel-body">
					<div class="caption text-center">
						<center>
							<form action="validar_usuario.php" method="post">
								<table>
									<tr>
										<td>Usuario:</td>
										<td><input type="text" name="admin" required="required"></td>
									</tr>
									<tr>
										<td>Password:</td>
										<td><input type="password" name="password_usuario" required="required"></td>
									</tr>	
								</table>
								<br>
									<input type="submit" value="Iniciar Sesi&#243;n" name="iniciar">
							</form>
						</center>
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="footer">
				<p>Dise&#241;ado por <a target="_blank"href="http://coolcakesoft.com/">CoolCakeSoft</a></p>
			</div>
		</div>

		<script>
			$( document ).ready(function() {
				$("#spinnigbutton").hide();
				drawRouletteWheel();
			});
		</script>
	</body>
</html>