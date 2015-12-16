<?PHP 
session_start();
if(!isset($_SESSION["autentica"])){
    echo"<script language=\"Javascript\">

function redireccionar1() {
setTimeout(\"location.href='phps/error.php'\", 0000);}

</script>";
 echo"<script>redireccionar1()</script>";
 die();
    }
	
	
if(($_SESSION["area"] != "Televentas" and $_SESSION["perfil"] != "Coordinador") && ($_SESSION["area"] != "Televentas" and $_SESSION["perfil"] != "Team Leader") && ($_SESSION["perfil"] != "DBA")){
    echo"<script language=\"Javascript\">

function redireccionar1() {
setTimeout(\"location.href='phps/error.php'\", 0000);}

</script>";
 echo"<script>redireccionar1()</script>";
 die();
    }

if ($_SESSION["autentica"] != "SIP") {
	
	header("Location: ../error.php");
	//salimos del script
	exit();
}	


?>