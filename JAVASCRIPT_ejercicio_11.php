<?php 


if (isset($_POST['val1']) && isset($_POST['val2'])){
	switch ($_POST["operacion"]){
		case "sumar":
			echo "El resultado es: ";
			echo $_POST['val1'] + $_POST['val2'];
			break;
		case "restar":
			echo "El resultado es: ";
			echo $_POST['val1'] - $_POST['val2'];
			break;
		case "multiplicar":
			echo "El resultado es: ";
			echo $_POST['val1'] * $_POST['val2'];
			break;
		case "dividir":
			if ($_POST['val2'] == 0){
				echo "No se puede realizar una división entre 0";
			}
			else{
				echo "El resultado es: ";
				echo $_POST['val1'] / $_POST['val2'];
			}			
			break;
		default: "No se puede realizar la operación";
		
	}
}
else{
	echo "Debe ingresar los 2 valores";
}

?>