<html>
 <head>
  <title>Resultado PHP</title>
 </head>
 <body>
 <table>
		<tr>
			<td>Texto = <?php echo $_POST["texto"]; ?></td>
		</tr>
		<tr>
			<td>Area de texto = <?php echo $_POST["area"]; ?></td>
		</tr>
		<tr>
			<td>Campo de seleccion = <?php echo $_POST["seleccion"]; ?></td>
		</tr>
		<tr>
			<td>Campo check = <?php 
			if (isset($_POST['check']))
				echo $_POST["check"];
			else
				echo "" ?></td>
		</tr>
		<tr>
			<td>Grupo de radiales = <?php echo $_POST["radial"]; ?></td>
		</tr>
		<tr>
			<td>Campo tipo rango = <?php echo $_POST["rango"]; ?></td>
		</tr>
	</table>

 </body>
</html> 