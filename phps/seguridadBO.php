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


if(($_SESSION["area"] != "hybridBackoffice") && ($_SESSION["area"] != "Sistemas")){
    echo"<script language=\"Javascript\">

function redireccionar1() {
setTimeout(\"location.href='phps/error.php'\", 0000);}

</script>";
 echo"<script>redireccionar1()</script>";
 die();
    }


if ($_SESSION["autentica"] != "SIP") {
	
	header("Location: phps/error.php");
	//salimos del script
	exit();
}	


?>