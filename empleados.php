<html>
	<head>
		<title>Intcomex</title>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<link href="css/bootstrap.css" rel='stylesheet' />
		
		<script type="application/javascript"> 
			var minSpinTime = 500;
			var maxSpinTime = 250;
			var minSpin = 5;
			var maxSpin = 15;
		
			var colors = ["#B8D430", "#3AB745", "#029990", "#3501CB", "#2E2C75", "#673A7E", "#CC0071", "#F80120", "#F35B20", "#FB9A00", "#FFCC00", "#FEF200"];
<?php
	$db = mysql_connect('localhost','servicioCliente','servidor') or die('Could not connect: ' . mysql_error());
	mysql_select_db('dbruleta') or die('Could not select database');
	
	echo "			var wheelItems = [";
	
	$first = true;
	$result= mysql_query("SELECT id, nombre_producto, filename, amount, special FROM empleados where amount > 0 ORDER BY position ASC", $db);
	while($row = mysql_fetch_assoc($result)){
		if(!$first){
			echo ",";
		}else{
			$first = false;
		}
			
		echo "[\"".$row["id"]."\",\"".$row["nombre_producto"]."\",\"".$row["filename"]."\",\"".$row["special"]."\",\"".$row["amount"]."\"]";
	}
	
	echo "];";
?>			
			var wheel_id = 0;
			var wheel_nombre_producto = 1;
			var wheel_filename = 2;
			var wheel_special = 3;
			var wheel_amount = 4;

			var special = false;
			var currentSpinAngle = 0;
			var spinTimeCounterout = null;

			var spinTimeCounter = 0;
			var spinTimeCounterTotal = 0;

			var arc = 0;
			
			var ctx;
			
			function redireccionar(){
				location.href="index.php";
			}

			function spin() {
				startAngle = currentSpinAngle - (Math.floor(currentSpinAngle / (Math.PI*2)) * (Math.PI*2));
				
				spinAngle = (Math.PI*2) * ((Math.random() * (maxSpin - minSpin)) + minSpin);
				spinTimeCounter = 0;
				spinTimeCounterTotal = (Math.random() * (maxSpinTime - minSpinTime)) + minSpinTime;
				rotateWheel();
				
				$("#spinbutton").hide();
				$("#spinnigbutton").show();
				$("#specialcheckdiv").hide();
			}
			
			function drawRouletteWheel() {				
				var canvas = document.getElementById("wheelcanvas");
				if (canvas.getContext) {
					var outsideRadius = 200;
					var insideRadius = 25;
					var textRadius = (outsideRadius + insideRadius)/2 ;

					ctx = canvas.getContext("2d");
					ctx.clearRect(0,0,500,500);


					ctx.strokeStyle = "black";
					ctx.lineWidth = 2;

					ctx.font = 'bold 14px sans-serif';

					var pos = 0;
					for(var i = 0; i < wheelItems.length; i++) {
						if(special || (!special && wheelItems[i][wheel_special] == 0)){
							var angle = currentSpinAngle + pos * arc;
							ctx.fillStyle = colors[pos%colors.length];

							ctx.beginPath();
							ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
							ctx.arc(250, 250, insideRadius, angle + arc, angle, true);
							ctx.stroke();
							ctx.fill();

							ctx.save();
							ctx.shadowOffsetX = 2 * Math.cos(angle + arc / 2 + Math.PI/4);
							ctx.shadowOffsetY = 2 * Math.sin(angle + arc / 2 + Math.PI/4);
							ctx.shadowBlur    = 0;
							ctx.shadowColor   = "rgb(20,20,20)";
							ctx.fillStyle = "white";
							ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius, 250 + Math.sin(angle + arc / 2) * textRadius);
							ctx.rotate(angle + arc / 2);
							/*var text =wheelItems[i][wheel_nombre_producto];*/
							var text = "";//wheelItems[i][wheel_nombre_producto];
							ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
							ctx.restore();
							pos++;
						}
					}

					//Arrow
					ctx.fillStyle = "black";
					ctx.beginPath();
					ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
					ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
					ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
					ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
					ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
					ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
					ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
					ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
					ctx.fill();
				}
			}

			function rotateWheel() {
				spinTimeCounter += 10;
				if(spinTimeCounter >= spinTimeCounterTotal) {
					currentSpinAngle = spinAngle + startAngle;
					stopRotateWheel();
					return;
				}
				
				currentSpinAngle = (1 - Math.pow(1 - (spinTimeCounter / spinTimeCounterTotal), 3)) * spinAngle + startAngle;
				drawRouletteWheel();
				spinTimeCounterout = setTimeout('rotateWheel()', 10);
			}

			function stopRotateWheel() {
				clearTimeout(spinTimeCounterout);
				
				var degrees = currentSpinAngle * 180 / Math.PI + 90;
				var arcd = arc * 180 / Math.PI;
				var index = Math.floor((360 - degrees % 360) / arcd);
				
				ctx.save();
				ctx.font = 'bold 28px ARIAL BLACK';
				ctx.fillStyle = "#D14705";
				var text = wheelItems[getWheelItemRealIndex(index)][wheel_nombre_producto];
				ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 480);
				ctx.restore();
				
				loadImage(wheelItems[getWheelItemRealIndex(index)][wheel_filename]);
				removeWheelItem(getWheelItemRealIndex(index));
				arc = 2 * Math.PI / countWheelItems();
				
				$("#spinbutton").show();
				$("#spinnigbutton").hide();
				$("#specialcheckdiv").show();
				
				if(countWheelItems() == 0){
					$("#noitemsalert").show();
					$("#spinbutton").addClass('disabled');
				}
			}
		
			function loadImage(url){
				var canvas = document.getElementById('wheelcanvas');
				var context = canvas.getContext('2d');
				// var imageObj = new Image();

				// imageObj.onload = function() {
					// context.drawImage(imageObj, (500 - imageObj.width)/2, (500 - imageObj.height)/2);
				// };
				// imageObj.src = 'images/premios/' + url;
			}
			
			function countWheelItems(){
				var count = 0;
				for(var i = 0; i < wheelItems.length; i++) {
					if(special || (!special && wheelItems[i][wheel_special] == 0)){
						count++;
					}
				}
				return count;
			}
			
			function getWheelItemRealIndex(index){
				var count = -1;
				for(var i = 0; i < wheelItems.length; i++) {
					if(special || (!special && wheelItems[i][wheel_special] == 0)){
						count++;
					}
					
					if(count == index){
						return i;
					}
				}
			}
			
			function removeWheelItem(index){
				$.post("killEmpleados.php", {id:wheelItems[index][wheel_id]}, function(result){/*console.log(result);*/}, "text");
				
				wheelItems[index][wheel_amount]--;
				
				if(wheelItems[index][wheel_amount] == 0){
					wheelItems.splice(index, 1);
				}
			}
		
			function updateRoulette(){
				arc = 2 * Math.PI / countWheelItems();
				drawRouletteWheel();
				
				if(countWheelItems() > 0){
					$("#noitemsalert").hide();
					$("#spinbutton").removeClass('disabled');
				}else{
					$("#noitemsalert").show();
					$("#spinbutton").addClass('disabled');
				}
			}
			
			$( document ).ready(function() {
				$("#spinnigbutton").hide();
				
				updateRoulette();
			
				$("#specialcheck").click(function() {  
					special = $("#specialcheck").prop('checked');
					updateRoulette();
				});
			});
		</script>
	</head>
	
	<body>
		<br />
		<div class="container">
			<!--<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><img src="images/intcomex.png" height="72px" alt=""></h3>
				</div>-->
				<div class="panel-body">
					<div class="alert alert-danger" role="alert" id="noitemsalert">
						<strong></strong> Sin Premios!!!!!!
					</div>
					<div class="caption text-center">
						<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<canvas id="wheelcanvas" width="500" height="500"></canvas><br />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-lg btn-success" id="spinbutton" onClick="spin();">
								<span class="glyphicon glyphicon-record" aria-hidden="true"></span> Girar <span class="glyphicon glyphicon-record" aria-hidden="true"></span>
							</button>
							<button type="button" class="btn btn-lg btn-warning" id="spinnigbutton">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Girando... <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</button>
							</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-lg btn-primary" onClick="redireccionar();">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Premios <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</button>
                            </p>
							<img src="images/abajo.jpg">
							<!--<div class="checkbox" id="specialcheckdiv">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label>
									<input type="checkbox" id="specialcheck"><font color="#0000FF" size="+2">Activar Premios Especiales</font> </input>
								</label>
							</div>-->
						</p>
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