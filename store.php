<?php
include('conexion.php');

		//Validar recepcion de Datos
	if (!empty($_POST['tarea'])){

		//Recibir Datos
		$tarea = $_POST['tarea'];
		$descripcion = $_POST['descripcion'];
		$urgente = $_POST['urgente'];
		$tipo = $_POST['tipo'];
		$prioridad = $_POST['prioridad'];

		//Guardar BD
		$sql = "INSERT INTO tarea (tarea, descripcion, urgente, tipo, prioridad) VALUES ('$tarea','$descripcion','$urgente','$tipo','$prioridad')";

		// usar exec() porque no se encuentran resultados
		$conn-> exec($sql);

		//Redirecciona
		header('Location: index.php');
	} else{
		echo("No hay datos");
	}
?>