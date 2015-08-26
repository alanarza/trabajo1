<?php

if(!isset($_SESSION)){
	session_start();
}

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$a = $_POST['apellido'];
		$n = $_POST['nombre'];
		$apellido = ucwords(strtolower($a));
		$nombre = ucwords(strtolower($n));
		$dni = $_POST['dni'];
		$sexo = $_POST['sexo'];
		$nacionalidad = $_POST['nacionalidad'];


		$pdo = new PDO('mysql:host=localhost;dbname=registros','root','udc');

		$sql = "INSERT INTO usuarios (apellido, nombre, dni, sexo, nacionalidad)
				values (:apellido, :nombre ,:dni, :sexo, :nacionalidad)";

		$stmt = $pdo->prepare($sql);

		$stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
		$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
		$stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
		$stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
		$stmt->bindParam(':nacionalidad', $nacionalidad, PDO::PARAM_STR);
		$stmt->execute();

		if($stmt->rowCount() == 1)
		{		
			header("Location: exito.php");
		}

	}