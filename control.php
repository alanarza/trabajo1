<?php

/*
error_reporting(E_ALL);
ini_set("display_errors", 1);
*/

if(!isset($_SESSION)){
	session_start();
}


	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
	{
		header("Location: index.php");
	}	

	if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['action']))
	{
		header("Location: index.php");
	}


	//verifica acciones por metodo post/////////////////////////////////////////////////////
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$action = $_POST['action'];

		//seccion que maneja el login/
		if($action == 'login')
		{
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			try{

				$conn = new PDO('mysql:host=localhost;dbname=registros','root','udc');
				$sql = "SELECT * FROM usuarios WHERE user = :usuario AND pass = :contrasenia";
				$stmt = $conn->prepare($sql);
				$stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
				$stmt->bindParam(':contrasenia', $pass, PDO::PARAM_STR);
				$stmt->execute();

				if($stmt->rowCount() == 1)
				{
					$fila = $stmt->fetch(PDO::FETCH_ASSOC);
					$_SESSION['nombre'] = $fila['nombre'];
					$_SESSION['apellido'] = $fila['apellido'];
					$_SESSION['id'] = $fila['id'];

					header("Location: index.php");
					die();
				}	

			} catch(PDOException $e){
				throw new Exception($e->getMessage());
			}

		}

		//seccion que maneja el alta de usuarios/
		if($action == 'insert')
		{
			$apellido = 	$_POST['apellido'];
			$nombre = 		$_POST['nombre'];
			$dni = 			$_POST['dni'];
			$fecha_nacim =	$_POST['fecha']; 
			$sexo = 		$_POST['sexo'];
			$nacionalidad = $_POST['nacionalidad'];
			$provincia = 	$_POST['provincia'];
			$domicilio = 	$_POST['domicilio'];
			$fec_expedicion = date('Y-m-d');
			$fec_vencimiento = date('Y-m-d', strtotime("+15 Years"));
			$donante = 		$_POST['donante'];
			$tramite = 		$_POST['tramite'];



			$conn = new PDO('mysql:host=localhost;dbname=registros','root','udc');

			$sql = "INSERT INTO usuarios (apellido, nombre, dni, nacimiento, sexo, nacionalidad, provincia, domicilio, fecha_expedicion, fecha_vencimiento, donante, num_tramite)
					values (:apellido,:nombre , :dni, :nacimiento, :sexo, :nacionalidad, :provincia, :domicilio, :fecha_expedicion, :fecha_vencimiento, :donante, :num_tramite)";

			$stmt = $conn->prepare($sql);

			$stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
			$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
			$stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
			$stmt->bindParam(':nacimiento', $fecha_nacim, PDO::PARAM_STR);
			$stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
			$stmt->bindParam(':nacionalidad', $nacionalidad, PDO::PARAM_STR);
			$stmt->bindParam(':provincia', $provincia, PDO::PARAM_STR);
			$stmt->bindParam(':domicilio', $domicilio, PDO::PARAM_STR);
			$stmt->bindParam(':fecha_expedicion', $fec_expedicion, PDO::PARAM_STR);
			$stmt->bindParam(':fecha_vencimiento', $fec_vencimiento, PDO::PARAM_STR);
			$stmt->bindParam(':donante', $donante, PDO::PARAM_STR);
			$stmt->bindParam(':num_tramite', $tramite, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt->rowCount() == 1)
			{		
				header("Location: index.php");
			}
			
		}
	}

	//verifica acciones por metodo get/////////////////////////////////////////////////////
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$action1 = $_GET['action'];

		if($action1 == 'index')
		{
			require("pagina.php");
		}

		if($action1 == 'salir')
		{
			$_SESSION = array();
			
			session_destroy();
			header("Location: index.php");
			
			die();
		}

		if($action1 == 'listar')
		{
			//action para listar todos los registros
		}
	}
	


/*
$a = $_POST['apellido'];
			$n = $_POST['nombre'];
			$apellido = ucwords(strtolower($a));
			$nombre = ucwords(strtolower($n));
*/