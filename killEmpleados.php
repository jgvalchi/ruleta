<?php
	if(isset($_POST["id"])){
		$db = mysql_connect('localhost','servicioCliente','servidor') or die('Could not connect: ' . mysql_error());
		mysql_select_db('dbruleta') or die('Could not select database');
		
		$resultSelect = mysql_query("SELECT id, amount FROM empleados WHERE id = ".$_POST["id"], $db);
		
		if($row = mysql_fetch_assoc($resultSelect)){
			$resultUpdate = mysql_query("UPDATE empleados SET amount = ".($row["amount"]-1)." WHERE id = ".$_POST["id"], $db);
			
			if($resultUpdate){
				echo "yay";
			}else{
				echo "error(2)";
			}
		}else{
			echo "error(1)";
		}
	}else{
		echo "nothing";
	}
?>