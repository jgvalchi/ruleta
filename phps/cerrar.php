<?PHP
     session_start();
     session_destroy();
?>
<html>
    <head>  <title>Fin de Sesión</title>  
<script language="Javascript">

function redireccionar() {
setTimeout("location.href='../index.php'", 0000);}

</script>    
</head>

 <body>
  Gracias por tu acceso… 
  Se Redireccionara Automaticamente
  <br><br>

 <script>redireccionar()</script>

 </body>

</html>