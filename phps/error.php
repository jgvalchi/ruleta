<script language="Javascript">

function redireccionar() {
setTimeout("location.href='../index.php'", 0000);}

</script>

<?php
echo"<script languaje=’javascript’>";
	echo"alert(\"Lo Sentimos no puede accesar a este servicio... Disculpe\")";
	echo"</script>";
echo"<script>redireccionar()</script>";
	die();
?>