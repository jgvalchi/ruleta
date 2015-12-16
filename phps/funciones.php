<?php

function redondear($valor) {
	$float_redondeado=round($valor * 100) / 100;
	return $float_redondeado;
} 



function dateDiff($start, $end) {

$start_ts = strtotime($start);

$end_ts = strtotime($end);

$diff = $end_ts - $start_ts;

return round($diff / 86400);

}
/*$fechaHoy = date("d-m-Y");
$fechaIngreso = $_GET["fechaIngreso"];
echo dateDiff("2006-04-01", "2006-04-10");
echo"<br>";
echo dateDiff($fechaIngreso, $fechaHoy);
*/

?>