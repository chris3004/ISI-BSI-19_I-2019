<?php
	require_once("class\sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
	if( $usuario == false )
	{	
		header("Location: login.php");		
	}
	else 
	{
	?>
	<HTML><head>
	<title>Bienvenido</title>
	<LINK REL=StyleSheet HREF="css\style.css" TYPE="text/css" MEDIA=screen>
	</head>
	<body>
	<h1>Hola:  <?php echo $sesion->get("usuario"); ?> </h1> <a href="cerrarsesion.php"> Cerrar Sesion </a>
	<p> Aqui va el contenido de la pagina </p>
	</body>
	</HTML>
	
	<?php 
	}	
?>