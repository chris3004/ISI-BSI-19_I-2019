<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )  {
		   $usuario = $_POST["usuario"];
		   $password = md5($_POST["contrasenia"]);
		   if(validarUsuario($usuario,$password) == true){
		      $sesion->set("usuario",$usuario);
		      header("location: Libros.php");
		   } else {
		     echo "Verifica tu nombre de usuario y contraseña";
		   }
		}
		 
		function validarUsuario($usuario, $password)  {
		   $conexion = new mysqli("localhost","root","","mylibrery");
		   $consulta = "select contrasenia from usuario where nick = '$usuario';";
		   $result = $conexion->query($consulta);
		   if($result->num_rows > 0)  {
		      $fila = $result->fetch_assoc();
		      if( strcmp($password,$fila["contrasenia"]) == 0 )
		         return true;
		      else
		         return false;
		   }  else
       			return false;
}

	
?>
<html>
<head>
<title>Inicio de Session</title>
<LINK REL=StyleSheet HREF="css\style.css" TYPE="text/css" MEDIA=screen>
</head>

<body>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
   
<table align="center" cellpadding="2px">
	<tr>
		<td colspan="2">
			<h2>Inicio de Session</h1>
		</td>
	</tr>
	<tr>
		<td>
			<label class="TextoDerecha">Usuario: </label>
		</td>
		<td>
			<input type="text" name = "usuario" id="usuario" />
		</td>
	</tr>
	<tr>
		<td>
			<label class="TextoDerecha">Contraseña: </label>
		</td>
		<td>
			<input type="password" name = "contrasenia" id="contrasenia" />
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<input type="submit" name ="iniciar" value="Iniciar Sesion"/>
		</td>
	</tr>	
	<tr>
		<td colspan="2" align="center">
			<a href="Index.php">Volver a la pagina principal.</a>
		</td>
	</tr>
</table>
</div>
</form>

</body>
</html>