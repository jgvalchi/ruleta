<?PHP 
session_start();

        if($_POST["usuario"] == ""){
             echo"<script language=\"Javascript\">

            function redireccionar() {
            setTimeout(\"location.href='../index.php'\", 0000);}

            </script>";

	//si no existe, ir a la Página de Inicio
	//header("Location: index.php?errorusuario=si");
	echo"No Ingreso Usuario";
	echo"<script languaje=javascript>";
	echo"alert(\"No Ingreso Usuario\")";
	echo"</script>";
      
            echo"<script>redireccionar()</script>";
            
        }
        if($_POST["clave"] == ""){
              echo"<script language=\"Javascript\">

            function redireccionar() {
            setTimeout(\"location.href='../index.php'\", 0000);}

            </script>";

	//si no existe, ir a la Página de Inicio
	//header("Location: index.php?errorusuario=si");
	echo"No Ingreso Usuario";
	echo"<script languaje=javascript>";
	echo"alert(\"No Ingreso Usuario\")";
	echo"</script>";
      
            echo"<script>redireccionar()</script>";
       }
        
	$user = $_POST["usuario"];
	$pass = md5($_POST["clave"]);
        
            


include ("conexion.php"); 

//$passw = decrypt($pass);

$conect = conectar();

	if (!$conect){
		echo ("No se Pudo Abrir la Conexion con la Base de Datos");
	}
       else{
$query1 = "select * from operador where usuario = '$user'";
$result1 = mysql_query($query1, $conect) or die("Error in query: $query1." . mysql_error());

if(mysql_num_rows($result1) == 0){
	
	echo"<script language=\"Javascript\">

function redireccionar() {
setTimeout(\"location.href='../index.php'\", 0000);}

</script>";

	//si no existe, ir a la Página de Inicio
	//header("Location: index.php?errorusuario=si");
	echo"Lo Sentimos Usuario No Valido";
	echo"<script languaje=javascript>";
	echo"alert(\"Lo Sentimos Usuario No Valido\")";
	echo"</script>";
        echo"<script>redireccionar()</script>";
        die();
	
	
	}
	else{
		
	}



while ($line = mysql_fetch_array($result1)) {
				$nombre = $line["nombre_operador"];
                $perfil = $line["rol"];
                $area = $line["area"];
				$activo = $line["activo"];
				$contrasena = $line["password"];
                   
    }   
    

if($activo == "No"){
    
    echo"<script language=\"Javascript\">

function redireccionar() {
setTimeout(\"location.href='../index.php'\", 0000);}

</script>";

	//si no existe, ir a la Página de Inicio
	//header("Location: index.php?errorusuario=si");
	echo"Lo Sentimos Este usuario no tiene permisos para acceder al sistema";
	echo"<script languaje=javascript>";
	echo"alert(\"Lo Sentimos Este usuario no tiene permisos para acceder al sistema\")";
	echo"</script>";
        echo"<script>redireccionar()</script>";
        die();
}
    


if($contrasena == $pass){

     $_SESSION["autentica"] = "SIP";
	 $_SESSION["usuario"] = $_POST["usuario"];
	 $_SESSION["nombreUsuario"] = $nombre;
	 $_SESSION["perfil"] = $perfil;
	 $_SESSION["area"] = $area;


	
    if($contrasena == "49bd39df689ec6366f4275d8884559c9"){
		 header ("Location: ../opcionesUsuario");
	 }
	 else{
		 if($area == "hybridBackoffice"){
			 header ("Location: ../../menuHibrido.php");
		 }else{
		 	header ("Location: ../menuPrincipal");
		 }
	 }
	
	}
	else{
		  echo"<script language=\"Javascript\">

	function redireccionar() {
	setTimeout(\"location.href='../index.php'\", 0000);}
	
	</script>";
	
		//si no existe, ir a la Página de Inicio
		//header("Location: index.php?errorusuario=si");
		echo"Lo Sentimos Contraseña No Valida";
		echo"<script languaje=javascript>";
		echo"alert(\"Lo Sentimos Contraseña No Valida\")";
		echo"</script>";
			echo"<script>redireccionar()</script>";
			die();
		
	}
	
}
//cerrar();

?>





